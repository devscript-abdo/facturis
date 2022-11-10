<?php

namespace App\Models\Facturis\Tools;

use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telephone extends Model
{
    use HasFactory;
    use UuidGenerator;

    protected $fillable = [

        'telephone',
        'is_primary',
        'active'
    ];

    public function telephoneable()
    {
        return $this->morphTo();
    }
}
