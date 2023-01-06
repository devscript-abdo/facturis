<?php

declare(strict_types=1);

namespace Tests\Feature\Finance\Estimate;

use App\Models\Facturis\Finance\Estimate;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EstimateTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_a_estimate()
    {
        Estimate::factory(2)->create();

        $this->assertDatabaseCount('estimates', 2);
    }

    public function test_estimate_exists()
    {
        $estimate = Estimate::factory()->create();

        $this->assertModelExists($estimate);
    }

    public function test_can_edit_estimate()
    {
        $data = ['ht_price' => 150];
        $estimate = Estimate::factory()->create($data);

        $estimate->update(['ht_price' => 100]);
    }

    public function test_delete_estimate_done()
    {
        $estimate = Estimate::factory()->create();

        $estimate->delete();

        $this->assertModelMissing($estimate);
    }
}
