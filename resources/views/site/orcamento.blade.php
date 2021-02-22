@extends('layouts.layout')

@section('menu-servicos-class', 'menu-active')

@section('title', "Orçamento | Serviços | ")

@section('conteudo')
	<!--==========================
		Contact Section
	============================-->
	<section id="contact" class="wow fadeInUp">
		<div class="container">
			<div class="section-header">
				<h1>Orçamento</h1>
				<p>Entre em contato conosco para pedir o orçamento e ter mais informações.</p>
			</div>
		</div>
		<div class="container">
			<div class="form">
				<form action="{{ route('enviarorcamento') }}" method="post" class="contactForm">
					@csrf
					<div class="form-row">
						<div class="form-group col-md-12">
							<select name="servico" class="form-control @error('servico') is-invalid @enderror">
								<option value="">Escolha o serviço</option>
								@foreach ($servicos as $s)
									<option @if(old('servico') == $s->id) selected @endif  value="{{ $s->id }}">{{ $s->titulo }}</option>
								@endforeach
							</select>
							@error('servico')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<input type="text" value="{{ old('nome') }}" name="nome" class="form-control @error('nome') is-invalid @enderror"placeholder="Seu Nome">
							@error('nome')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="form-group col-md-6">
							<input type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Seu Email">
							@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<input type="text" value="{{ old('conheceu') }}" name="conheceu" class="form-control @error('conheceu') is-invalid @enderror" placeholder="Como nos conheceu?">
							@error('conheceu')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="form-group col-md-6">
							<input type="text" value="{{ old('telefone') }}" class="form-control @error('telefone') is-invalid @enderror" name="telefone" id="telefone" placeholder="Seu Numero">
							@error('telefone')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
					<div class="form-group">
						<input type="text" value="{{ old('problema') }}" class="form-control @error('problema') is-invalid @enderror" name="problema" placeholder="Problema">
						@error('problema')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					<div class="form-group">
						<textarea class="form-control @error('descricao') is-invalid @enderror" name="descricao" rows="5" placeholder="Descreva a sua necessidade">{{ old('descricao') }}</textarea>
						@error('descricao')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					<div class="text-center"><button type="submit">Enviar</button></div>
				</form>
			</div>
			<br>
		</div>
	</section><!-- #contact -->
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script>
	$("#telefone").mask("+99 (99) 99999-9999");
	// $("#telefone").on("blur", function() {
	// 	var last = $(this).val().substr( $(this).val().indexOf("-") + 1 );
	// 	if( last.length == 3 ) {
	// 		var move = $(this).val().substr( $(this).val().indexOf("-") - 1, 1 );
	// 		var lastfour = move + last;
	// 		var first = $(this).val().substr( 0, 9 );
	// 		$(this).val( first + '-' + lastfour );
	// 	}
	// });
</script>	
@endsection