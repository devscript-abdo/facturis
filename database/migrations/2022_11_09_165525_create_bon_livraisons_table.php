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
        Schema::create('bon_livraisons', function (Blueprint $table) {

            $table->id();
            $table->uuid();
            $table->string('code')->unique();
            $table->string('full_number')->unique();

            $table->float('ht_price', 8, 2)->default(0);
            $table->float('total_price', 8, 2)->default(0);
            $table->float('tax_price', 8, 2)->default(0);

            $table->date('bon_date')->nullable();
            $table->date('due_date')->nullable();
            $table->date('approved_date')->nullable();

            $table->mediumText('admin_notes')->nullable();
            $table->mediumText('client_notes')->nullable();
            $table->mediumText('condition')->nullable();

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
        Schema::dropIfExists('bon_livraisons');
    }
};
