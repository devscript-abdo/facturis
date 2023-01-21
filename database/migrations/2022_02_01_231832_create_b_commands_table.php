<?php

use App\Models\Finance\Provider;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBCommandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b_commands', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique();

            $table->foreignIdFor(Provider::class)->index()->constrained();

            $table->string('code')->unique();
            $table->string('full_number')->unique();

            $table->unsignedBigInteger('price_ht')->default(0);
            $table->unsignedBigInteger('price_total')->default(0);
            $table->unsignedBigInteger('price_tax')->default(0);
            
            $table->string('status')->default('approved');

            $table->date('document_date');
            $table->date('date_approved')->nullable();
            $table->date('date_due')->nullable();

            $table->mediumText('admin_notes')->nullable();
            $table->mediumText('client_notes')->nullable();
            $table->mediumText('condition_general')->nullable();

            $table->boolean('is_active')->default(true);

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
        Schema::dropIfExists('b_commands');
    }
}
