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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');//nombre del cliente
            $table->string('type');//tipo de cliente si es empresa o particular
            $table->string('email');//correo
            $table->string('address');//direccion
            $table->string('city');//ciudad
            $table->string('state');//estado
            $table->string('postal_code');//codigo postal
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
