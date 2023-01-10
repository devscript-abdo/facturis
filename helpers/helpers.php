<?php

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
