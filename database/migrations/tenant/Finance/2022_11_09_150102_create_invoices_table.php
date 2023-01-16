<?php

use App\Models\Facturis\Finance\Client;
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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->uuid();

            $table->foreignIdFor(Client::class)
                ->index()
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->string('code')->nullable();
            $table->string('full_number')->unique();

            $table->string('bl_code')->nullable();
            $table->string('bc_code')->nullable();

            $table->float('ht_price', 8, 2)->default(0);
            $table->float('total_price', 8, 2)->default(0);
            $table->float('tax_price', 8, 2)->default(0);

            $table->date('invoice_date')->nullable();
            $table->date('due_date')->nullable();
            $table->date('payment_date')->nullable();

            $table->mediumText('admin_notes')->nullable();
            $table->mediumText('client_notes')->nullable();
            $table->mediumText('condition')->nullable();

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
        Schema::dropIfExists('invoices');
    }
};
