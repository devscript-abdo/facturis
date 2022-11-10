<?php

namespace App\Models\Facturis\Finance;

use App\Traits\GetModelByUuid;
use App\Traits\PriceFormatter;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    use GetModelByUuid;
    use UuidGenerator;
    use PriceFormatter;

    protected $fillable = [
        'code',
        'full_number',
        'reference',
        'ht_price',
        'total_price',
        'tax_price',
        'bill_mode',
        'bill_date',
        'notes',
        'recu',
        'billable_id',
        'billable_type',
        'active'
    ];

    protected $casts = [
        'bill_date'=>'date:Y-m-d',
        'active'=>'boolean'
    ];

    public function billable()
    {
        return $this->morphTo();
    }

    public function invoice()
    {
        return $this->belongsTo(Invoice::class,'billable_id');
    }

 
    public static function boot()
    {

        static::creating(function($model){

          if(self::count()<= 0)
          {
            $number = getDocument()->bill_start;

          }else{
            $number = ($model->max('code') + 1);
          }
          
          $code = str_pad($number,5,0,STR_PAD_LEFT);
          $model->code = $code;
          $model->full_number = getDocument()->bill_prefix . $code;

        });
    }
}
