<?php

namespace App\Http\Controllers\Site;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Post;

class SiteController extends Controller
{
    /**
     * Array de posts da footer
     * @var array
     */
    protected $fp = [];

    public function __construct(){
        $this->fp = DB::table('posts')
                        ->inRandomOrder()
                        ->limit(5)
                        ->get();
    }

    public function portfolio()  {
        $fp = $this->fp;
        return view('site.portfolio', compact('fp'));
    }

    public function servicos()  {
        $fp = $this->fp;
        return view('site.servicos', compact('fp'));
    }
    
    public function inicial(){
        $fp = $this->fp;
        return view('site.inicial', compact('fp'));
    }

    public function contato(){
        $fp = $this->fp;
        return view('site.contato', compact('fp'));
    }

    public function blog(){
        $post = Post::where('created_at', '!=', null)
                            ->orderBy('id', 'desc')
                            ->paginate(4);

        $fp = $this->fp;
        return view('site.blog', compact('post', 'fp'));
    }
    
    public function post($id, $name){
        $p = Post::find($id);
        $fp = $this->fp;
        if ($name != Str::kebab($p->titulo)) {
            return response()
            ->view('site.post', ['p' => $p, 'fp' => $fp], 404);
        }
        return view('site.post', ['p' => $p, 'fp' => $fp]);
    }
        
    public function sobre(){
        $fp = $this->fp;
        return view('site.sobre', compact('fp'));
    }
}
