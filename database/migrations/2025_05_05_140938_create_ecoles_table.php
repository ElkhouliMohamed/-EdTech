<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ecoles', function (Blueprint $table) {
            $table->id('id_ecole');
            $table->string('nom', 200);
            $table->string('logo', 255)->nullable();
            $table->json('couleurs')->nullable();
            $table->string('mascotte', 255)->nullable();
            $table->dateTime('date_inscription');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ecoles');
    }
};
