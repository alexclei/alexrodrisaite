<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Contato;
use App\Model\Portfolio;
use App\Model\Post;
use App\Model\Servico;
use App\User;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countUsers = User::count();
        $portfolio = Portfolio::orderBy('created_at', 'desc')->paginate(5);
        $servico = Servico::orderBy('created_at', 'desc')->paginate(5);
        $post = Post::orderBy('created_at', 'desc')->paginate(5);
        $contato = Contato::orderBy('status', 'asc')->paginate(5);
        return view('site.admin.home', compact('countUsers','post','portfolio','contato','servico'));
    }
}