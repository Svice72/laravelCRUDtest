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
        // Deshabilitar las columnas 'updated_at' y 'created_at'
        //Schema::disableTimestamps();
        Schema::create('projects', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nombreProyecto', 255);
            $table->string('fuenteFondos', 255);
            $table->double('montoPlanificado', 8, 2);
            $table->double('montoPatrocinado', 8, 2);
            $table->double('montoFondosPropios', 8, 2);
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
