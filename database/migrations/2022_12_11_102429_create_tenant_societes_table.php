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
        Schema::create('tenant_societes', function (Blueprint $table) {
            $table->bigIncrements('id');  // Set default value to 1
            $table->string('nom_societe', 45);
            $table->text('adresse_tenant_societe');
            $table->string('email_societe', 45);
            $table->string('telephone_societe', 45);
            $table->string('siteweb_societe', 45);
            $table->string('ice_societe', 45);
            $table->string('rc_societe', 45);
            $table->string('logo_societe', 45)->nullable();
            $table->string('if_societe', 45);
            $table->string('cnss_societe', 45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenant_societes');
    }
};
