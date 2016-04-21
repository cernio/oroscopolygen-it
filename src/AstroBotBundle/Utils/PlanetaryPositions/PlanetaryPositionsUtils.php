<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PlanetaryPositionsUtils
 *
 * @author cernio
 */
class PlanetaryPositionsUtils {
    //put your code here
}

/**
 * Adds Current Planetary Positions Widget
 *
 * @author	Isabel Castillo
 * @package 	Current Planetary Positions
 * @extends 	WP_Widget
 */
class cpp_widget extends WP_Widget {
	public function __construct() {
		parent::__construct(
	 		'cpp_widget',
			__('Current Planetary Positions', 'current-planetary-positions'),
			array( 'description' => __( 'Display the current planetary positions in the zodiac signs.', 'current-planetary-positions' ), )
		);
	}

	public function isa_get_sign_position($longitude) {
		$sym = array('aries','taurus','gemini','cancer','leo','virgo','libra','scorpio','sagittarius','capricorn','aquarius','pisces');
		$localize_signs = array( __( 'Aries', 'current-planetary-positions' ), __( 'Taurus', 'current-planetary-positions' ), __( 'Gemini', 'current-planetary-positions' ), __( 'Cancer', 'current-planetary-positions' ), __( 'Leo', 'current-planetary-positions' ), __( 'Virgo', 'current-planetary-positions' ), __( 'Libra', 'current-planetary-positions' ), __( 'Scorpio', 'current-planetary-positions' ), __( 'Sagittarius', 'current-planetary-positions' ), __( 'Capricorn', 'current-planetary-positions' ), __( 'Aquarius', 'current-planetary-positions'), __( 'Pisces', 'current-planetary-positions') );

		foreach ($sym as $key => $val) {
			$symbol[$key] = '<span id="currentplanets_sprite" class="' . $val . '"></span> '. $localize_signs[$key];
		}
	
		$sign_num = floor($longitude / 30);
		$pos_in_sign = $longitude - ($sign_num * 30);
		$deg = floor($pos_in_sign);
		$full_min = ($pos_in_sign - $deg) * 60;
		$min = floor($full_min);
		$full_sec = round(($full_min - $min) * 60);
		
		$dms_numbers_range = range(0, 59);
					
		$localize_dms_numbers = array(_('00'),_('01'),_('02'),_('03'),_('04'),_('05'),_('06'),_('07'),_('08'),_('09'),_('10'),_('11'),_('12'),_('13'),_('14'),_('15'),_('16'),_('17'),_('18'),_('19'),_('20'),_('21'),_('22'),_('23'),_('24'),_('25'),_('26'),_('27'),_('28'),_('29'),_('30'),_('31'),_('32'),_('33'),_('34'),_('35'),_('36'),_('37'),_('38'),_('39'),_('40'),_('41'),_('42'),_('43'),_('44'),_('45'),_('46'),_('47'),_('48'),_('49'),_('50'),_('51'),_('52'),_('53'),_('54'),_('55'),_('56'),_('57'),_('58'),_('59'));
					
		$localized_dms = array_combine($dms_numbers_range,$localize_dms_numbers);
		
		$localized_deg = $localized_dms[$deg];
		$localized_min = $localized_dms[$min];
		$localized_full_sec = isset($localized_dms[$full_sec]) ? $localized_dms[$full_sec] : _('00');

		// localize degree symbol

		if( is_rtl() ) $degree =  "&deg;$localized_deg";
		else $degree =  "$localized_deg&deg;";

		$set_out = sprintf( __( '%s %s %s%s %s%s', 'current-planetary-positions' ), 
						$degree,
						$symbol[$sign_num],
						$localized_min,
						chr(39),
						$localized_full_sec,
						chr(34)
						);

		return $set_out;

	}
	
	/**
	 * Front-end display of widget.
	 */

	public function widget( $args, $instance ) {

		// get UT/GMT time for exec */
		
		$time = new DateTime('now', new DateTimeZone('UTC'));
		
		$utdate = $time->format('j').'.'.$time->format('n').'.'.$time->format('Y');// day.month.year (single-digit day, month, 4-digit year)
		$uttime = $time->format('H').':'.$time->format('i').':'.$time->format('s');  // HH:MM:SS
		
		$num_planets = 11;
		
		$sweph = CPP_PLUGIN_DIR . 'sweph'; // set path to ephemeris
		unset($out,$longitude,$speed);
		$PATH = '';
		putenv("PATH=$PATH:$sweph");

		// get 11 planets
		
		exec ("swetest -edir$sweph -b$utdate -ut$uttime -p0123456789D -eswe -fPls -g, -head", $out);
		// output $row[] = (planet name, longitude decimal, speed)
		// 1 row for each of 11 planets, indexed 0 - 10
		
		foreach ($out as $key => $line) {
		
			$row = explode(',',$line);
			$pl_name[$key] = $row[0];
			$longitude[$key] = $row[1];
			$speed[$key] = $row[2];
		}
		// localize planet names
		$pl_name = array( __( 'Sun', 'current-planetary-positions' ), __( 'Moon', 'current-planetary-positions' ), __( 'Mercury', 'current-planetary-positions' ), __( 'Venus', 'current-planetary-positions' ), __( 'Mars', 'current-planetary-positions' ), __( 'Jupiter', 'current-planetary-positions' ), __( 'Saturn', 'current-planetary-positions' ), __( 'Uranus', 'current-planetary-positions' ), __( 'Neptune', 'current-planetary-positions' ), __( 'Pluto', 'current-planetary-positions' ), __( 'Chiron', 'current-planetary-positions') );

		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? __( 'Current Planetary Positions', 'current-planetary-positions' ) : $instance['title'], $instance, $this->id_base );
		$show_utc_time = empty($instance['show_utc_time']) ? false : 'on';
		
		echo $args['before_widget'];
		if ( $title ) {
			echo '<h3 class="widget-title">'. $title . '</h3>';
		}
		// begin output to browser
		?>
		<div id="current-planets">
		<?php 

		// if Show UTC option is checked, show it instead
		if ( $show_utc_time ) {
	
			$utc_display_date = $time->format('j').'-'.$time->format('M').'-'.$time->format('Y');// like 3-Apr-2014
			$utc_display_time = $time->format('H').':'.$time->format('i');  // HH:MM
					
			echo '<p id="utc-time">' . $utc_display_date . ', ' . $utc_display_time . ' UT/GMT';

		} else {

			// display local date and time
			echo '<p id="localtime">'; ?><script>var d=new Date();var n=d.toLocaleDateString();var t=d.toLocaleTimeString();document.write(n + "<br />" + t);</script><?php
		}

		echo '</p><table>';

		for ($i = 0; $i <= $num_planets - 1; $i++) {
			echo '<tr><td>';
				printf( __( '%s', 'current-planetary-positions' ), $pl_name[$i] );
				echo '&nbsp;';
			echo '</td><td>';
				echo $this->isa_get_sign_position($longitude[$i]);
				if ($speed[$i] < 0) { //retrograde
						echo '&nbsp;' . __('R', 'current-planetary-positions' );
				}
			echo  '</td></tr>';
		}
		echo "</table></div>";
		echo $args['after_widget'];
	}

	/**
	 * Sanitize widget form values as they are saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['show_utc_time'] = empty($new_instance['show_utc_time']) ? false : 'on';
		return $instance;
	}

	/**
	 * Back-end widget form.
	 */
	public function form( $instance ) {
		$defaults = array( 
			'title' => __('Current Planetary Positions', 'current-planetary-positions'),
			'show_utc_time' => false
			);
 		$instance = wp_parse_args( (array) $instance, $defaults );
    	?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>">
			<?php _e( 'Title:', 'current-planetary-positions' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" 
				name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $instance['title']; ?>" />
		</p>
		<p><input id="<?php echo $this->get_field_id( 'show_utc_time' ); ?>" name="<?php echo $this->get_field_name( 'show_utc_time' ); ?>" type="checkbox" class="checkbox" <?php checked( $instance['show_utc_time'], 'on' ); ?> /><label for="<?php echo $this->get_field_id( 'show_utc_time' ); ?>"><?php _e( ' Show UT/GMT time instead of viewer\'s local time.', 'current-planetary-positions' ); ?></label></p>
		<?php 
	}
}
?>
