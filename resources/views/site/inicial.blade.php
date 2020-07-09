@extends('layout')

@section('menu-home-class', 'menu-active')

@section('banner')
    <!--==========================
		Intro Section
	============================-->
	<section id="intro">
		<div class="intro-content">
			<h2>Criamos <span>seu site</span><br> Profissional!</h2>
			<div>
				<a href="#about" class="btn-get-started scrollto">Orçamento</a>
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
					<h2>Lorem ipsum dolor sit amet, consectetur adipiscing</h2>
					<h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>

					<ul>
						<li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
						<li><i class="ion-android-checkmark-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
						<li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
					</ul>

				</div>
			</div>

		</div>
	</section><!-- #about -->
@stop