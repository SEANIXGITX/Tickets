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
        Schema::create('turnos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_turno');
            $table->string('tipo_turno');
            $table->string('estado_turno')->default('En Espera');

            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->foreign('cliente_id')
                  ->references('id')
                  ->on('clientes')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->unsignedBigInteger('servicio_id')->nullable();
            $table->foreign('servicio_id')
                  ->references('id')
                  ->on('servicios')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->unsignedBigInteger('agencia_id')->nullable();
            $table->foreign('agencia_id')
                  ->references('id')
                  ->on('agencias')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->unsignedBigInteger('caja_id')->nullable();
            $table->foreign('caja_id')
                ->references('id')
                ->on('cajas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turnos');
    }
};
