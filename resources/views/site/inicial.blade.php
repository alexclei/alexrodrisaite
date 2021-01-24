@extends('layouts.layout')

@section('menu-home-class', 'menu-active')

@section('title', 'Alcance os melhores resultados! | ')

@section('banner')
    <!--==========================
		Intro Section
	============================-->
	<section id="intro">
		<div class="intro-content">
			<h1>Alcance os <span>melhores</span><br> resultados!</h1>
			<div>
				<a href="#" class="btn-get-started scrollto">Fale com um especialista</a>
				<a href="{{ route('portfolio') }}" class="btn-projects scrollto">Projetos</a>
			</div>
		</div>

		<div id="intro-carousel" class="owl-carousel" >
			<div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
			<div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
			<div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
			<div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
			<div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
		</div>

	</section><!-- #intro -->
@stop

@section('conteudo')
    <!--==========================
		About Section
	============================-->
	<section id="about" class="wow fadeInUp">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 about-img">
					<img src="img/about-img.jpg" alt="">
				</div>

				<div class="col-lg-6 content">
					<h3>Agencia de Marketing Digital, especializada em criação de sites, inbound marketing, SEO, mídia online e gestão de redes sociais.</h3>
					<h2>Atraia mais clientes pela web, com a AlexRodri Digital</h2>
					<p><i class="ion-android-checkmark-circle"></i> A AlexRodri Digital é uma agência que acredita que os meios de comunicação tradicional tem um alto valor para investimento que poder ser melhor direcionado. Num mundo conectado, onde os consumidores são agentes ativos, o modelo de interrupção e de monólogo da mídia de massa já não é tão eficiente.</p>
				</div>
			</div>

		</div>
	</section><!-- #about -->

	<!--==========================
        Services Section
    ============================-->

    <section id="services" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Novidades</h2>
                <p>Acompanhe nossos postes.</p>
            </div>
            <div class="row grid">
                <div class="col-lg-6 grid-sizer"></div>
                @foreach ($post as $p)
                    <div class="col-lg-6 grid-item">
                        <div class="box wow fadeInLeft">
                            <div class="icon"><i class="{{ $p->icon }}"></i></div>
                            <h2 class="title"><a href="{{ Route('post', [$p->id,Str::slug($p->titulo)]) }}">{{ $p->titulo }}</a></h2>
                            <p class="description">{!! mb_strimwidth($p->descricao, 0, 150, "...") !!}</p>
                            <br>
                            <p>{{ date('d/m/Y - H:i:s',strtotime($p->created_at)) }}</p>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
	</section><!-- #services -->

	<!--==========================
        Services Section
    ============================-->

    <section id="services" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h1>Serviços</h1>
                <p>Apresentamos aqui uma lista de serviços que disponibilizamos para você.</p>
            </div>
            <div class="row grid">
                <div class="col-lg-6 grid-sizer"></div>
                @foreach ($servicos as $s)
                <div class="col-lg-6 grid-item">
                    <div class="box wow fadeInLeft">
                        <div class="icon"><i class="{{ $s->icon }}"></i></div>
                        <h2 class="title"><a href="{{ route('servicoshow',[$s->id, Str::slug($s->titulo)]) }}">{{ $s->titulo }}</a></h2>
                        <p class="description">{{ $s->resumo }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- #services -->
@stop