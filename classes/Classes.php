<?php

class Classes
{
    private static $_summerClasses = array();
    private static $_fallClasses = array();
    private static $_winterClasses = array();
    private static $_springClasses = array();

    function __construct()
    {
    }


    function getSummerClasses()
    {
        return self::$_summerClasses;
    }

    function getFallClasses()
    {
        return self::$_fallClasses;
    }

    function getWinterClasses()
    {
        return self::$_winterClasses;
    }

    function getSpringClasses()
    {
        return self::$_springClasses;
    }

    function setSummerClasses($summerClasses)
    {
        self::$_summerClasses = $summerClasses;
    }

    function setFallClasses($fallClasses)
    {
        self::$_fallClasses = $fallClasses;
    }

    function setWinterClasses($winterClasses)
    {
        self::$_winterClasses = $winterClasses;
    }

    function setSpringClasses($springClasses)
    {
        self::$_springClasses = $springClasses;
    }
}