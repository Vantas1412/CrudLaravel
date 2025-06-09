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
        Schema::create('ordens', function (Blueprint $table) {
            $table->id('codigo_orden');
            $table->date('fecha_orden');
            $table->unsignedBigInteger('codigo_proveedor');
            $table->foreign('codigo_proveedor')->references('codigo_proveedor')->on('proveedors')->onDelete('cascade');
            $table->unsignedBigInteger('codigo_producto');
            $table->foreign('codigo_producto')->references('codigo_producto')->on('productos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordens');
    }
};
