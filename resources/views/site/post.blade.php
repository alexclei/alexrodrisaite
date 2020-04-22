@extends('layout')

@section('menu-blog-class', 'menu-active')

@section('meta-blog')
    <meta itemprop="name" content="{{ $p->titulo }} | AlexRodri Digital">    
@endsection

@section('conteudo')
    <!--==========================
        Services Section
    ============================-->

    <section id="services">
        <div class="container">
            <div class="section-header">
                <h2>{{ $p->titulo }}</h2>          
                <h4>{{ $p->subtitulo }}</h4>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div>
                        <p class="description">{{ $p->descricao }}</p>
                        <br>
                        <p>{{ $p->created_at }}</p>
                    </div>
                    <div class="fb-comments" data-href="{{ Request::url() }}" data-width="100%" data-numposts="10"></div>
                </div>
                <div class="col-lg-3">
                    <p class="description">{{ $p->descricao }}</p>
                    <br>
                    <p>{{ $p->created_at }}</p>
                </div>                 
            </div>
        </div>
    </section><!-- #services -->
@stop