<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\RomanNumeral\RomanNumeralCollection;
use Illuminate\Support\Facades\DB;

class GetTopTenConvertedIntegersController extends Controller
{
    public function __invoke()
    {
        $romanNumerals = DB::table('roman_numerals')
            ->orderBy('total', 'DESC')
            ->limit(10)
            ->get();

        $romanNumeralsCollection = new RomanNumeralCollection($romanNumerals);

        return response($romanNumeralsCollection);
    }
}
