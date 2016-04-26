<?php

namespace AstroBotBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ZodiacController extends Controller {

    /**
     * @Route("/horoscope/lucky-sign")
     */
    public function GetLuckySignAction() {
        return $this->render('AstroBotBundle:Zodiac:get_lucky_sign.html.twig', array(
                        // ...
        ));
    }

    /**
     * @Route("/horoscope/daily/{sign}/{date}", defaults={"sign"=123,"date"="today"},
     * requirements={ "sign": "aries|taurus|gemini|cancer|leo|virgo|libra|scorpio|sagittarius|capricorn|acquarium|pisces"})

     */
    public function GetDailyHoroscopeAction($sign = "aries", $date = "today") {


        $responseArray = ['query' => ['sign' => $sign, 'date' => $date],
            'horoscope' => [
                'text' => 'Sample Horoscope content',
                'keywords' => ['strength', 'disease'],
                'scores' => ['love' => 5, 'career' => 4, 'wealth' => 1, 'health' => 3]
            ],
        ];
        return $this->render('AstroBotBundle:Zodiac:get_daily_horoscope.html.twig', array(
                    'sign' => $sign,
                    'date' => $date,
        ));
    }

    /**
     * ** @ Route("horoscope/weekly/{sign}/{date}", defaults={"sign"=123,"date"="today"})
     */
    public function GetWeeklyHoroscopeAction($sign = "aries", $date = "today") {
        return $this->render('AstroBotBundle:Zodiac:get_weekly_horoscope.html.twig', array(
                        // ...
        ));
    }

}
