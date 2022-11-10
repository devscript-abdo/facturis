<?php

namespace App\Models\Facturis\Tools;

use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;
    use UuidGenerator;

    protected $fillable = [

        'email',
        'is_primary',
        'active'
    ];

    public function emailable()
    {
        return $this->morphTo();
    }

}
