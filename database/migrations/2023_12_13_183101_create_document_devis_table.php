<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('document_devis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('devis_id'); // DevisID VARCHAR(45)
            $table->string('produit_id', 45); // ProduitID VARCHAR(45)
            $table->string('service_id', 45); // ServiceID VARCHAR(45)
            $table->string('quantite', 15); // Quantité VARCHAR(15)
            $table->string('unite', 15); // Unité VARCHAR(15)
            $table->string('prix_unitaire', 45); // PrixUnitaire VARCI IAR(45)
            $table->string('remise', 45); // Remise VARCHAR(45)
            $table->string('notes', 45)->nullable(); // Notes VARCHAR(45)
            $table->string('design_and_background', 45)->nullable(); // Design&Background VARCHAR(45)
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('devis_id')->references('id')->on('devis')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('document_devis');
    }
};
