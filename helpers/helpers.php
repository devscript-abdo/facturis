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

if (! function_exists('appLogo')) {
    function appLogo()
    {
        if (Str::contains(getCompany()->logo, ['https://', 'http://'])) {
            return getCompany()->logo;
        }

        return asset('storage/'.getCompany()->logo);
    }
}
