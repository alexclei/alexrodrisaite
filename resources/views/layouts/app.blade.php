<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <title>AlexRodri Digital - PainelAdmin</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta
    content="Site da agência amapaense AlexRodri Digital, que faz serviços na area de internet e tecnologias! Sites, Aplicativos, Marketing, Fotos, Videos e muito mais."
    name="description">
  <meta name="author" content="Alex Rodrigues">
  <meta name="robots" content="index">
  <meta name="google-site-verification" content="SSderi8XzYXUmJIOXCizjQiq6SQT4BI11N6dvetdzUI">

  <!-- Google+ / Schema.org -->
  @section('meta-blog')
    <meta itemprop="name" content="AlexRodri Digital">

    {{-- <meta itemprop="description" content="Descrição da página em menos de 200 caracteres."> --}}
    <meta itemprop="description"
      content="Site da agência amapaense AlexRodri Digital, que faz serviços na area de internet e tecnologias! Sites, Aplicativos, Marketing, Fotos, Videos e muito mais.">
    <meta itemprop="image" content="https://exemplo.com/imagem.png">
    <link href="https://plus.google.com/+SuaPagina" rel="publisher">

    <!-- Open Graph Facebook -->
    <meta property="og:title" content="Título da página">
    <meta property="og:description"
      content="Site da agência amapaense AlexRodri Digital, que faz serviços na area de internet e tecnologias! Sites, Aplicativos, Marketing, Fotos, Videos e muito mais.">
    {{-- <meta property="og:description" content="Descrição da página em menos de 200 caracteres."/> --}}
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:site_name" content="AlexRodri Digital" />
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://exemplo.com/imagem.png">

    <!-- Twitter -->
    <meta name="twitter:title" content="Título da página">
    <meta name="twitter:description" content="Descrição da página em menos de 200 caracteres.">
    <meta name="twitter:url" content="{{ Request::url() }}">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="https://exemplo.com/imagem.png">
    <!-- <meta name="twitter:creator" content="@estevanmaito"> -->
    <meta name="twitter:site" content="@empresa">
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
  @yield('css')
  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body id="body">
  <!--==========================
   Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:suporte@alexrodri.com.br">suporte@alexrodri.com.br</a>
        <i class="fa fa-phone"></i> +55 96 98405-8000
      </div>
      <div class="social-links float-right">
        {{-- <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> --}}
        <a href="https://www.facebook.com/alexrodridigital" class="facebook"><i class="fa fa-facebook"></i></a>
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
        <h2><a href="{{ url('/') }}" class="scrollto">Alex<span>Rodri</span> Digital</a></h2>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Cadastre-se</a>
              </li>
            @endif
          @else
            <li>
              <a href="{{ route('admin.home') }}">Painel</a>
            </li>
            @can('admin')
              <li>
                <a href="{{ route('admin.servico.index') }}">Meus serviços</a>
              </li>
              <li>
                <a href="{{ route('admin.home') }}">Post</a>
              </li>
              <li>
                <a href="{{ route('admin.home') }}">Mensagem</a>
              </li>
              <li class="menu-has-children">
                <a href="{{ route('admin.portfolio.index') }}">Portfilio</a>
                <ul>
                  <li>
                    <a href="{{ route('admin.portfolio.index') }}">Ver Portfilio</a>
                  </li>
                  <li>
                    <a href="{{ route('admin.portfolio.create') }}">Criar Portfilio</a>
                  </li>
                </ul>
              </li>
            @endcan
            <li class="menu-has-children"><a href="#">{{ Auth::user()->name }}</a>
              <ul>
                <li>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </li>
              </ul>
            </li>
          @endguest
          @can('admin')
            <li>
              <a href="{{ url('/') }}">Ver Site</a>
            </li>
          @endcan
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>

  </header><!-- #header -->
  {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

  @yield('banner')

  <main id="main">
    <br>
    <br>
    @yield('content')
    <br>
    <br>
  </main>

  <!--==========================
   Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>AlexRodri</strong>. Direitos Reservados.
      </div>
      <div class="credits">
        By <a href="{{ url('/') }}">AlexRodri</a>
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
  {{-- <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script> --}}
  <script type="text/javascript" src="{{ asset('lib/ckeditor/ckeditor.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/main.js') }}"></script>

  @yield('js')

</body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v6.0">
</script>

</html>
