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
        Schema::create('cajas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_caja');
            $table->string('codigo_caja', 5);
            $table->string('descripcion_caja');
            $table->timestamps();
            
            $table->unsignedBigInteger('agencia_id')
                  ->nullable();
            $table->foreign('agencia_id')
                ->references('id')
                ->on('agencias')
                ->onDelete('set null');
            $table->unsignedBigInteger('user_id')
                  ->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('set null');
            $table->unsignedBigInteger('servicio_id')
                ->nullable();
            $table->foreign('servicio_id')
                ->references('id')
                ->on('servicios')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cajas');
    }
};
