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
        Schema::create('notas', function (Blueprint $table) {
            $table->id();

            $table->double('preco_total')->nullable();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->nullable()->onDelete('set null');

            $table->timestamps();
        });

        Schema::create('nota_produto', function (Blueprint $table) {

            $table->unsignedBigInteger('produto_id')->nullable();
            $table->foreign('produto_id')->references('id')->on('produtos')->nullable()->onDelete('set null');


            $table->unsignedBigInteger('nota_id')->nullable();
            $table->foreign('nota_id')->references('id')->on('notas')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
        Schema::dropIfExists('nota_produto');
    }
};
