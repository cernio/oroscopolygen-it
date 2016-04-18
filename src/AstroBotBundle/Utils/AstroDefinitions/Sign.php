<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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

Sign names	"Ruling celestial body"
Aries           Mars
Taurus          Earth
Gemini          Mercury
Cancer          Moon
Leo             Sun
Virgo           Ceres
Libra           Venus
Scorpio         Pluto
Sagittarius	Jupiter
Capricorn	Saturn
Aquarius	Uranus
Pisces	Neptune

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
}
