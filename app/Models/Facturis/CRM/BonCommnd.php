<?php

namespace App\Models\Facturis\CRM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BonCommnd extends Model
{
    use HasFactory;




    public static function boot()
    {

        static::creating(function($model){

          if(self::count()<= 0)
          {
            $number = getDocument()->bc_start;

          }else{
            $number = ($model->max('code') + 1);
          }
          
          $code = str_pad($number,5,0,STR_PAD_LEFT);
          $model->code = $code;
          $model->full_number = getDocument()->bc_prefix . $code;

        });
    }
}
