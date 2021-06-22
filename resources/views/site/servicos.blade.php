@extends('layouts.layout')

@section('menu-servicos-class', 'menu-active')

@section('title', 'Serviços | ')

@section('conteudo')
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

@section('js')
<script>
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
@endsection