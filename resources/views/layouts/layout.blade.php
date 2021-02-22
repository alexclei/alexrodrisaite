<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <title>@yield('title')Agência AlexRodri Digital</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta name="keywords" content="agencia criacao de sites, agência de desenvolvimento web, agencia para criar site, construção de site profissional, construção de sites online, criação de lojas online, criação de sistema web, criação de site barato, criação de site com dominio proprio, criação de site de vendas online, criação de site institucional, criação de site online, criação de site para advogados, criação de site para vendas online, criação de sites de vendas online, criação de sites online, criação de sites para advogados, criação de sites para psicologos, criação de sites personalizados, criacao de sites profissionais, criação de sites profissionais preço, criação de website preço, criação loja online, criação site preço, criação site wordpress, criação website preço, criar loja online wordpress, criar pagina na web, criar site advogado, criar site loja online, criar site para vendas online, criar site preço, criar site profissional barato, criar site rapido e facil, criar um site de vendas online, crie seu site online, desenvolvedor de site ecommerce, desenvolvedor de site wordpress, desenvolver site profissional, desenvolvimento de site de vendas, desenvolvimento de site porto alegre, desenvolvimento de site profissional, desenvolvimento de site wordpress, desenvolvimento e hospedagem de sites, empresa criação de site, empresa para criar site, hospedagem e criação de sites, montagem de site profissional, orçamento para criação de site, orçamento para criar um site, preço criação de site, preço para criação de site, sites de criação de sites, sites de personalizados, web designer criação de sites">
  <meta name="description" content="Site da agência amapaense AlexRodri Digital, que faz serviços na area de internet e tecnologias! Sites, Aplicativos, Marketing, Fotos, Videos e muito mais.">
  <meta name="author" content="Alex Rodrigues">
  <meta name="robots" content="index">
  <meta name="google-site-verification" content="SSderi8XzYXUmJIOXCizjQiq6SQT4BI11N6dvetdzUI">
  <meta name="msvalidate.01" content="C0105C9E30170AE961F23B7E15CBEED7" />

  <!-- Google+ / Schema.org -->
  @section('meta-blog')
    <meta itemprop="name" content="AlexRodri Digital">
    {{-- <meta itemprop="description" content="Descrição da página em menos de 200 caracteres."> --}}
    <meta itemprop="description"
      content="Site da agência amapaense AlexRodri Digital, que faz serviços na area de internet e tecnologias! Sites, Aplicativos, Marketing, Fotos, Videos e muito mais.">
    <meta itemprop="image" content="https://exemplo.com/imagem.png">
    {{-- <link href="https://plus.google.com/+SuaPagina" rel="publisher"> --}}

    <!-- Open Graph Facebook -->
    {{-- <meta property="fb:admins" content="100001921016756"> --}}
    <meta property="fb:app_id" content="1259129577759263">
    <meta property="og:title" content="Agência AlexRodri Digital">
    <meta property="og:description"
      content="Site da agência amapaense AlexRodri Digital, que faz serviços na area de internet e tecnologias! Sites, Aplicativos, Marketing, Fotos, Videos e muito mais.">
    {{-- <meta property="og:description" content="Descrição da página em menos de 200 caracteres."/> --}}
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:site_name" content="AlexRodri Digital">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://exemplo.com/imagem.png">

    <!-- Twitter -->
    <meta name="twitter:title" content="Agência AlexRodri Digital">
    <meta name="twitter:description"
      content="Site da agência amapaense AlexRodri Digital, que faz serviços na area de internet e tecnologias! Sites, Aplicativos, Marketing, Fotos, Videos e muito mais.">
    {{-- <meta name="twitter:description" content="Descrição da página em menos de 200 caracteres."> --}}
    <meta name="twitter:url" content="{{ Request::url() }}">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="https://exemplo.com/imagem.png">
    <meta name="twitter:creator" content="@alexrodridev">
    <meta name="twitter:site" content="@alexrodridev">
  @show

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-M42MGNZ');

  </script>
  <!-- End Google Tag Manager -->
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>

<body id="body">
  <!--==========================
   Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:suporte@alexrodri.com.br">suporte@alexrodri.com.br</a>
        <i class="fa fa-whatsapp"></i> <a href="https://api.whatsapp.com/send?phone=5596984058000">+55 96 98405-8000</a>
      </div>
      <div class="social-links float-right">
        <a href="https://twitter.com/alexrodridev" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="https://www.facebook.com/ardoffficial" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com/alexrodridigital/" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UC6UUAhVroiOgeL0QR4aDF3g/" class="instagram"><i
            class="fa fa-youtube-play"></i></a>

        {{-- <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a> --}}
        {{-- <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> --}}
      </div>
    </div>
  </section>
  <!--==========================
   Header
  ============================-->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <h2>
          <a href="{{ url('/') }}" class="scrollto">
            <div class="d-block d-lg-none">A<span>R</span></div>
            <div class="d-none d-lg-block">Alex<span>Rodri</span> Digital</div>
          </a>
        </h2>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="@yield('menu-home-class')">
            <a href="{{ url('/') }}">Home</a>
          </li>
          <li class="@yield('menu-sobre-class')">
            <a href="{{ route('sobre') }}">Sobre</a>
          </li>
          <li class="@yield('menu-servicos-class') menu-has-children">
            <a href="{{ route('servico') }}">Serviços</a>
            <ul>
              @foreach ($fs as $s)
                <li><a href="{{ route('servicoshow', [$s->id, Str::slug($s->titulo)]) }}">{{ $s->titulo }}</a>
                </li>
              @endforeach
            </ul>
          </li>
          <li class="@yield('menu-portfolio-class')">
            <a href="{{ route('portfolio') }}">Portfólio</a>
          </li>
          {{-- <li class="@yield('menu-team-class')">
							<a href="{{ route('equipe') }}">Equipe</a>
						</li> --}}
          <li class="@yield('menu-blog-class')">
            <a href="{{ route('blog') }}">Blog</a>
          </li>
          <li class="@yield('menu-contato-class')">
            <a href="{{ route('contato') }}">Contatos</a>
          </li>
          @auth
						<li class="">
							<a class="btn btn-45off text-white" href="{{ route('servico_orcamento')}}">Pedir Orçamento</a>
						</li>
						<li class="">
							<a href="{{ route('admin.home') }}">Painel</a>
						</li>
          @else
            <li class="">
              <a href="{{ route('admin.home') }}">Entrar</a>
            </li>
          @endauth
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
  @yield('banner')

  <main id="main">

    @yield('conteudo')

  </main>

  <!--==========================
   Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <nav class="py-3 row">
        <div class="col-md-12 row">
          <div class="col-md-3 footer-menu">
            <h4>AGÊNCIA</h4>
            <div>
              <i class="ion-arrow-right-b"></i> <a href="{{ url('/') }}">Home</a>
            </div>
            <br>
            <div>
              <i class="ion-arrow-right-b"></i> <a href="{{ route('sobre') }}">Sobre</a>
            </div>
            <br>
            <div>
              <i class="ion-arrow-right-b"></i> <a href="{{ route('servico') }}">Serviços</a>
            </div>
            <br>
            <div>
              <i class="ion-arrow-right-b"></i> <a href="{{ route('portfolio') }}">Portfólio</a>
            </div>
            {{-- <br>
            <div>
              <i class="ion-arrow-right-b"></i> <a href="#team">Equipe</a>
            </div> --}}
            <br>
            <div>
              <i class="ion-arrow-right-b"></i> <a href="{{ route('contato') }}">Contatos</a>
            </div>
            <br>
          </div>
          <div class="col-md-3">
            <h4>SERVIÇOS</h4>
            @foreach ($fs as $s)
              <div>
                <i class="ion-arrow-right-b"></i><a
                  href="{{ route('servicoshow', [$s->id, Str::slug($s->titulo)]) }}">{{ $s->titulo }}</a>
              </div>
              <br>
            @endforeach
          </div>
          <div class="col-md-3">
            <h4>BLOG</h4>

            @foreach ($fp as $p)
              <div>
                <i class="ion-arrow-right-b"></i><a
                  href="{{ Route('post', [$p->id, Str::slug($p->titulo)]) }}">{{ $p->titulo }}</a>
              </div>
            @endforeach

          </div>
          <div class="col-md-3">
            <h4>CONTATOS</h4>
            <p>
              Rua Pessêgo, 982, Macapá-AP
              <br>
              +55 96 98405 8000
              <br>
              suporte@alexrodri.com.br
            </p>
          </div>
        </div>
      </nav>
      <div class="copyright">
        &copy; Copyright <strong>AlexRodri Digital</strong>. Direitos Reservados.
      </div>
      <div class="credits">
        By <a href="{{ url('/') }}">AlexRodri Digital</a>
      </div>
    </div>
  </footer><!-- #footer -->

  @if (session('sitemap'))
    <script>
      console.log("{{ session('sitemap') }}")

    </script>
  @endif

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('lib/magnific-popup/magnific-popup.min.js') }}"></script>
  <script src="{{ asset('lib/sticky/sticky.js') }}"></script>
  <script src="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
  <script src="https://unpkg.com/imagesloaded@4.1.4/imagesloaded.pkgd.min.js"></script>
  {{-- <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.js"></script> --}}

  @yield('pagseguro')

  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/main.js') }}"></script>

  @yield('js')
  {{-- <script>
    $(document).ready(function() {
      bsCustomFileInput.init()
    })

    var $grid = $('.grid').masonry({
      itemSelector: '.grid-item',
      columnWidth: '.grid-sizer',
      percentPosition: true,
      transitionDuration: 0,
    });

    // layout Masonry after each image loads
    $grid.imagesLoaded().progress(function() {
      $grid.masonry('layout');
    });

  </script>
  --}}
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M42MGNZ" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
</body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v6.0">
</script>

</html>