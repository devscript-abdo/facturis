<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->after('price_ht', function ($table) {
                $table->boolean('remise_fix')->default(false);
                $table->integer('remise')->default('0');
            });
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn(['remise', 'remise_fix']);
        });
    }
};
