<?php

namespace App\Models\Facturis\CRM;

use App\Traits\GetModelByUuid;
use App\Traits\Nl2br;
use App\Traits\PriceFormatter;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    use UuidGenerator;
    use GetModelByUuid;
    use Nl2br;
    use PriceFormatter;

    protected $fillable = [
        'articleable_id',
        'articleable_type',
        'designation',
        'description',
        'quantity',
        'unit_price',
        'ht_price',
        'tax_price',
        'remise_fix',
        'remise',
        'taux_remise'
    ];
    /**
     * 
     */
    protected  $casts = [
        'quantity' => 'integer',
        'remise_fix'=>'boolean',
    ];

    public function articleable()
    {
        return $this->morphTo();
    }
}
