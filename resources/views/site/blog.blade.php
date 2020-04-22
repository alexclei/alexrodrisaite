@extends('layout')

@section('menu-blog-class', 'menu-active')

@section('conteudo')
    <!--==========================
        Services Section
    ============================-->

    <section id="services">
        <div class="container">
            <div class="section-header">
                <h2>Blog</h2>          
                <p>Acompanhe nossos postes.</p>
            </div>
            <div class="row grid">
                
                @foreach ($post as $p)
                    <div class="col-lg-6 grid-item">
                        <div class="box wow fadeInLeft">
                            <div class="icon"><i class="{{ $p->icon }}"></i></div>
                            <h4 class="title"><a href="{{ Route('post', [$p->id, Str::kebab($p->titulo)]) }}">{{ $p->titulo }}</a></h4>
                            <p class="description">{{ $p->descricao }}</p>
                            <br>
                            <p>{{ $p->created_at }}</p>
                        </div>
                    </div>
                @endforeach
                
            </div>
            <div>
                {{ $post->links() }}
            </div>
        </div>
    </section><!-- #services -->
@stop