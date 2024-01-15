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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('tenant_societe_id')->nullable()->default(null); 
            $table->string('nom', 45); 
            $table->string('prenom', 45); 
            $table->string('phone', 45)->nullable(); 
            $table->string('email', 45)->unique(); 
            $table->string('username', 45)->unique(); 
            $table->string('password', 255); 
            $table->string('role', 255); 
            $table->string('full_name', 45); 
            $table->string('last_login', 255)->nullable(); 
            $table->enum('statut', ['active', 'inactive']); 

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
