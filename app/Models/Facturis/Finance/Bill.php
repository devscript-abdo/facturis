<?php

namespace App\Models\Facturis\Finance;

use App\Traits\GetModelByUuid;
use App\Traits\NumerotationGenerator;
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
    use NumerotationGenerator;

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
        'active',
    ];

    protected $casts = [
        'bill_date' => 'date:Y-m-d',
        'active' => 'boolean',
    ];

    public function billable()
    {
        return $this->morphTo();
    }

    public function invoice()
    {
        return $this->belongsTo(Invoice::class, 'billable_id');
    }
}
