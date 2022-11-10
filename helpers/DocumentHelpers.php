<?php


if(!function_exists('getDocument'))
{
    function getDocument()
    {
       return app(App\Settings\DocumentSettings::class);
    }
}