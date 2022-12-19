<?php

if (! function_exists('getCompany')) {
    function getCompany()
    {
        return app(App\Settings\CompanySettings::class);
    }
}
