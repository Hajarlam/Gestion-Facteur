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
        Schema::create('client_societes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tenant_societe_id'); // TenantSociétéID VARCHAR(...
            $table->string('nom_societe', 45); // NomSociété VARCHAR(45)
            $table->string('phone_societe', 45); // PhoneSociété VARCHAR(45)
            $table->text('adresse_client_societe'); // AdresseClientSociété VARCH...
            $table->string('email_societe', 45); // EmailSociété VARCHAR(45)
            $table->string('ice_number', 45); // ICE_NUMER VARCHAR(45)
            $table->string('rib_number', 45); // RIB_NUMBER VARCHAR(45)
            $table->string('nom_personnel', 45); // NomPersonnel VARCHAR(45)
            $table->string('prenom_personnel', 45); // PrénomPersonnel VARCHAR(45)
            $table->timestamps();
            
            // Foreign key relationship with tenant_societes table
            $table->foreign('tenant_societe_id')->references('id')->on('tenant_societes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_societes');
    }
};
