<?php

namespace App\Http\countries;

class country
{
    protected static $countries = [
        "united states" => "us",
        "Afghanistan" => "af",
        "Albania" => "al",
        "Algeria" => "al",
        "American samoa" => "as",
        "andorra" => "an",
        "uganda" => "ug",
        "tanzania" => "tz",
        "Kenya" => "ky",
        "Rwanda" => "rw",
        "sudan" => "sd",
        "congo" => "co",
        "zambokia" => "za",
        "kampala" => "kla",
        "baden-wuerttemberg" => "ba-wue",
        "sachsen" => "op",
        "paulina" => "pau",
        "munichi" => "muche",
    ];

    public static function all()
    {
        return array_keys(static::$countries);
    }
}
