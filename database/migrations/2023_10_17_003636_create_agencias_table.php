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
        Schema::create('agencias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_agencia');
            $table->string('sigla_agencia', 5)->unique();
            $table->string('descripcion_agencia');
            $table->timestamps();
            
            $table->unsignedBigInteger('departamento_id')
                ->nullable();
            $table->foreign('departamento_id')
                ->references('id')
                ->on('departamentos')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agencias');
    }
};
