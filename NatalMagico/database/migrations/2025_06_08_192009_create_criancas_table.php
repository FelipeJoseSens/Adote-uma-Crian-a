<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
       Schema::create('criancas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('idade');
            $table->text('descricao');
            $table->string('foto')->nullable();
            $table->string('presente_desejado');
            $table->boolean('is_active')->default(true); // Adicionado
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('criancas');
    }
};
