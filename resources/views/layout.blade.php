<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<title>AlexRodri Digital</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<meta content="Site da agência amapaense AlexRodri Digital, que faz serviços na area de internet e tecnologias! Sites, Aplicativos, Marketing, Fotos, Videos e muito mais." name="description">
		<meta name="author" content="Alex Rodrigues">
		<meta name="robots" content="index">
		<meta name="google-site-verification" content="SSderi8XzYXUmJIOXCizjQiq6SQT4BI11N6dvetdzUI">
		
		<!-- Google+ / Schema.org -->
		@section('meta-blog')
		<meta itemprop="name" content="AlexRodri Digital">
		
		{{-- <meta itemprop="description" content="Descrição da página em menos de 200 caracteres."> --}}
		<meta itemprop="description" content="Site da agência amapaense AlexRodri Digital, que faz serviços na area de internet e tecnologias! Sites, Aplicativos, Marketing, Fotos, Videos e muito mais.">
		<meta itemprop="image" content="https://exemplo.com/imagem.png">
		<link href="https://plus.google.com/+SuaPagina" rel="publisher">
		
		<!-- Open Graph Facebook -->
		<meta property="og:title" content="Título da página">
		<meta property="og:description" content="Site da agência amapaense AlexRodri Digital, que faz serviços na area de internet e tecnologias! Sites, Aplicativos, Marketing, Fotos, Videos e muito mais.">
		{{-- <meta property="og:description" content="Descrição da página em menos de 200 caracteres."/> --}}
		<meta property="og:url" content="{{ Request::url() }}">
		<meta property="og:site_name" content="AlexRodri Digital"/>
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
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
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
					<a href="https://www.youtube.com/channel/UC6UUAhVroiOgeL0QR4aDF3g/" class="instagram"><i class="fa fa-youtube-play"></i></a>
					
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
					<h1><a href="{{ url('/') }}" class="scrollto">Alex<span>Rodri</span> Digital</a></h1>
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
						<li class="@yield('menu-servicos-class')">
							<a href="{{ route('servico') }}">Serviços</a>
							@yield('menu-servicos-links')
						</li>
						<li class="@yield('menu-portfolio-class')">
							<a href="{{ route('portfolio') }}">Portfólio</a>
						</li>
						<li class="@yield('menu-team-class')">
							{{-- <a href="{{ route('equipe') }}">Equipe</a> --}}
						</li>
						<li class="@yield('menu-blog-class')">
							<a href="{{ route('blog') }}">Blog</a>
						</li>
						<li class="@yield('menu-contato-class')">
							<a href="{{ route('contato') }}">Contatos</a>
						</li>
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
					<div class="col-md-8 row">
						<div class="col-md-6">
							<h4>AGÊNCIA</h4>
							<div>
								<i class="ion-arrow-right-b"></i> <a href="{{ url('/') }}">Home</a>
							</div>
							<div>
								<i class="ion-arrow-right-b"></i> <a href="{{ route('sobre') }}">Sobre</a>
							</div>
							<div>
								<i class="ion-arrow-right-b"></i> <a href="{{ route('servico') }}">Serviços</a>
							</div>
							<div>
								<i class="ion-arrow-right-b"></i> <a href="{{ route('portfolio') }}">Portfólio</a>
							</div>
							<div>
								<i class="ion-arrow-right-b"></i> <a href="#team">Equipe</a>
							</div>
							<div>
								<i class="ion-arrow-right-b"></i> <a href="{{ route('contato') }}">Contatos</a>
							</div>
						</div>
						<div class="col-md-6">
							<h4>SERVIÇOS</h4>
							<div>
								<i class="ion-arrow-right-b"></i> <a href="{{ url('/') }}">Home</a>
							</div>
						</div>
						<div class="col-md-6">
							<h4>BLOG</h4>
							
							@foreach ($fp as $p)
								<div>
									<i class="ion-arrow-right-b"></i><a href="{{ Route('post', [$p->id, Str::kebab($p->titulo)]) }}">{{ $p->titulo }}</a>
								</div>
							@endforeach

						</div>
						<div class="col-md-6">
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
					<div class="col-md-4">
						<div class="fb-page" 
							data-href="https://www.facebook.com/alexrodridigital"
							data-tabs="timeline, messages"
							data-width="" data-height=""
							data-small-header="false"
							data-adapt-container-width="true"
							data-hide-cover="false" data-show-facepile="true">
							<blockquote cite="https://www.facebook.com/alexrodridigital" class="fb-xfbml-parse-ignore">
								<a href="https://www.facebook.com/alexrodridigital">Alexrodri Digital</a>
							</blockquote>
						</div>
					</div>
				</nav>
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

		<!-- Template Main Javascript File -->
		<script src="{{ asset('js/main.js') }}"></script>
		<script data-ad-client="ca-pub-2850804355745380" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-162211309-1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-162211309-1');
		</script>
	</body>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v6.0"></script>
</html>
