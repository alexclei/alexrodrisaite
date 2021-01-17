<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Post;
use Image;
use Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PostController extends Controller
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
        $post = Post::orderBy('created_at', 'desc')
                            ->get();
        return view('site.admin.post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.admin.post.create');
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
            'alt' => 'required|max:255',
            'imagem' => 'required',
            'icon' => 'required',
            'tag' => 'required',
            'subtitulo' => 'required|max:255',
            'titulo' => 'required|max:255',
            'descricao' => 'required',

        ]);
        $img = Image::make($request->imagem);
        $img->resize(800, 600);
        $nome = date('YmdHis').'-post-'.Str::slug($request->titulo).'.png';
        $path = public_path('storage/'.$nome);
        $img->save($path);

        $request = $request->all();
        $request['imagem'] = $nome;
        $post = Post::create($request);
        return redirect()->route('admin.post.show', $post->id)->with([
                                                                        'statusok' => 'Cadastrado com sucesso',
                                                                        'status' => 'Agora o item "'.$post->titulo.'" do portfolio pode ser editado'
                                                                    ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('site.admin.post.show', ['post' => $post]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('site.admin.post.edit', ['p' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'status' => 'required',
            'alt' => 'required|max:255',
            'icon' => 'required',
            'tag' => 'required',
            'subtitulo' => 'required|max:255',
            'titulo' => 'required|max:255',
            'descricao' => 'required',
        ]);
        if ($request->imagem) {
            Storage::delete('public/'.$post->imagem);
            $img = Image::make($request->imagem);
            $img->resize(800, 600);
            $nome = date('YmdHis').'-post-'.Str::slug($request->titulo).'.png';
            $path = public_path('storage/'.$nome);
            $img->save($path);
        }
        $request = $request->all();
        if (isset($nome)) {
            $request['imagem'] = $nome;
        }
        $post->update($request);
        return redirect()->route('admin.post.edit', $post->id)->with([
                                                                                'statusok' => 'Editado com sucesso!',
                                                                                'status' => 'Agora o item "'.$post->titulo.'" do blog pode ser reeditado'
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
