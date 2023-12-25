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
        Schema::create('producto_puesto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('producto_id')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete()
                    ->constrained();
            $table->foreignId('puesto_id')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete()
                    ->constrained();
            $table->string("imagen");
            $table->string("precio");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_puesto');
    }
};
