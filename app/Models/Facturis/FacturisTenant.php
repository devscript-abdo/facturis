<?php

namespace App\Models\Facturis;

use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;

class FacturisTenant extends BaseTenant implements TenantWithDatabase
{
    use HasDatabase, HasDomains;
}