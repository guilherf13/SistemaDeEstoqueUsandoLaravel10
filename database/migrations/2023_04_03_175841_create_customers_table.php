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
            $table->unsignedBigInteger('shopping_id');
            $table->string('name', 80);
            $table->string('password', 80);
            $table->string('cpf', 11);
            $table->string('email', 50);
            $table->integer('phone');
            $table->string('address', 100);
            $table->timestamps();

            //constrant

            $table->foreign('shopping_id')->references('id')->on('shoppings');
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
