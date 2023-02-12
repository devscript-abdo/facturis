<?php

use Illuminate\Support\Str;

if (!function_exists('getCompany')) {
    function getCompany()
    {
        return app(App\Settings\CompanySettings::class);
    }
}

if (!function_exists('getDocument')) {
    function getDocument()
    {
        return app(App\Settings\DocumentSettings::class);
    }
}

if (!function_exists('appLogo')) {
    function appLogo()
    {
        if (Str::contains(getCompany()->logo, ['https://', 'http://'])) {
            return getCompany()->logo;
        }

        return asset('storage/' . getCompany()->logo);
    }
}

if (!function_exists('isAdmin')) {
    function isAdmin()
    {
        return auth()->check() && auth()->user()->hasRole('SuperAdmin') ? true : false;
    }
}

if (!function_exists('removeCommaFromNumbers')) {
    function removeCommaFromNumbers($number)
    {
        return (gettype($number) == 'string' && !empty($number)) ? str_replace(',', '', $number) : $number;
    }
}


/**
 * Helper to only return digits, extract commas, etc.
 * @param string|null $text
 * @return float
 */
if (!function_exists('onlyNumbers')) {
    function onlyNumbers(?string $text): float
    {
        if (!$text) return 0.0;
        return (float)preg_replace("/[^0-9.-]/", '', $text);
    }
}
