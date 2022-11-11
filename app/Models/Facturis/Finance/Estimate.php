<?php

namespace App\Models\Facturis\Finance;

use App\Traits\GetModelByUuid;
use App\Traits\Nl2br;
use App\Traits\PriceFormatter;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estimate extends Model
{
    use HasFactory;
    use GetModelByUuid;
    use UuidGenerator;
    use PriceFormatter;
    use Nl2br;

    protected $fillable = [
        'client_id',
        'client_uuid',
        'invoice_id',
        'invoice_uuid',
        'code',
        'full_number',
        'ht_price',
        'total_price',
        'tax_price',
        'estimate_date',
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
        'estimate_date'=>'date:Y-m-d',
        'sent_at'=>'datetime',
        'active'=>'boolean',
        'sent_at'=>'boolean'
    ];

    /******* Define Relations *****/

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function articles()
    {
        return $this->morphMany(Article::class,'articleable');
    }
    
    public static function boot()
    {

        static::creating(function($model){

          if(self::count()<= 0)
          {
            $number = getDocument()->estimate_start;

          }else{
            $number = ($model->max('code') + 1);
          }
          
          $code = str_pad($number,5,0,STR_PAD_LEFT);
          $model->code = $code;
          $model->full_number = getDocument()->estimate_prefix . $code;

        });
    }
}
