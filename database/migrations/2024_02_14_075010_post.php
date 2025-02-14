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
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cegid');
            $table->string('nev');
            $table->string('telefonszam');
            $table->string('cim');
            $table->string('kategoria');
            $table->longText('leiras');
            $table->string('kep');
            $table->string('weboldal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('posts');
    }
};
