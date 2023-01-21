<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
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
            $table->uuid()->unique();
            
            $table->string('code')->nullable();

            $table->bigInteger('articleable_id');
            $table->string('articleable_type');

            $table->longText('designation');
            $table->longText('description')->nullable();

            $table->unsignedBigInteger('quantity')->default(0);
            $table->unsignedBigInteger('price_uni')->default(0);
            $table->unsignedBigInteger('price_ht')->default(0);
            $table->unsignedBigInteger('price_tax')->default(0);
            $table->unsignedBigInteger('price_total')->default(0);
           
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
        Schema::dropIfExists('articles');
    }
}
