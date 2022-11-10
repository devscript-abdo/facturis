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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('code')->nullable();

            $table->unsignedBigInteger('articleable_id');
            $table->string('articleable_type');

            $table->longText('designation');
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('quantity')->default(0);
            $table->float('unit_price', 8, 2)->default(0);
            $table->float('ht_price', 8, 2)->default(0);
            $table->float('tax_price', 8, 2)->default(0);

            $table->boolean('remise_fix')->default(false);
            $table->unsignedBigInteger('remise')->default(0);
            $table->unsignedBigInteger('taux_remise')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
};
