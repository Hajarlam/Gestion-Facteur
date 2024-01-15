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
        Schema::create('document_facture_ventes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('facture_vente_id');
            $table->string('generated_document', 45);
            $table->dateTime('generated_at');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('facture_vente_id')->references('id')->on('facture_ventes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_facture_ventes');
    }
};
