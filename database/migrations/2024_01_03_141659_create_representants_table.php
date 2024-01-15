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
        Schema::create('representants', function (Blueprint $table) {
            $table->id('RepresentantID');
            $table->string('Nom', 45);
            $table->string('Prénom', 45);
            $table->string('Fonction', 45);
            $table->string('Email', 45);
            $table->string('Phone', 45);
            $table->string('AdressePersonnelle', 45);
            $table->string('Ville', 45);
            $table->string('Pays', 45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('representants');
    }
};
