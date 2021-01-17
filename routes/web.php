<?php

use Spatie\Sitemap\SitemapGenerator;

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

if (Request::server('HTTP_HOST') != 'localhost:8000')
{
    // URL::forceScheme('https');
}


Route::namespace('Site')->group( function(){
    Route::get('/','SiteController@inicial')->name('init');
    Route::get('/sobre','SiteController@sobre')->name('sobre');
    Route::get('/servicos','SiteController@servicos')->name('servico');
    Route::get('/servicos/{id}/{name}','SiteController@servicosShow')->name('servicoshow');
    Route::post('/boleto_action', 'PagSeguroController@action_boletoPGS')->name('boleto_action');
    Route::get('/portfolio','SiteController@portfolio')->name('portfolio');
    Route::get('/blog','SiteController@blog')->name('blog');
    Route::get('/blog/{id}/{name}','SiteController@post')->name('post');
    Route::get('/contato','SiteController@contato')->name('contato');
    Route::get('/obrigado','SiteController@contatoOk')->name('lead-ok');
    Route::post('/contato','SiteController@enviarContato')->name('enviarcontato');
    /*
    Route::get('/equipe','SiteController@index')->name('equipe');
    Route::get('/servicos/criacao-de-site','SiteController@index')->name('site');
    */
});

Route::get('a', function () {
    Artisan::call('sitemap:generator', [] );
});

Auth::routes();

Route::namespace('Admin')->group(function () {
    Route::name('admin.')->group(function () {
        Route::get('/painel', 'HomeController@index')->name('home');
        Route::prefix('painel')->group(function () {
            Route::resource('portfolio', 'PortfolioController');
            Route::resource('contato', 'ContatoController');
            Route::resource('post', 'PostController');
            Route::resource('servico', 'ServicoController');
        });
    });
});