<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Casts\Attribute;

trait Nl2br {


    /*public function setConditionAttribute($value)
    {
        $this->attributes['condition'] = nl2br($value);
    }*/
     /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function condition(): Attribute
    {
        return Attribute::make(
            get : fn ($value) => str_replace('<br />',"\n",$value),
            set : fn ($value) => nl2br($value),
        );
    }
}