<?php
namespace Elsie\StringUtils;

class StringHelper{
    public static function toUpperCase($string)
    {
        return strtoupper($string);
    }

    public static function toLowerCase($string)
    {
        return strtolower($string);
    }
}