@extends('layouts.app')

@section('content')
<div class="container">
	@can('admin')
	<div class="row justify-content-center">
		<div class="col-md-3">
			<div class="card">
				<div class="card-header">Usuarios</div>
				<div class="card-body">
					{{ $countUsers }}
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card">
				<div class="card-header">Orçamento</div>
				<div class="card-body">
					{{ $countOrcamentos }}
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card">
				<div class="card-header">Mensagem</div>
				<div class="card-body">
					{{ $countContatos }}
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card">
				<div class="card-header">Interações</div>
				<div class="card-body">
					{{ $totalInteracao }}
				</div>
			</div>
		</div>
	</div>
	<br>
	@endcan
	@can('cliente')
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">Meus Serviços</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Titulo</th>
									<th scope="col" colspan="2">Data do contrato</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($servico as $s)
								<tr>
									<th scope="row">{{ $s->id }}</th>
									<td>{{ $s->titulo }}</td>
									<td>{{ $s->updated_at }}</td>
									<td class="text-right">
										<a class="btn btn-success" href="{{ route('admin.servico.edit', $s->id) }}"><i class="fa fa-edit"></i></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<br>
		</div>
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">Meus Orçamentos</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">Servico</th>
									<th scope="col">Problema</th>
									<th scope="col" colspan="2">Data do Pedido</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($myOrcamento as $o)
								<tr>
									<td>{{ $o->servico->titulo }}</td>
									<td>{{ $o->assunto }}</td>
									<td>{{ $o->updated_at }}</td>
									<td class="text-right">
										<a class="btn btn-success" href="{{ route('admin.servico.edit', $o->id) }}"><i class="fa fa-edit"></i></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endcan
	@can('admin')
	<br>
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Serviços | 
					<a href="{{ route('admin.servico.create') }}"><i class="fa fa-plus"></i></a> | 
					<a href="{{ route('admin.servico.index') }}"><i class="fa fa-bars"></i></a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Titulo</th>
									<th scope="col" colspan="2">Datas</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($servico as $s)
								<tr>
									<th scope="row">{{ $s->id }}</th>
									<td>{{ $s->titulo }}</td>
									<td>{{ $s->updated_at }}</td>
									<td class="text-right">
										<a class="btn btn-success" href="{{ route('admin.servico.edit', $s->id) }}"><i class="fa fa-edit"></i></a>
										<a class="btn btn-danger" href="#"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endcan
	@can('admin')
	<br>
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Categoria | 
					<a href="{{ route('admin.categoria.create') }}"><i class="fa fa-plus"></i></a> | 
					<a href="{{ route('admin.categoria.index') }}"><i class="fa fa-bars"></i></a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">Assunto</th>
									<th scope="col">Nome</th>
									<th scope="col">Status</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($contato as $i)
								<tr>
									<td>{{ $i->assunto }}</td>
									<td>{{ $i->nome }}</td>
									<td>
										@if ($i->status == 1)
										<a href="{{ route('admin.contato.show', $i->id) }}" class="btn btn-success"><i class="fa fa-comments" aria-hidden="true"></i> &nbsp;&nbsp; Visto</a>
										@else
										<a href="{{ route('admin.contato.show', $i->id) }}" class="btn btn-warning"><i class="fa fa-comment" aria-hidden="true"></i> &nbsp;&nbsp; Novo</a>
										@endif
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Portfólio | 
					<a href="{{ route('admin.portfolio.create') }}"><i class="fa fa-plus"></i></a> | 
					<a href="{{ route('admin.portfolio.index') }}"><i class="fa fa-bars"></i></a>
				</div>

				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">#Cat</th>
									<th scope="col">Titulo</th>
									<th scope="col" colspan="2">Views</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($portfolio as $i)
								<tr>
									<td>{{ $i->categoria->titulo }}</td>
									<td>{{ $i->titulo }}</td>
									<td><img src="{{ asset('storage/'.$i->imagem) }}" width="200px" alt="{{ $i->alt }}"></td>
									<td class="text-right">
										<a class="btn btn-success" href="{{ route('admin.portfolio.edit',1) }}"><i class="fa fa-edit"></i></a>
										<a class="btn btn-danger"  href="{{ route('admin.portfolio.destroy',1) }}"
										onclick="event.preventDefault();
														document.getElementById('delete-form-{{ $i->id }}').submit();">
											<i class="fa fa-trash"></i>
										</a>
										<form id="delete-form-{{ $i->id }}" action="{{ route('admin.portfolio.destroy', $i->id) }}" method="post" style="display: none;">
											@csrf
											{{ method_field('DELETE') }}
										</form>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endcan
	@can('admin')
	<br>
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Contatos | 
					{{-- <a href="{{ route('admin.contato.create') }}"><i class="fa fa-plus"></i></a> |  --}}
					<a href="{{ route('admin.contato.index') }}"><i class="fa fa-bars"></i></a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">Assunto</th>
									<th scope="col">Nome</th>
									<th scope="col">Status</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($contato as $i)
								<tr>
									<td>{{ $i->assunto }}</td>
									<td>{{ $i->nome }}</td>
									<td>
										@if ($i->status == 1)
										<a href="{{ route('admin.contato.show', $i->id) }}" class="btn btn-success"><i class="fa fa-comments" aria-hidden="true"></i> &nbsp;&nbsp; Visto</a>
										@else
										<a href="{{ route('admin.contato.show', $i->id) }}" class="btn btn-warning"><i class="fa fa-comment" aria-hidden="true"></i> &nbsp;&nbsp; Novo</a>
										@endif
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Posts | 
					<a href="{{ route('admin.post.create') }}"><i class="fa fa-plus"></i></a> | 
					<a href="{{ route('admin.post.index') }}"><i class="fa fa-bars"></i></a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Titulo</th>
									<th scope="col" colspan="2">Datas</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($post as $p)
								<tr>
									<th scope="row">{{ $p->id }}</th>
									<td>{{ $p->titulo }}</td>
									<td>{{ $p->updated_at }}</td>
									<td class="text-right">
										<a class="btn btn-success" href="{{ route('admin.post.edit', $p->id) }}"><i class="fa fa-edit"></i></a>
										<a class="btn btn-danger" href="#"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endcan
</div>
@endsection
