<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Facturis\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestController extends Controller
{


    public function createTenant()
    {
        $tenant = new Tenant();
        $tenant->id = 'alphaproddd';
        $tenant->save();
    }
}
