<?php

namespace Database\Factories\Facturis\Finance;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Facturis\Finance\Provider>
 */
class ProviderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ice'=>rand(1000,855145),
            'rc'=>rand(1000,855145)
        ];
    }
}
