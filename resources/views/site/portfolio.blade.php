@extends('layouts.layout')

@section('menu-portfolio-class', 'menu-active')

@section('title', 'Portfólio | ')


@section('conteudo')
    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h1>Portfólio</h1>
                <p>Trabalhos e cases que nós produzimos e/ou colaboramos.</p>
            </div>
        </div>

        <!--==========================
            Call To Action Section
        ============================-->
        <section id="call-to-action" class="wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="cta-btn-container text-center">
                        <a class="cta-btn align-middle" data-filter="*" href="#all">Todos</a>
                        <a class="cta-btn align-middle" data-filter=".web" href="#web">Web</a>
                        <a class="cta-btn align-middle" data-filter=".socialmedia" href="#socialmedia">Social Media</a>
                        <a class="cta-btn align-middle" data-filter=".video" href="#video">Video</a>
                        <a class="cta-btn align-middle" data-filter=".foto" href="#foto">Foto</a>
                    </div>
                </div>
            </div>
        </section><!-- #call-to-action -->

        <div class="container-fluid">
            <div class="row no-gutters portfolio">
                    
                @foreach ($portfolio as $i)
                <div class="col-lg-3 item col-md-4 item {{ $i->categoria->class }}">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="{{ asset('storage/'.$i->imagem) }}" class="portfolio-popup">
                            <img src="{{ asset('storage/'.$i->imagem) }}" alt="{{ $i->alt }}">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><h2 class="wow fadeInUp">{{ $i->titulo }}</h2></div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section><!-- #portfolio -->
@stop