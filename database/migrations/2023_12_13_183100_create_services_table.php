<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('Nom', 255);
            $table->string('Description', 255);
            $table->string('Composants', 255);
            $table->string('PrixUnitaire_HT', 255);
            $table->enum('Unite', ['Pièce', 'Heure', 'Forfait']);
            $table->string('DateCreation', 255);
            $table->string('PackId', 255);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
