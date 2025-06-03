<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->integer('existencia');
            $table->double('precio');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        
        Schema::dropIfExists('productos');
    }
};
