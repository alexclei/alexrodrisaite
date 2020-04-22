<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Sitemap\SitemapGenerator;

class SitemapController extends Controller
{
    public function sitemap(){
        SitemapGenerator::create('http://alexrodri.com.br/')->writeToFile('sitemap.xml');

        return redirect()->route('init')->with(['sitemap' => 'Sitemap atualizado!']);
    }
}
