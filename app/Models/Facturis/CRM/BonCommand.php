<?php

namespace App\Models\Facturis\CRM;

use App\Traits\GetModelByUuid;
use App\Traits\Nl2br;
use App\Traits\PriceFormatter;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BonCommand extends Model
{
      use HasFactory;
      use GetModelByUuid;
      use UuidGenerator;
      use PriceFormatter;
      use Nl2br;

      protected $fillable = [
        'provider_id',
        'provider_uuid',
        'code',
        'full_number',
        'ht_price',
        'total_price',
        'tax_price',
        'bon_date',
        'due_date',
        'approved_date',
        'admin_notes',
        'client_notes',
        'condition',
        'active',
        'is_sent',
        'sent_at',
    ];

    protected $casts = [
        'due_date'=>'date:Y-m-d',
        'bon_date'=>'date:Y-m-d',
        'sent_at'=>'datetime',
        'active'=>'boolean',
        'sent_at'=>'boolean'
    ];

    public function articles()
    {
        return $this->morphMany(Article::class,'articleable');
    }

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
