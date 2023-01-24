<?php

namespace App\Models\Facturis;

use App\Traits\GetModelByUuid;
use App\Traits\ULidGenerator;
use App\Traits\UuidGenerator;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;


class Tenant extends BaseTenant implements TenantWithDatabase
{
    use HasDatabase, HasDomains;

    use GetModelByUuid;
    use ULidGenerator;
    use UuidGenerator;

    public static function getCustomColumns(): array
    {
        return [
            'id',
            'uuid',
            'ulid',
            'full_name',
            'email',
            'username',
            'email_hash',
            'is_active'
        ];
    }
}
