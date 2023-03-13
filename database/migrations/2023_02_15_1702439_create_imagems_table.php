<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagems', function (Blueprint $table) {
            $table->id();
            $table->text('imagem_padrao')->nullable();
            $table->text('imagem_mini')->nullable();
            $table->text('imagem_um')->nullable();
            $table->text('imagem_dois')->nullable();
            $table->text('imagem_tres')->nullable();
            $table->text('imagem_quatro')->nullable();
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
        Schema::dropIfExists('imagems');
    }
}
