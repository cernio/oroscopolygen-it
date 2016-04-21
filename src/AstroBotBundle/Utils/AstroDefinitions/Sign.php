<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AstroBotBundle\Utils\AstroDefinitions;

const S_ARIES = 'Aries';
const S_TAURUS = 'Taurus';
const S_GEMINI = 'Gemini';
const S_CANCER = 'Cancer';
const S_LEO = 'Leo';
const S_VIRGO = 'Virgo';
const S_LIBRA = 'Libra';
const S_SCORPIO = 'Scorpio';
const S_SAGITTARIUS = 'Sagittarius';
const S_CAPRICORN = 'Capricorn';
const S_ACQUARIUS = 'Acquarium';
const S_PISCES = 'Pisces';

const SIGN_LONGITUDE_MIN_ANGLE = [
    S_ARIES => 0,
    S_TAURUS => 30,
    S_GEMINI => 60,
    S_CANCER => 90,
    S_LEO => 120,
    S_VIRGO => 150,
    S_LIBRA => 180,
    S_SCORPIO => 210,
    S_SAGITTARIUS => 240,
    S_CAPRICORN => 270,
    S_ACQUARIUS => 300,
    S_PISCES => 330,
];

const P_JUPITER = 'Jupiter';
const P_MARS = 'Mars';
const P_MERCURY = 'Mercury';
const P_MOON = 'Moon';
const P_SATURN = 'Saturn';
const P_SUN = 'Sun';
const P_VENUS = 'Venus';

const E_AIR = 'Air';
const E_EARTH = 'Earth';
const E_FIRE = 'Fire';
const E_WATER = 'Water';

const C_CARDINAL = 0;
const C_FIXED = 1;
const C_MUTABLE = 2;


const TRIPLICITY_CARDINAL=[
    S_ARIES=>C_CARDINAL,
    S_CAPRICORN=>C_CARDINAL,
    S_LIBRA=>C_CARDINAL,
    S_CANCER=>C_CARDINAL,
    S_LEO=>C_FIXED,
    S_TAURUS=>C_FIXED,
    S_ACQUARIUS=>C_FIXED,
    S_SCORPIO=>C_FIXED,
    S_SAGITTARIUS=>C_MUTABLE,
    S_VIRGO=>C_MUTABLE,
    S_GEMINI=>C_MUTABLE,
    S_PISCES=>C_MUTABLE
];

const TRIPLICITY_ELEMENT=[
    S_ARIES=>E_FIRE,
    S_LEO=>E_FIRE,
    S_SAGITTARIUS=>E_FIRE,
    S_CAPRICORN=>E_EARTH,
    S_TAURUS=>E_EARTH,
    S_VIRGO=>E_EARTH,
    S_LIBRA=>E_AIR,
    S_ACQUARIUS=>E_AIR,
    S_GEMINI=>E_AIR,
    S_CANCER=>E_WATER,
    S_SCORPIO=>E_WATER,
    S_PISCES=>E_WATER,
];

const RULING_CELESTIALBODY_CLASSICAL = [
    S_ARIES => P_MARS,
    S_TAURUS => P_VENUS,
    S_GEMINI => P_MERCURY,
    S_CANCER => P_MOON,
    S_LEO => P_SUN,
    S_VIRGO => P_MERCURY,
    S_LIBRA => P_VENUS,
    S_SCORPIO => P_MARS,
    S_SAGITTARIUS => P_JUPITER,
    S_CAPRICORN => P_SATURN,
    S_ACQUARIUS => P_SATURN,
    S_PISCES => P_JUPITER,
];


const DIGNITY =[
    P_SUN=>[S_LEO],
    P_MOON=>[S_CANCER],
    P_MERCURY=>[S_GEMINI,S_VIRGO],
    P_VENUS=>[S_LIBRA,S_TAURUS],
    P_MARS=>[S_ARIES,S_SCORPIO],
    P_JUPITER=>[S_SAGITTARIUS,S_PISCES],
    P_SATURN=>[S_CAPRICORN,S_ACQUARIUS],
];

const DETRIMENT =[
    P_SUN=>[S_ACQUARIUS],
    P_MOON=>[S_CAPRICORN],
    P_MERCURY=>[S_SAGITTARIUS,S_PISCES],
    P_VENUS=>[S_ARIES,S_SCORPIO],
    P_MARS=>[S_LIBRA,S_TAURUS],
    P_JUPITER=>[S_GEMINI,S_VIRGO],
    P_SATURN=>[S_CANCER,S_LEO],
];

const EXALTATION =[
    P_SUN=>[S_ARIES],
    P_MOON=>[S_TAURUS],
    P_MERCURY=>[S_ACQUARIUS],
    P_VENUS=>[S_PISCES],
    P_MARS=>[S_CAPRICORN],
    P_JUPITER=>[S_CANCER],
    P_SATURN=>[S_LIBRA],
];

const FALL =[
    P_SUN=>[S_LIBRA],
    P_MOON=>[S_SCORPIO],
    P_MERCURY=>[S_LEO],
    P_VENUS=>[S_VIRGO],
    P_MARS=>[S_CANCER],
    P_JUPITER=>[S_CAPRICORN],
    P_SATURN=>[S_ARIES],
];


const FX_GOODLUCK='fortune';
const FX_LUNACY='lunacy';
const FX_CHANGE='change';
const FX_CONFLICT='conflict';
const FX_ACCIDENT='accident';

const PLANET_EFFECTS=[
    P_SUN=>FX_GOODLUCK,
    P_MOON=>FX_LUNACY,
    P_MERCURY=>FX_CHANGE,
    P_VENUS=>FX_GOODLUCK,
    P_MARS=>FX_CONFLICT,
    P_JUPITER=>FX_GOODLUCK,
    P_SATURN=>FX_ACCIDENT
];


const SYMBOL_ARIES  = \u2648;
const SYMBOL_TAURUS = \u2649;
const SYMBOL_GEMINI = \u264A;
const SYMBOL_CANCER = \u264B;
const SYMBOL_LEO    = \u264C;
const SYMBOL_VIRGO  = \u264D;
const SYMBOL_LIBRA  = \u264E;
const SYMBOL_SCORPIO = \u264F;
const SYMBOL_SAGITTARIUS = \u2650;
const SYMBOL_CAPRICORN = \u2651;
const SYMBOL_ACQUARIUS = \u2652;
const SYMBOL_PISCES = \u2653;
        
//+-8%
const ASPECT_CONJUNCTION=[0,8]; //strong emphasis
const ASPECT_OPPOSITION=[172,180]; // tension, conflict
const ASPECT_TRINE=[112,128]; //harmony, ease of expressions, reinforcement. artistic creative talent
const ASPECT_SQUARE=[82,98]; //frustration, inhibition, determination to overcome limitations

//+-6%
const ASPECT_SEXTILE=[54,66]; // harmony, artistic creative talent. see trine
//+-3%
const ASPECT_QUINCUNX=[147,153]; // difficulty,stress,disease. see square

//IGNORE FOLLOWING
//+-2%
const ASPECT_SEMISEXTILE=[28,32]; // conscious effort to be made
const ASPECT_SEMISQUARE=[43,47]; // difficult circumstance. see semisextile
const ASPECT_SESQUIQUADRATE=[133,137]; // stressful condition. see semisextile
const ASPECT_QUINTILE=[70,74]; //talent, luck
const ASPECT_BIQUINTILE=[142,146]; //talent, luck
    
const ASPECTS=[
    ASPECT_CONJUNCTION,
    ASPECT_OPPOSITION,
    ASPECT_TRINE,
    ASPECT_SQUARE,
    ASPECT_SEXTILE,
    ASPECT_QUINCUNX,
    ASPECT_SEMISEXTILE,
    ASPECT_SEMISQUARE,
    ASPECT_SESQUIQUADRATE,
    ASPECT_QUINTILE,
    ASPECT_BIQUINTILE
    ];
        
/**
 *
  ELEMENTS
  Positive (self-expressive)
  Fire        Enthusiasm; drive to express self; faith            Aries; Leo; Sagittarius
  Air         Communication; socialization; conceptualization     Gemini; Libra; Aquarius
  Negative (self-containing)
  Earth	Practicality; caution; material world       Taurus; Virgo; Capricorn
  Water	Emotion; empathy; sensitivity               Cancer; Scorpio; Pisces

  CARDINALITY
  Cardinal	Cardinal symbol.svg	Action; dynamic; initiative; great force	Aries; Cancer; Libra; Capricorn
  Fixed	Fixed symbol.svg	Resistance to change; great willpower; inflexible	Taurus; Leo; Scorpio; Aquarius
  Mutable	Mutable symbol.svg	Adaptability; flexible; resourceful	Gemini; Virgo; Sagittarius; Pisces


              Fire            Earth       Air         Water
  Cardinal    Aries           Capricorn   Libra       Cancer
  Fixed       Leo             Taurus      Aquarius    Scorpio
  Mutable     Sagittarius     Virgo	Gemini      Pisces
 *

  Sign names	"Ruling celestial body Classical"
  Aries	Mars
  Taurus	Venus
  Gemini	Mercury
  Cancer	Moon
  Leo	Sun
  Virgo	Mercury
  Libra	Venus
  Scorpio	Mars
  Sagittarius	Jupiter
  Capricorn	Saturn
  Aquarius	Saturn
  Pisces	Jupiter
 * 
 * 
 * 
 * Planet (Symbol)	Dignity	Detriment	Exaltation	Fall
  Sun (Sol)             Leo	Aquarius	Aries           Libra
  Moon (First quarter moon)	Cancer	Capricorn	Taurus	Scorpio
  Mercury (Mercury)	Gemini and Virgo	Sagittarius and Pisces	Aquarius	Leo
  Venus (Venus)	Libra and Taurus	Aries and Scorpio	Pisces	Virgo
  Mars (Mars)	Aries and Scorpio	Libra and Taurus	Capricorn	Cancer
  Jupiter (Jupiter)	Sagittarius and Pisces	Gemini and Virgo	Cancer	Capricorn
  Saturn (Saturn)	Capricorn and Aquarius	Cancer and Leo	Libra	Aries

 * @author cernio
 */
class Sign {

    // ELEMENT
    protected $name;
    protected $dateFrom;
    protected $dateEnd;
    protected $cardinality;
    protected $element;
    protected $rulingCelestialBody;
    protected $dignity;
    protected $detriment;
    protected $exaltation;
    protected $fall;

    const DIGNITY = [
    ];

}
