<?php

namespace App\Models\Finance;

use App\Models\Catalog\Product;
use App\Models\Utilities\Tax;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory;
    use UuidGenerator;

    //use SoftDeletes;

    protected $fillable = [
        'articleable_id',
        'articleable_type',
        'designation',
        'description',
        'quantity',
        'price_uni',
        'price_ht',
        'price_total',
        'price_tax',
        'remise_fix',
        'remise',
        'taux_remise',
        'taux_tax',
        'product_id',
        'taxe_id'
    ];

    protected $casts = [
        'quantity' => 'integer',
        'remise_fix' => 'boolean',
        //'price_ht' => 'integer',
        //'prix_unitaire' => 'integer'
    ];

    public function articleable(): \Illuminate\Database\Eloquent\Relations\MorphTo
    {
        return $this->morphTo();
    }

    public function product(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function taxe(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->BelongsTo(Tax::class, 'taxe_id');
    }

    public function getFormatedMontantHtAttribute(): string
    {
        return number_format($this->montant_ht, 2);
    }

    public function getFormatedPrixUnitaireAttribute(): string
    {
        return number_format($this->prix_unitaire, 2);
    }

    public function getFormatedPriceRemiseAttribute(): string
    {
        return number_format($this->taux_remise, 2);
    }

    /* public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = nl2br($value);
    }*/

    public function setDesignationAttribute($value)
    {
        $this->attributes['designation'] = nl2br($value);
    }
}
