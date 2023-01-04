<?php

namespace App\Models\Facturis\Finance;

use App\Traits\GetModelByUuid;
use App\Traits\Nl2br;
use App\Traits\NumerotationGenerator;
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
    use NumerotationGenerator;

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
        'due_date' => 'date:Y-m-d',
        'bon_date' => 'date:Y-m-d',
        'sent_at' => 'datetime',
        'active' => 'boolean',
        'sent_at' => 'boolean',
    ];

    public function articles()
    {
        return $this->morphMany(Article::class, 'articleable');
    }
}
