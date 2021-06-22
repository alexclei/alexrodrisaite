@extends('layouts.layout')

@section('menu-blog-class', 'menu-has-children menu-active')

@section('title', 'Blog | ')

@section('conteudo')
	<!--==========================
		Services Section
	============================-->

	<section id="services" class="wow fadeInUp">
		<div class="container">
			<div class="section-header">
				<h1>Blog</h1>
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
			{{-- <div>
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
			</div> --}}
			<div>
				{{ $post->links() }}
			</div>
		</div>
	</section><!-- #services -->
@stop

@section('js')
<script>
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