<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'status', 'titulo', 'alt', 'imagem', 'user_id', 'descricao', 'subtitulo', 'icon', 'tag',
	];
}
