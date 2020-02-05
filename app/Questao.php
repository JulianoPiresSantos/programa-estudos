<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    protected $fillable = ['enunciado', 'banca_id', 'orgao_id', 'assunto_id'];
    protected $guarded = ['id'];
}
