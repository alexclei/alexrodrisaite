<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::namespace('Site')->group( function(){
    Route::get('/','SiteController@inicial')->name('init');
    Route::get('/sobre','SiteController@sobre')->name('sobre');
    Route::get('/servicos','SiteController@servicos')->name('servico');
    Route::get('/portfolio','SiteController@portfolio')->name('portfolio');
    Route::get('/blog','SiteController@blog')->name('blog');
    Route::get('/blog/{id}/{name}','SiteController@post')->name('post');
    Route::get('/contato','SiteController@contato')->name('contato');
    
    /*
    Route::get('/equipe','SiteController@index')->name('equipe');
    Route::get('/servicos/criacao-de-site','SiteController@index')->name('site');
    */
});

Route::get('/updatesitemap','SitemapController@sitemap')->name('sitemap');