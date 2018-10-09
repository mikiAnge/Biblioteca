<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo')->unique();
            $table->string('titulo');
            $table->string('autor');
            $table->string('editorial');
            $table->string('categoria');
            $table->text('descripcion')->nullable();
            $table->date('fecha');
            $table->string('imagen');//almacenar aqui solo la extencion:jpg, png
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
