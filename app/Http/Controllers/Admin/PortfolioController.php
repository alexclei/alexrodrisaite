<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Categoria;
use App\Model\Portfolio;
use Image;
use Str;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function index()
    {
        $portfolio = Portfolio::all();
        return view('site.admin.portfolio.index', compact('portfolio'));
    }

    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function create()
    {
        $cat = Categoria::all();
        return view('site.admin.portfolio.create', compact('cat'));
    }

    /**
    * Save a new controller instance.
    *
    * @return void
    */
    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required',
            'categoria_id' => 'required',
            'imagem' => 'required',
            'titulo' => 'required|max:255',
            'alt' => 'required|max:255',
        ]);
        $img = Image::make($request->imagem);
        $img->resize(800, 600);
        $nome = date('YmdHis').'-portfolio-'.Str::slug($request->titulo).'.png';
        $path = public_path('storage/'.$nome);
        $img->save($path);

        $request = $request->all();
        $request['imagem'] = $nome;
        $portfolio = Portfolio::create($request);
        return redirect()->route('admin.portfolio.edit', $portfolio->id)->with([
                                                                            'statusok' => 'Cadastrado com sucesso',
                                                                            'status' => 'Agora o item "'.$portfolio->titulo.'" do portfolio pode ser editado'
                                                                        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        $cat = Categoria::all();
        return view('site.admin.portfolio.edit', ['cat' => $cat, 'portfolio' => $portfolio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'status' => 'required',
            'categoria_id' => 'required',
            'titulo' => 'required|max:255',
            'alt' => 'required|max:255',
        ]);
        if ($request->imagem) {          
            Storage::delete('public/'.$portfolio->imagem);
            $img = Image::make($request->imagem);
            $img->resize(800, 600);
            $nome = date('YmdHis').'-portfolio-'.Str::slug($request->titulo).'.png';
            $path = public_path('storage/'.$nome);
            $img->save($path);
        }
        $request = $request->all();
        if (isset($nome)) {
            $request['imagem'] = $nome;
        }
        $portfolio->update($request);
        return redirect()->route('admin.portfolio.edit', $portfolio->id)->with([
                                                                                'statusok' => 'Editado com sucesso!',
                                                                                'status' => 'Agora o item "'.$portfolio->titulo.'" do portfolio pode ser reeditado'
                                                                            ]);
    }
}