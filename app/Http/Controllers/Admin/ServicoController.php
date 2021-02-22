<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Model\Servico;
use Image;
use Str;

class ServicoController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servico = Servico::all();
        return view('site.admin.servico.index', compact('servico'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.admin.servico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required',
            'titulo' => 'required|max:191',
            'icon' => 'required',
            'resumo' => 'required|max:191',
            'imagem' => 'required',
            'alt' => 'required',
            'codigo' => 'required',
            'tag' => 'required|max:191',
        ]);

        $img = Image::make($request->imagem);
        $img->resize(800, 600);
        $nome = date('YmdHis').'-servico-'.Str::slug($request->titulo).'.jpg';
        $path = public_path('storage/'.$nome);
        $img->save($path);

        $request = $request->all();
        $request['imagem'] = $nome;
        $servico = Servico::create($request);
        return redirect()->route('admin.servico.edit', $servico->id)->with([
                                                            'statusok' => 'Cadastrado com sucesso',
                                                            'status' => 'Agora o item "'.$servico->titulo.'" pode ser editado'
                                                        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Model\Servico $servico
     * @return \Illuminate\Http\Response
     */
    public function edit(Servico $servico)
    {
        return view('site.admin.servico.edit', ['s' => $servico]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Model\Servico $servico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servico $servico)
    {
        $request->validate([
            'status' => 'required',
            'titulo' => 'required|max:191',
            'icon' => 'required',
            'resumo' => 'required|max:191',
            'alt' => 'required',
            'codigo' => 'required',
            'tag' => 'required|max:191',
        ]);
        if ($request->imagem) {
            Storage::delete('public/'.$servico->imagem);
            $img = Image::make($request->imagem);
            $img->resize(800, 600);
            $nome = date('YmdHis').'-servico-'.Str::slug($request->titulo).'.png';
            $path = public_path('storage/'.$nome);
            $img->save($path);
        }
        $request = $request->all();
        if (isset($nome)) {
            $request['imagem'] = $nome;
        }
        $servico->update($request);
        return redirect()->route('admin.servico.edit', $servico->id)->with([
                                                                'statusok' => 'Editado com sucesso!',
                                                                'status' => 'Agora o item "'.$servico->titulo.'" pode ser reeditado'
                                                            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
