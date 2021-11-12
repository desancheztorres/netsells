<?php

use Illuminate\Support\Facades\Route;

Route::post('/generate-roman-numeral', 'GenerateRomanNumeralController');
Route::get('/roman-numerals', 'GetAllRomanNumeralsController');
Route::get('/top-ten-converted-integers', 'GetTopTenConvertedIntegersController');
