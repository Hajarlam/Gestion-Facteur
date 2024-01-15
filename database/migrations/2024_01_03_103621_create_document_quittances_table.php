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
        // Check if the table already exists before creating it
        if (!Schema::hasTable('document_quittances')) {
            Schema::create('document_quittances', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('quittance_id');
                $table->string('produit_id', 45)->nullable();
                $table->string('service_id', 45)->nullable();
                $table->string('quantite', 45);
                $table->string('unite', 45);
                $table->string('prix_unitaire', 45);
                $table->string('remise', 45);
                $table->string('notes', 45);
                $table->string('design_and_background', 45);
                $table->timestamps();

                $table->foreign('quittance_id')->references('id')->on('quittances');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::table('document_quittances', function (Blueprint $table) {
            $table->dropForeign(['quittance_id']);
        });

        Schema::dropIfExists('document_quittances');
    }
};
