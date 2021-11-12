<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RomanNumeral\StoreRomanNumeralRequest;
use App\Http\Resources\RomanNumeral\RomanNumeralResource;
use App\Models\RomanNumeral;
use App\Services\RomanNumeralConverter;

class GenerateRomanNumeralController extends Controller
{
    public function __invoke(StoreRomanNumeralRequest $request, RomanNumeralConverter $numeralConverter)
    {
        $numberConverted = $numeralConverter->convertInteger($request->number);

        $romanNumeral = RomanNumeral::where('number', $request->number)->first();

        if(!is_null($romanNumeral)) {
            $romanNumeral->total++;
            $romanNumeral->save();
        } else {
            $romanNumeral = new RomanNumeral;
            $romanNumeral->number = $request->number;
            $romanNumeral->roman_numeral = $numberConverted;
            $romanNumeral->save();
        }

        $romanNumeralResource = new RomanNumeralResource($romanNumeral);

        return response($romanNumeralResource, 201);
    }
}
