<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuloprodutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moduloprodutos', function (Blueprint $table) {
            $table->id();
            $table->integer('imagem_id');
            $table->integer('produto_id')->nullable();
            $table->string('nome_modulo')->nullable();
            $table->text('descricao')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('moduloprodutos');
    }
}
