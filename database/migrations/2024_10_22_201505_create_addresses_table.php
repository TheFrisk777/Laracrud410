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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('street', 100)->nullable()->default('Calle');
            $table->integer('internal_num')->unsigned()->nullable()->default(12);
            $table->integer('external_num')->unsigned()->nullable()->default(12);
            $table->string('neightbornhood', 100)->nullable()->default('Neightbornhood');
            $table->string('town', 100)->nullable()->default('Papantla');
            $table->string('state', 100)->nullable()->default('Veracruz');
            $table->string('country', 100)->nullable()->default('Mexico');
            $table->integer('postal_code')->unsigned()->nullable()->default(12);
            $table->string('references', 100)->nullable()->default('Other');
            $table->foreignId('client_id');
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
