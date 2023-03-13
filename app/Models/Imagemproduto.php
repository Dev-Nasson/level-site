<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;
class Imagemproduto extends Model

{
    use HasFactory;

    protected $fillable = ['imagem_padrao','imagem_mini','status'];

    public function produto(){
        return $this->hasMany(Produto::class);
    }



}
