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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('client_name', 40)->nullable();
            $table->string('first_last_name', 40)->nullable();
            $table->string('second_last_name', 40)->nullable();
            $table->string('email', 40)->nullable();
            $table->bigInteger('phone', )->nullable();
            $table->string('state', 40)->nullable();
            $table->string('town', 40)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
