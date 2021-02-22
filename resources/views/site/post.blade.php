@extends('layouts.layout')

@section('menu-blog-class', 'menu-active')

@section('title', "$p->titulo | Blog | ")

@section('meta-blog')
<meta itemprop="name" content="{{ $p->titulo }} | AlexRodri Digital">
{{-- <meta itemprop="description" content="Descrição da página em menos de 200 caracteres."> --}}
<meta itemprop="description" content="{{ strip_tags(mb_strimwidth($p->descricao, 0, 300, "...")) }}">
<meta itemprop="image" content="{{ asset('storage/'.$p->imagem) }}">

<!-- Open Graph Facebook -->
{{-- <meta property="fb:admins" content="100001921016756"> --}}
<meta property="fb:app_id" content="1259129577759263">
<meta property="og:title" content="{{ $p->titulo }} | AlexRodri Digital">
<meta property="og:description" content="{{ strip_tags(mb_strimwidth($p->descricao, 0, 300, "...")) }}">
{{-- <meta property="og:description" content="Descrição da página em menos de 200 caracteres."/> --}}
<meta property="og:url" content="{{ Request::url() }}">
<meta property="og:site_name" content="AlexRodri Digital">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ asset('storage/'.$p->imagem) }}">

<!-- Twitter -->
<meta name="twitter:title" content="{{ $p->titulo }} | AlexRodri Digital">
<meta name="twitter:description" content="{{ strip_tags(mb_strimwidth($p->descricao, 0, 300, "...")) }}">
{{-- <meta name="twitter:description" content="Descrição da página em menos de 200 caracteres."> --}}
<meta name="twitter:url" content="{{ Request::url() }}">
<meta name="twitter:card" content="summary">
<meta name="twitter:image" content="{{ asset('storage/'.$p->imagem) }}">
<!-- <meta name="twitter:creator" content="@estevanmaito"> -->
<meta name="twitter:site" content="@empresa">  
@endsection

@section('conteudo')
    <!--==========================
        Services Section
    ============================-->

    <section id="services" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h1>{{ $p->titulo }}</h1>
                <h3>{{ $p->subtitulo }}</h3>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div>
                        {!! $p->descricao !!}
                        <img src="{{ asset('storage/'.$p->imagem) }}" width="100%" alt="">
                        <br>
                        <p>{{ $p->created_at }}</p>
                    </div>
                    <div>
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- Final do texto - POST -->
                        <ins class="adsbygoogle"
                            style="display:block"
                            data-ad-client="ca-pub-2475608988204822"
                            data-ad-slot="3460826186"
                            data-ad-format="auto"
                            data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                    <div class="fb-comments" data-href="{{ Request::url() }}" data-width="100%" data-numposts="10"></div>
                </div>
                <div class="col-lg-3">
                    <h5>Mais Posts</h5>
                    <table>
                        <tbody>
                            @foreach ($fp as $p)
                            <tr>
                                <td>
                                    <i class="ion-arrow-right-b"></i> <a href="{{ Route('post', [$p->id,Str::slug($p->titulo)]) }}">{{ $p->titulo }}</a>
                                    <hr>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <h5>Tags</h5>
                    <table>
                        <tbody>
                            @php
                                $tag = explode(',',$p->tag);
                            @endphp
                            @foreach ($tag as $t)
                            <tr>
                                <td><a href="#">{{ $t }}</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <!-- Lateral - POST -->
                    <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-client="ca-pub-2475608988204822"
                        data-ad-slot="1544592362"
                        data-ad-format="auto"
                        data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>                 
            </div>
        </div>
    </section><!-- #services -->
@stop