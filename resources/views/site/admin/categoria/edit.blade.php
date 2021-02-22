@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('statusok'))
                <div class="alert alert-success" role="alert">
                    {{ session('statusok') }}
                </div>
            @endif
            @if (session('status'))
                <div class="alert alert-info" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.categoria.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    &nbsp; &nbsp;
                    Editar Categoria
                </div>
                <div class="card-body row">
                    <form action="{{ route('admin.categoria.update', $categoria->id) }}" enctype="multipart/form-data" method="POST" class="row col-md-12">
                        @csrf
                        @method('put')
                        <div class="form-group col-md-6">
                            <label for="titulo">Titulo</label>
                            @if (old('titulo'))
                            <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}" class="form-control @error('titulo') is-invalid @enderror">
                            @else
                            <input type="text" name="titulo" id="titulo" value="{{ $categoria->titulo }}" class="form-control @error('titulo') is-invalid @enderror">                                
                            @endif
                            @error('titulo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror 
                        </div>
                        <div class="form-group col-md-6">
                            <label for="class">Class</label>
                            @if (old('class'))
                            <input type="text" name="class" id="class" value="{{ old('class') }}" class="form-control @error('class') is-invalid @enderror">
                            @else
                            <input type="text" name="class" id="class" value="{{ $categoria->class }}" class="form-control @error('class') is-invalid @enderror">                                
                            @endif
                            @error('class')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror 
                        </div>
                        <div class="form-group col-md-12">
                            <input type="submit" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
