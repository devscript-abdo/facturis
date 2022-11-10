<?php

namespace App\Models\Facturis\CRM;

use App\Traits\GetModelByUuid;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    use GetModelByUuid;
    use UuidGenerator;

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

    public static function boot()
    {
        parent::boot();

        static::creating(function($model){
            $number = self::max('id') + 1;
            $model->code = str_pad($number,5,0,STR_PAD_LEFT);
            $model->full_number = 'REGL-'. str_pad($number,5,0,STR_PAD_LEFT);
        });
    }
}
