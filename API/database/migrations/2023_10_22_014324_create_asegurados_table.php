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
        Schema::create('asegurados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('ci')->unique();
            $table->date('fecha_nacimiento');
            $table->string('domicilio');
            $table->string('mail')->unique();
            $table->string('telefono')->nullable()->unique();
            $table->string('celular')->nullable()->unique();
            $table->string('NIT')->nullable()->unique();
            $table->datetime('fecha_inicio_seguro')->nullable();
            $table->date('fecha_vencimiento_seguro')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asegurados');
    }
};
