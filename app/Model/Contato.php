<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'status', 'email', 'conheceu', 'telefone', 'assunto', 'mensagem', 'resposta',
    ];
}