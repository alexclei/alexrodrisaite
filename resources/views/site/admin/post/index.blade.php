@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6">
							<a href="{{ route('admin.home') }}"><i class="fa fa-arrow-left"></i></a>
							&nbsp; &nbsp;
							Posts
						</div>
						<div class="col-md-6 text-right">
							<a href="{{ route('admin.post.create') }}"><i class="fa fa-plus"></i></a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table id="table" class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Status</th>
									<th>Titulo</th>
									<th>Email</th>
									<th>Telefone</th>
									<th>Data</th>
									<th>Opções</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($post as $i)
								<tr>
									<td scope="row">{{ $i->id }}</td>
									<td>{{ $i->status }}</td>
									<td>{{ $i->titulo }}</td>
									<td>{{ $i->email }}</td>
									<td>{{ $i->telefone }}</td>
									<td>{{ date('d/m/Y', strtotime($i->created_at)) }}</td>
									<td class="text-right">
										<a class="btn btn-success" href="{{ route('admin.post.edit', $i->id) }}"><i class="fa fa-edit"></i></a>
										<a class="btn btn-danger" href="{{ route('admin.post.destroy', $i->id) }}"
										onclick="event.preventDefault();
												 document.getElementById('delete-form-{{ $i->id }}').submit();">
											<i class="fa fa-trash"></i>
										</a>
										<form id="delete-form-{{ $i->id }}" action="{{ route('admin.post.destroy', $i->id) }}" method="post" style="display: none;">
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
</div>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
<link href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" rel="stylesheet"/>
@endsection

@section('js')
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.12/sorting/date-eu.js"></script>
<script>
	$(document).ready( function () {
		$('#table').DataTable( {
			"language": {
				"lengthMenu": "Mostrando _MENU_ registros por pagina",
				"zeroRecords": "Nada encontrado - Desculpe",
				"info": "Mostrando pagina _PAGE_ de _PAGES_ paginas",
				"infoEmpty": "Nenhum registro disponível",
				"infoFiltered": "(filtrado de um total de _MAX_ registros)"
			},
			"columns": [
				null,
				null,
				null,
				null,
				null,
				{ "type": "date-eu" },
				null,
			],
			"order": [[ 5, "desc" ]]
		} );
	} );
</script>
@endsection