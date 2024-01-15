<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('quittances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tenant_societe_id');
            $table->unsignedBigInteger('client_societe_id');
            $table->string('date_creation', 15);
            $table->string('date_validation', 45)->nullable();
            $table->string('montant_total', 45);
            $table->string('avance', 45);
            $table->string('reste', 45);
            $table->string('mode_paiement', 45);
            $table->string('reference_quittance', 45);
            $table->timestamps();

            $table->foreign('tenant_societe_id')->references('id')->on('tenant_societes');
            $table->foreign('client_societe_id')->references('id')->on('client_societes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quittances');
    }
};
