<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Imagem;
use App\Models\Moduloproduto;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['imagem_id','nome','nome_dois','descricao','status'];


    public function moduloproduto(){
        return $this->hasMany(Moduloproduto::class);
    }


}
