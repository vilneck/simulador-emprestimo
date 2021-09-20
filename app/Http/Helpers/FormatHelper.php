<?php
namespace App\Http\Helpers;

class FormatHelper
{
    static function unmaskMoney($value)
    {
        return str_replace(',','.',str_replace('.','',$value));
    }

    static function maskMoney($value)
    {
        return number_format($value, 2, ",", ".");
    }
}
