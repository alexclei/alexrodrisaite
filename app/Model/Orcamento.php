<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'status', 'email', 'conheceu', 'telefone', 'assunto', 'mensagem', 'resposta', 'servico_id', 'user_id',
    ];

    /**
     * Get the categoria record associated with the portfolio.
     */
    public function servico()
    {
        return $this->belongsTo('App\Model\Servico');
    }
}
