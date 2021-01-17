<?php

use Illuminate\Database\Seeder;
use App\Model\Categoria;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'titulo' => 'Web',
            'class' => 'web',
        ]);
        Categoria::create([
            'titulo' => 'Social Media',
            'class' => 'socialmedia',
        ]);
        Categoria::create([
            'titulo' => 'Video',
            'class' => 'video',
        ]);
        Categoria::create([
            'titulo' => 'Foto',
            'class' => 'foto',
        ]);
    }
}
