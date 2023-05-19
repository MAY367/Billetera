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
        Schema::create('gastos', function (Blueprint $table) {
        $table->id();
        $table->string('descripcion');
        $table->float('monto');
        $table->date('fecha');
        $table->string('esctablecimiento');
        $table->boolean('efectivo');
        $table->foreignId('categpria_id');
        $table->foreignId('user_id');
        });

    }
    public function down(): void
    {
        Schema::dropIfExists('gastos');
    }
};
