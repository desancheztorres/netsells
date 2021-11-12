<?php

namespace App\Http\Resources\RomanNumeral;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RomanNumeralResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => [
                'number' => (int) $this->number,
                'roman_numeral' => $this->roman_numeral,
                'total' => $this->total ?? 1,
            ]
        ];
    }
}
