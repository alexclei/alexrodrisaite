@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('admin.home') }}"><i class="fa fa-arrow-left" aria-hidde0n="true"></i></a>
                            &nbsp; &nbsp;
                            Categoria
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Titulo</th>
                                    <th>Classe</th>
                                    <th>Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categoria as $i)
                                <tr>
                                    <td scope="row">{{ $i->id }}</td>
                                    <td>{{ $i->titulo }}</td>
                                    <td>{{ $i->class }}</td>
                                    <td class="text-right">
                                        <a class="btn btn-success" href="{{ route('admin.categoria.edit',$i->id) }}"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-danger"  href="{{ route('admin.categoria.destroy',$i->id) }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('delete-form-{{ $i->id }}').submit();">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="delete-form-{{ $i->id }}" action="{{ route('admin.categoria.destroy', $i->id) }}" method="post" style="display: none;">
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
