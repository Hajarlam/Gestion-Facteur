<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->string('FactureId');
            $table->string('DevisId');
            $table->string('tenant_societe_id');
            $table->string('ClientSociéteId');
            $table->date('DateCreation');
            $table->date('DateEcheance');
            $table->decimal('Montant_HT', 8, 2);
            $table->decimal('Montant_Total', 8, 2);
            $table->decimal('Avance', 8, 2);
            $table->decimal('Reste', 8, 2);
            $table->enum('StatutPaiement', ['En cours', 'Payé', 'En retard']);
            $table->enum('ModePaiement', ['Carte', 'Espèces', 'Virement']);
            $table->string('InfosPaiement', 255);
            $table->string('Devise');
            $table->string('RéferenceFacture');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factures');
    }
}
