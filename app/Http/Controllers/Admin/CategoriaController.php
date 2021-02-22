<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
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
        $categoria = Categoria::orderBy('created_at', 'desc')->paginate(20);
        return view('site.admin.categoria.index', compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function show(Contato $contato)
    {
        return view('site.admin.contato.show', ['contato' => $contato]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return view('site.admin.categoria.edit', ['categoria' => $categoria]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|max:255',
            'class' => 'required|max:255',
        ]);
        $categoria = Categoria::where('id',$id)->update($request->except(['_token','_method']));
        return redirect()->route('admin.categoria.edit', $id)->with([
                                                                    'statusok' => 'Editado com sucesso!',
                                                                    'status' => 'Agora o item "'.$categoria->titulo.'" do blog pode ser reeditado'
                                                                ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contato $contato)
    {
        //
    }
}
