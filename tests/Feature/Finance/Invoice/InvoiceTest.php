<?php

declare(strict_types=1);

namespace Tests\Feature\Finance\Invoice;

use App\Models\Facturis\Finance\Invoice;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InvoiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_a_invoice()
    {
        Invoice::factory(2)->create();

        $this->assertDatabaseCount('invoices', 2);
    }


    public function test_invoice_exists()
    {
        $invoice = Invoice::factory()->create();

        $this->assertModelExists($invoice);
    }

    public function test_can_edit_invoice()
    {
    }

    public function test_delete_invoice_done()
    {
        $invoice = Invoice::factory()->create();

        $invoice->delete();

        $this->assertModelMissing($invoice);
       // $this->assertDatabaseMissing('invoices', $invoice);
    }
}
