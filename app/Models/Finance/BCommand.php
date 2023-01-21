<?php

namespace App\Models\Finance;

use App\Models\Utilities\History;
use App\Models\Utilities\PaymentType;
use App\Traits\GetModelByUuid;
use App\Traits\NumerotationGenerator;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class BCommand extends Model
{
    use HasFactory;
    use UuidGenerator;
    use GetModelByUuid;
    use NumerotationGenerator;

    protected $fillable = [
        'is_send',
        'condition_general',
    ];

    protected $casts = [
        'date_command' => 'date:Y-m-d',
        'is_send' => 'boolean',
    ];

    public function payment(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(PaymentType::class);
    }

    public function provider(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Provider::class);
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

    public function getEditUrlAttribute()
    {
        return route('buy:bcommandes.edit', $this->uuid);
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
        return number_format($this->price_tva, 2);
    }

    public function scopeFiltersDateBc(Builder $query, $from): Builder
    {
        return $query->whereDate('date_command', Carbon::createFromFormat('d-m-Y', $from)->format('Y-m-d'));
    }

    public function scopeFiltersDate(Builder $query, $from, $to): Builder
    {
        return $query->whereBetween(
            'date_command',
            [
                Carbon::createFromFormat('Y-m-d', $from)->format('Y-m-d'),
                Carbon::createFromFormat('Y-m-d', $to)->format('Y-m-d'),
            ]
        );
    }

    public function scopeFiltersProviders(Builder $query, $client): Builder
    {
        return $query->where('provider_id', $client);
    }

    public function scopeFiltersCompanies(Builder $query, $company): Builder
    {
        //$company = Company::whereUuid($company)->firstOrFail()->id;

        return $query->where('company_id', $company);
    }
}
