<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projecto extends Model
{
    use HasFactory;
    protected $fillable = ['imagem_id','titulo','descricao','numero_setion','status'];


}
