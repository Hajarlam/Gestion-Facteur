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
        Schema::create('fournisseur_societe', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tenant_societe_id');
            $table->string('nom_societe');
            $table->string('phone_societe');
            $table->string('adresse_societe');
            $table->string('email_societe');
            $table->string('ice_number');
            $table->string('rib_number');
            $table->string('representant_id');
            $table->enum('statut', ['active', 'inactive']); // Remplacez '...' par les valeurs réelles

            // Ajoutez d'autres colonnes si nécessaire

            $table->timestamps();        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fournisseur_societe');
    }
};
