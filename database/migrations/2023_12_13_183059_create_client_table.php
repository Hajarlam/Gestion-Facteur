<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('Nom', 255);
            $table->string('Prenom', 255);
            $table->string('Email', 255);
            $table->string('Phone', 255);
            $table->string('Adresse', 255);
            $table->string('Ville', 255);
            $table->string('Pays', 255);
            $table->string('SocieteId', 255);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
