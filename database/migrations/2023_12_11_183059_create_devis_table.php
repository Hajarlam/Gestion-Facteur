<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::create('devis', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('tenant_societe_id');
        $table->unsignedBigInteger('client_societe_id');
        $table->string('date_creation', 45);
        $table->string('date_validation', 45)->nullable();
        $table->enum('status', ['En cours', 'Accepté', 'Refusé']);
        $table->string('commentaire', 45);
        $table->string('devise', 45)->nullable();
        $table->string('reference_devis', 45)->nullable();
        $table->timestamps();

        // Foreign key relationship with tenant_societes table
        $table->foreign('tenant_societe_id')->references('id')->on('tenant_societes');
        // Foreign key relationship with client_societes table
        $table->foreign('client_societe_id')->references('id')->on('client_societes');
    });
}

    

    public function down(): void
    {
        Schema::dropIfExists('devis');
    }
};
