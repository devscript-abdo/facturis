<?php

namespace App\Models\Facturis\CRM;

use App\Models\Facturis\Tools\Email;
use App\Models\Facturis\Tools\Telephone;
use App\Traits\GetModelByUuid;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    use GetModelByUuid;
    use UuidGenerator;

    public function boncommands()
    {
        return $this->hasMany(BonCommand::class);
    }

    public function telephones()
    {
        return $this->morphMany(Telephone::class,'telephoneable');
    }

    public function emails()
    {
        return $this->morphMany(Email::class,'emailable');
    }
}
