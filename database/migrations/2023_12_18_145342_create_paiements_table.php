<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('facture_id'); // FactureID VARCHAR(45)
            $table->string('quittance_id', 45)->nullable(); // QuittanceID VARCHAR(45)
            $table->string('date_paiement', 45); // DatePaiement VARCHAR(45)
            $table->string('avance', 45); // Avance VARCHAR(45)
            $table->string('reste', 45); // Reste VARCHAR(45)
            $table->enum('statut_paiement', ['en_attente', 'payé', 'annulé']); // Statut_Paiement ENUM(...)
            $table->string('devise', 45); // Devise VARCHAR(45)
            $table->enum('mode_paiement', ['carte', 'virement', 'espece']); // ModePaiement ENUM(...)
            $table->string('infos_paiement', 45)->nullable(); // InfosPaiement VARCHAR(45)
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('facture_id')->references('id')->on('factures')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paiements');
    }
}
