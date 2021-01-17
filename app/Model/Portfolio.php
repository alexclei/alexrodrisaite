<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status', 'titulo', 'alt', 'imagem', 'user_id', 'categoria_id',
    ];

    /**
     * Get the categoria record associated with the portfolio.
     */
    public function categoria()
    {
        return $this->belongsTo('App\Model\Categoria');
    }
}
