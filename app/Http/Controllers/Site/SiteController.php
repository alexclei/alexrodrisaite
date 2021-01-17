<?php

namespace App\Http\Controllers\Site;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Post;
use App\Model\Servico;
use App\Model\Portfolio;
use App\Model\Contato;

class SiteController extends Controller
{
    /**
     * Array de posts da footer
     * @var array
     */
    protected $fp = [];

    /**
     * Array de servicos da footer
     * @var array
     */
    protected $fs = [];

    public function __construct(){
        $this->fp = DB::table('posts')
                        ->inRandomOrder()
                        ->limit(5)
                        ->get();
        $this->fs = Servico::all();
    }

    public function portfolio()  {
        $fp = $this->fp;
        $fs = $this->fs;
        $portfolio = Portfolio::where('status',1)->get();
        return view('site.portfolio', compact('fp', 'fs', 'portfolio'));
    }

    public function servicos(){
        $servicos = Servico::where('status',1)->paginate(20);
        $fp = $this->fp;
        $fs = $this->fs;
        return view('site.servicos', compact('fp', 'fs', 'servicos'));
    }

    public function servicosShow($id, $titulo){
        $servico = Servico::findOrFail($id);
        $fp = $this->fp;
        $fs = $this->fs;
        return view('site.servico', ['servico' => $servico, 'fp' => $fp, 'fs' => $fs]);
    }

    public function inicial(){
        $fp = $this->fp;
        $fs = $this->fs;
        $post = Post::where('created_at', '!=', null)
                            ->orderBy('id', 'desc')
                            ->paginate(4);
        $servicos = Servico::where('status',1)->paginate(4);
        return view('site.inicial', compact('fp', 'fs', 'post', 'servicos'));
    }

    public function contato(){
        $fs = $this->fs;
        $fp = $this->fp;
        return view('site.contato', compact('fp', 'fs'));
    }

    public function contatoOk(){
        $fs = $this->fs;
        $fp = $this->fp;
        return view('site.contato', compact('fp', 'fs'));
    }

    public function enviarContato(Request $request){
        $request->validate([
            'nome' => 'required|max:255',
            'email' => 'required|max:255',
            'conheceu' => 'required|max:255',
            'telefone' => 'required|max:20',
            'assunto' => 'required|max:255',
            'mensagem' => 'required|max:255',
        ]);
        $contato = Contato::create($request->all());
        $fp = $this->fp;
        return redirect()->route('lead-ok');
    }

    public function blog(){
        $post = Post::where('created_at', '!=', null)
                            ->orderBy('id', 'desc')
                            ->paginate(4);
        $fp = $this->fp;
        $fs = $this->fs;
        return view('site.blog', compact('post', 'fp', 'fs'));
    }
    
    public function post($id, $name){
        $p = Post::findOrFail($id);
        $fs = $this->fs;
        $fp = $this->fp;
        if ($name != Str::slug($p->titulo)) {
            return response()
            ->view('site.post', ['p' => $p, 'fp' => $fp, 'fs' => $fs], 404);
        }
        return view('site.post', ['p' => $p, 'fp' => $fp, 'fs' => $fs]);
    }

    public function sobre(){
        $fs = $this->fs;
        $fp = $this->fp;
        return view('site.sobre', compact('fp', 'fs'));
    }
}
