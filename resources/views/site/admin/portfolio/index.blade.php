@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('admin.home') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                            &nbsp; &nbsp;
                            Portfolio
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('admin.portfolio.create') }}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Cat</th>
                                    <th>Titulo</th>
                                    <th>Alt</th>
                                    <th>Imagem</th>
                                    <th>Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($portfolio as $i)
                                <tr>
                                    <td scope="row">{{ $i->id }}</td>
                                    <td>{{ $i->categoria->titulo }}</td>
                                    <td>{{ $i->titulo }}</td>
                                    <td>{{ $i->alt }}</td>
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
</div>
@endsection
