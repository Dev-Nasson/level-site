<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIniciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inicios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('imagem_id');
            $table->string('titulo')->nullable();
            $table->string('icone')->nullable();
            $table->text('descricao')->nullable();
            $table->integer('numero_setion')->nullable();
            $table->integer('status')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inicios');
    }
}
