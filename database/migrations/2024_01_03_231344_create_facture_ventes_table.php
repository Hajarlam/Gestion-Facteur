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
        Schema::create('facture_ventes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('devis_id');
            $table->unsignedBigInteger('tenant_societe_id');
            $table->unsignedBigInteger('client_societe_id');
            $table->string('date_creation', 45);
            $table->string('date_echeance', 45);
            $table->string('montant_ht', 45);
            $table->string('montant_total', 45);
            $table->string('avance', 45);
            $table->string('reste', 45);
            $table->enum('statut_paiement', ['en_attente', 'payée', 'en_retard']);
            $table->enum('mode_paiement', ['carte_credit', 'virement', 'espece']);
            $table->string('infos_paiement', 45);
            $table->string('devise', 45);
            $table->string('reference_facture_vente', 45);
            $table->string('article_id', 45);
            $table->string('service_id', 45);
            $table->string('quantite', 45);
            $table->string('unite', 45);
            $table->string('prix_unitaire', 45);
            $table->string('remise', 45);
            $table->string('note', 45);
            $table->string('template_id', 45);
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('devis_id')->references('id')->on('devis');
            $table->foreign('tenant_societe_id')->references('id')->on('tenant_societes');
            $table->foreign('client_societe_id')->references('id')->on('client_societes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facture_ventes');
    }
};
