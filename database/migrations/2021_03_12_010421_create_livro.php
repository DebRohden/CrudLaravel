<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->nullable();
            $table->double('preco')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('editora_id');
            $table->foreign('editora_id')->references('id')->on('editoras');
            $table->unsignedBigInteger('isbn_id')->unique(); 
            $table->foreign('isbn_id')->references('id')->on('isbns');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marcas');
    }
}
