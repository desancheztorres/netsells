<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\RomanNumeral\RomanNumeralCollection;
use Illuminate\Support\Facades\DB;

class GetAllRomanNumeralsController extends Controller
{
    public function __invoke()
    {
        $romanNumerals = DB::table('roman_numerals')->get();

        $romanNumeralsCollection = new RomanNumeralCollection($romanNumerals);

        return response($romanNumeralsCollection);
    }
}
