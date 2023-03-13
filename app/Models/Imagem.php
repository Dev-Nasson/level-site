<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;
use App\Models\Projecto;
use App\Models\Inicio;

class Imagem extends Model
{
    use HasFactory;

    protected $fillable = ['imagem_padrao','imagem_mini','imagem_um','imagem_dois','imagem_tres','imagem_quatro','status'];

    public function produto(){
        return $this->hasMany(Produto::class);
    }


}
