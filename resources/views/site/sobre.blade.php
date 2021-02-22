@extends('layouts.layout')

@section('menu-sobre-class', 'menu-active')

  {{-- @section('banner')
	<!--==========================
		Intro Section
	============================-->
	<section id="intro">
		<div class="intro-content">
			<h2>Criamos <span>seu site</span><br> Profissional!</h2>
			<div>
				<a href="#about" class="btn-get-started scrollto">Começar</a>
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
@stop --}}

@section('title', 'Sobre | ')

@section('conteudo')
  <!--==========================
    About Section
   ============================-->
  <section id="about" class="wow fadeInUp">
    <div class="container">
      <div class="section-header">
        <h1>Sobre</h1>
        <p>Somos motivados por resultados!</p>
      </div>
      <div class="row">
        <div class="col-lg-7 content">
          <h3>"É nesse mundo conectado e dinâmizado que a AlexRodri Digital atua"</h3>
          <p>Os consumidores, cada vez melhores informados, querem envolvimento e relacionamento de verdade com as marcas,
            empresas e instituições com as quais se relacionam.</p>
          <p>Nosso quadro de colaboradores apresenta profissionais capacitados e qualificados para suprir as necessidades
            de comunicação digital da sua empresa.</p>
          <ul>
            <li><i class="ion-android-checkmark-circle"></i> Web Designers</li>
            <li><i class="ion-android-checkmark-circle"></i> Programadores</li>
            <li><i class="ion-android-checkmark-circle"></i> Designers Gráficos</li>
            <li><i class="ion-android-checkmark-circle"></i> Publicitários</li>
            <li><i class="ion-android-checkmark-circle"></i> Gestores de Marketing Digital</li>
            <li><i class="ion-android-checkmark-circle"></i> Profissionais das áreas Comercial</li>
            <li><i class="ion-android-checkmark-circle"></i> Administrativa</li>
            <li><i class="ion-android-checkmark-circle"></i> Criação de sites</li>
          </ul>
        </div>
        <div class="col-lg-5 about-img">
          <img src="{{ asset('img/sobre/sobretexto.svg') }}" alt="">
        </div>
      </div>
    </div>
  </section><!-- #about -->

  <!--==========================
   Clients Section
   ============================-->
  <section id="clients" class="wow fadeInUp">
    <div class="container">
      <div class="section-header">
        <h2>Diferencial</h2>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <p class="text-center">
            VISÃO INOVADORA
            <br>
            <img src="{{ asset('img/sobre/inovacao.svg') }}" width="150px" alt="">
          </p>
        </div>
        <div class="col-lg-3">
          <p class="text-center">
            EXPERIÊNCIA
            <br>
            <img src="{{ asset('img/sobre/experiencia.svg') }}" width="150px" alt="">
          </p>
        </div>
        <div class="col-lg-3">
          <p class="text-center">
            IMERSÃO TOTAL NO NEGÓCIO
            <br>
            <img src="{{ asset('img/sobre/imersao.svg') }}" width="150px" alt="">
          </p>
        </div>
        <div class="col-lg-3">
          <p class="text-center">
            CRIATIVIDADE & INTELIGÊNCIA
            <br>
            <img src="{{ asset('img/sobre/inteligencia.svg') }}" width="150px" alt="">
          </p>
        </div>
      </div>
      <br>
      <br>
      <br>
      <div class="section-header">
        <h2>Clientes</h2>
        <p>Principais marcas parceiras da empresa.</p>
      </div>
      <div class="owl-carousel clients-carousel">
        <img src="{{ asset('img/clients/cliente1-imperio-das-damas.png') }}" alt="imperio-das-damas">
        <img src="{{ asset('img/clients/cliente2-mateus-materiais-de-construcao.png') }}"
          alt="mateus-materiais-de-construcao">
      </div>
    </div>
  </section><!-- #clients -->

  <!--==========================
    Services Section
   ============================-->

  <section id="services" class="wow fadeInUp">
    <div class="container">
      <div class="section-header">
        <h2>O que nós fazemos?</h2>
        <p>Apresentamos aqui uma lista de serviços que disponibilizamos para você.</p>
      </div>
      <div class="row grid">
        <div class="col-lg-6 grid-sizer"></div>
        @foreach ($servicos as $s)
          <div class="col-lg-6 grid-item">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="{{ $s->icon }}"></i></div>
              <h2 class="title"><a
                  href="{{ route('servicoshow', [$s->id, Str::slug($s->titulo)]) }}">{{ $s->titulo }}</a></h2>
              <p class="description">{{ $s->resumo }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section><!-- #services -->

  {{-- <!--==========================
   Testimonials Section
   ============================-->
  <section id="testimonials" class="wow fadeInUp">
    <div class="container">
      <div class="section-header">
        <h2>Depoimento</h2>
        <p>Veja o que as pessoas falam de nossos serviços.</p>
      </div>
      <div class="owl-carousel testimonials-carousel">

				<div class="testimonial-item">
          <p>
            <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
						Serviço excelente, estou satisfeito com o atendimento e a dedicação da agencia
            <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
          </p>
          <img src="img/depoimento/testimonial-1.jpg" class="testimonial-img" alt="Diego.jpg">
          <h3>Diego</h3>
          <h4>Media e Propaganda</h4>
        </div>

        <div class="testimonial-item">
          <p>
            <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum
            velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
            <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
          </p>
          <img src="img/depoimento/testimonial-2.jpg" class="testimonial-img" alt="">
          <h3>Sara Wilsson</h3>
          <h4>Designer</h4>
        </div>

        <div class="testimonial-item">
          <p>
            <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor
            labore quem eram duis noster aute amet eram fore quis sint minim.
            <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
          </p>
          <img src="img/depoimento/testimonial-3.jpg" class="testimonial-img" alt="">
          <h3>Jena Karlis</h3>
          <h4>Store Owner</h4>
        </div>

      </div>

    </div>
  </section><!-- #testimonials --> --}}
@stop
