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
        Schema::create('document_facture_achats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('facture_achat_id');
            $table->string('document', 45);
            $table->dateTime('added_at');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('facture_achat_id')->references('id')->on('facture_achats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_facture_achats');
    }
};
