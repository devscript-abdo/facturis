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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('code')->unique();
            $table->string('full_number')->unique();

            $table->string('reference',200)->nullable();

            $table->float('ht_price', 8, 2)->default(0);
            $table->float('total_price', 8, 2)->default(0);
            $table->float('tax_price', 8, 2)->default(0);

            $table->integer('bill_mode')->default(1);
            $table->date('bill_date')->nullable();
            $table->mediumText('notes')->nullable();
            $table->string('recu')->nullable();

            $table->unsignedBigInteger('billable_id');
            $table->string('billable_type');

            $table->boolean('active')->default(true);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills');
    }
};
