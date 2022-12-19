<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bon_commands', function (Blueprint $table) {
            $table->after('uuid', function ($table) {
                $table->foreignId('provider_id')->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
                $table->uuid('provider_uuid')->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bon_commands', function (Blueprint $table) {
            $table->dropColumn(['provider_id', 'provider_uuid']);
        });
    }
};
