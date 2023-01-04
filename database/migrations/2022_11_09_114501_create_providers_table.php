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
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->uuid();

            $table->string('code', 20)->nullable();
            $table->string('company', 100)->nullable();
            $table->string('contact', 100)->nullable();
            $table->string('telephone', 100)->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->longText('address')->nullable();

            $table->string('rc', 10)->nullable();
            $table->string('ice', 20)->unique();
            $table->string('logo')->default('provider.png');

            $table->boolean('is_active')->default(false);
            $table->timestamp('added_at')->useCurrent();

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
        Schema::dropIfExists('providers');
    }
};
