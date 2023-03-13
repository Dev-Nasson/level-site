<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;
    protected $fillable = ['imagem_id','localizacao','icone','email_address','telefone','horas_trabalho','numero_setion','status'];

    public function imagem(){
        return $this->belongsTo(Imagem::class,'imagem_id','id');
    }

}
