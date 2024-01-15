<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmetteursTable extends Migration
{
    public function up()
    {
        Schema::create('emetteurs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('SocieteEmettrice');
            $table->string('Nom');
            $table->string('Adresse', 25);
            $table->string('Email', 25);
            $table->string('Telephone', 25);
            $table->string('SiteWeb', 25);
            $table->string('ICE', 25);
            $table->string('RC', 25);
            $table->string('LOGO', 25);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('emetteurs');
    }

};
