<?php

use App\Models\Facturis\Category;
use App\Models\Facturis\City;
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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->uuid();

            $table->foreignIdFor(City::class)
                ->index()
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->foreignIdFor(Category::class)
                ->index()
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->string('nom', 30)->nullable();
            $table->string('prenom', 30)->nullable();

            $table->longText('address')->nullable();
            $table->string('telephone', 20)->unique()->nullable();
            $table->string('avatar')->nullable();
            $table->string('email')->unique();

            $table->string('company', 100)->nullable();
            $table->string('rc', 10)->nullable();
            $table->string('ice', 20)->unique();

            $table->timestamp('added_at')->useCurrent();

            $table->boolean('is_active')->default(true);
            $table->softDeletes();

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
        Schema::dropIfExists('clients');
    }
};
