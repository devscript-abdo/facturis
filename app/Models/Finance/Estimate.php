<?php

namespace App\Models\Finance;

use App\Models\Client;
use App\Models\Scopes\EstimateScopes;
use App\Models\Utilities\History;
use App\Models\Utilities\PaymentType;
use App\Traits\GetModelByUuid;
use App\Traits\NumerotationGenerator;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

class Estimate extends Model
{
    use HasFactory;
    use UuidGenerator;
    use GetModelByUuid;
    use NumerotationGenerator;
    //use SoftDeletes;

    use EstimateScopes;

    protected $fillable = [
        'is_invoiced',
        'code',
        'full_number',
        'price_ht',
        'price_total',
        'price_tax',
        'ht_price_remise',
        'status',
        'document_date',
        'due_date',
        'invoice_id',
        'client_id',
        'is_send',
        'active',
        'condition_general',
        'payment_type_id',
    ];

    protected $with = [];

    //protected $dates = ['due_date', 'document_date'];

    protected $casts = [
        'is_send' => 'boolean',
        'due_date' => 'date',
        'document_date' => 'date:d/m/Y',
        'has_header' => 'boolean',
    ];

    public function setDocumentDateAttribute($value)
    {
        $this->attributes['document_date'] = Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');
    }

    public function payment(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(PaymentType::class, 'payment_type_id');
    }

    public function invoice(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Invoice::class);
    }

    public function client(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function articles(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(Article::class, 'articleable')->orderBy('created_at', 'ASC');
    }

    public function histories(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(History::class, 'historyable')->orderBy('created_at', 'ASC');
    }

    public function setConditionGeneralAttribute($value)
    {
        $this->attributes['condition_general'] = nl2br($value);
    }

    public function getConditionAttribute(): array|string
    {
        //dd($this->condition_general);
        return str_replace('<br />', "\n", $this->attributes['condition_general']);
    }

    public function getFormatedPriceHtAttribute(): string
    {
        return number_format($this->price_ht, 2);
    }

    public function getFormatedPriceTotalAttribute(): string
    {
        return number_format($this->price_total, 2);
    }

    public function getFormatedTotalTvaAttribute(): string
    {
        return number_format($this->price_tax, 2);
    }

    public function getFormatedTotalRemiseAttribute(): string
    {
        $remise = $this->articles->sum('taux_remise');

        return number_format($remise, 2);
    }

    public function getFormatedHtPriceRemiseAttribute(): string
    {
        return number_format($this->ht_price_remise, 2);
    }


    public function getIsPublishedAttribute(): bool
    {
        return $this->published_at->lessThanOrEqualTo(Carbon::now());
    }

    public function getFullDateAttribute(): string
    {
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at);

        return $date->translatedFormat('d') . ' ' . $date->translatedFormat('F') . ' ' . $date->translatedFormat('Y');
    }
}
