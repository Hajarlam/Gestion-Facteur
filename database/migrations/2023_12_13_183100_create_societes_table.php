<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('societes', function (Blueprint $table) {
            $table->id();
            $table->string('Nom', 255);
            $table->string('Phone', 255);
            $table->string('Adresse', 255);
            $table->string('Email', 255);
            $table->string('IceNumber', 255);
            $table->string('RibNumber', 255);
            $table->string('DateInscription', 255);
            $table->enum('Statut', ['Actif', 'Inactif']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('societes');
    }
};
