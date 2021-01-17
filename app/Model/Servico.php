<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status', 'icon', 'titulo', 'resumo', 'alt', 'imagem', 'codigo', 'tag', 'plano1', 'plano2', 'plano3', 'plano4', 'views',
    ];
}
