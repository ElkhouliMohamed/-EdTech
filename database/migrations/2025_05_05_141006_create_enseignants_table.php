<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('enseignants', function (Blueprint $table) {
            $table->id('id_enseignant');
            $table->string('nom', 100);
            $table->string('prenom', 100);
            $table->string('email', 100)->unique();
            $table->string('telephone', 20)->nullable();
            $table->string('matiere_principale', 100)->nullable();
            $table->date('date_embauche')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('enseignants');
    }
};
