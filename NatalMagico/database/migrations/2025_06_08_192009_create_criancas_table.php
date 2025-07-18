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
       Schema::create('criancas', function (Blueprint $table) {
    $table->id();
    $table->string('nome');
    $table->text('descricao');
    $table->string('foto')->nullable();
    $table->string('presente_desejado');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('criancas');
    }
};
