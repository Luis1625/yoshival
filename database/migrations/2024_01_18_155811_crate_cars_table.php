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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('modelo');
            $table->string('placa');
            $table->string('color');
            $table->string('marca');
            $table->string('vim');
            $table->string('motor');
            $table->string('duenio');
            $table->string('flota');
            $table->string('seguro');
            $table->string('observacion'); 
            $table->string('estado')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
