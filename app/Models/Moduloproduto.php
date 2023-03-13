<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moduloproduto extends Model{
    use HasFactory;
    protected $fillable = ['imagem_id','produto_id','nome_modulo','descricao','status'];


    public function produto(){
        return $this->belongsTo(Produto::class,'produto_id','id');
    }


}

/* $table->unsignedBigInteger('produto_id');
$table->string('nome_modulo')->nullable();
$table->text('descricao')->nullable();
$table->integer('status')->nullable(); */
