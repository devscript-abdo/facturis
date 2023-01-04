<?php

namespace Database\Factories\Facturis\Finance;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Facturis\Finance\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //'code' => $code = fake()->regexify('[0-9]{9}'),
            //'full_number'=>'FACT-'.$code,

            'ht_price' => fake()->randomFloat(2),
            'tax_price' => fake()->randomFloat(2),
            'total_price' => fake()->randomFloat(2),
            'invoice_date' => now(),
            'due_date' => now()->addDays(10),
            'payment_date' => now()->addDays(15),
            'admin_notes' => fake()->paragraphs(5, true),
            'client_notes' => fake()->paragraphs(5, true),
            'condition' => fake()->paragraphs(9, true),

        ];
    }
}
