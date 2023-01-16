<?php

namespace App\Models\Facturis\Finance;

use App\Models\Facturis\Category;
use App\Models\Facturis\Tools\Email;
use App\Models\Facturis\Tools\Telephone;
use App\Traits\GetModelByUuid;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    use UuidGenerator;
    use GetModelByUuid;

    protected $fillable = [

        'nom',
        'prenom',
        'address',
        'telephone',
        'avatar',
        'email',
        'city_id',
        'category_id',
        'company',
        'rc',
        'ice',
        'added_at',
        'is_pro',
        'active',
    ];

    protected $casts = [

        'is_pro' => 'boolean',
        'active' => 'boolean',
    ];

    /***** Relations *****/

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function invoicesAvoirs()
    {
        return $this->hasMany(InvoiceAvoir::class);
    }

    public function estimates()
    {
        return $this->hasMany(Estimate::class);
    }

    public function bills()
    {
        return $this->hasManyThrough(Bill::class, Invoice::class, 'client_id', 'billable_id');
    }

    public function telephones()
    {
        return $this->morphMany(Telephone::class, 'telephoneable');
    }

    public function emails()
    {
        return $this->morphMany(Email::class, 'emailable');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
