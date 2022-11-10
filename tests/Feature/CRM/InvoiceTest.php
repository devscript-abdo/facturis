<?php

namespace Tests\Feature\CRM;

use App\Models\Facturis\CRM\Invoice;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InvoiceTest extends TestCase
{

    public function test_can_add_invoices()
    {
        $user = Invoice::factory(2)->create();
    
        $this->assertDatabaseCount('invoices', 2);
    }
}
