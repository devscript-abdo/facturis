<?php

namespace App\Models\Facturis\Finance;

use App\Traits\GetModelByUuid;
use App\Traits\PriceFormatter;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    use UuidGenerator;
    use GetModelByUuid;
    use PriceFormatter;

    protected $fillable = [
        'client_id',
        'client_uuid',
        'code',
        'full_number',
        'bl_code',
        'bc_code',
        'ht_price',
        'total_price',
        'tax_price',
        'invoice_date',
        'due_date',
        'payment_date',
        'admin_notes',
        'client_notes',
        'condition',
        'active',
    ];

    protected $casts = [
        'due_date' => 'date:Y-m-d',
        'invoice_date' => 'date:Y-m-d',
        'active' => 'boolean',
    ];

    public function estimate()
    {
        return $this->hasOne(Estimate::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function articles()
    {
        return $this->morphMany(Article::class, 'articleable');
    }

    public function bill()
    {
        return $this->morphMany(Bill::class, 'billable')->withDefault();
    }

    public static function boot()
    {
        static::creating(function ($model) {
            if (self::count() <= 0) {
                $number = getDocument()->invoice_start;
            } else {
                $number = ($model->max('code') + 1);
            }

            $code = str_pad($number, 5, 0, STR_PAD_LEFT);
            $model->code = $code;
            $model->full_number = getDocument()->invoice_prefix.$code;
        });
    }
}
