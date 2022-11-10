<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Casts\Attribute;

trait PriceFormatter {

    
    public function getFormatedHtPriceAttribute()
    {
        return number_format($this->ht_price,2);
    }

    public function getFormatedTaxPriceAttribute()
    {
        return number_format($this->tax_price,2);
    }

    public function getFormatedTotalPriceAttribute()
    {
        return number_format($this->total_price,2);
    }
}