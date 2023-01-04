<?php

declare(strict_types=1);

namespace App\Models\Facturis\Finance;

use App\Traits\GetModelByUuid;
use App\Traits\NumerotationGenerator;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    use UuidGenerator;
    use GetModelByUuid;
    use NumerotationGenerator;

    protected $fillable = [
        'client_id',
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
        'is_active',
    ];

    protected $casts = [
        'due_date' => 'date:Y-m-d',
        'invoice_date' => 'date:Y-m-d',
        'is_active' => 'boolean',
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
}
