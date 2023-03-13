<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sobre extends Model
{
    use HasFactory;
    protected $fillable = ['imagem_id','titulo','icone','descricao','numero_setion','status'];

}
