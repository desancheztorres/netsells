<?php

namespace App\Services;

class RomanNumeralConverter
{
    const NUMERALS = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    ];

    public function convertInteger(int $integer): string {
        $romanNumeral = '';

        foreach (static::NUMERALS as $key => $value) {
            for(; $integer >= $value; $integer -= $value) {
                $romanNumeral .= $key;
            }
        }

        return $romanNumeral;
    }
}
