<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('produit_id', 45);
            $table->string('service_id', 45);
            $table->string('quantite', 45);
            $table->string('unite', 45);
            $table->string('prix_unitaire', 45);
            $table->string('remise', 45);
            $table->string('notes', 45)->nullable();
            $table->string('design_and_background', 45)->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('id')->references('id')->on('factures')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
