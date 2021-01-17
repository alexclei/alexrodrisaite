@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.portfolio.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    &nbsp; &nbsp;
                    Adicionar Portfolio
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.portfolio.store') }}" enctype="multipart/form-data" method="POST" class="row">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                        <div class="form-group col-md-4">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                <option></option>
                                <option value="1">Ativo</option>
                                <option value="0">Oculto</option>
                            </select>
                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror 
                        </div>
                        <div class="form-group col-md-4">
                            <label for="categoria_id">Categoria</label>
                            <select name="categoria_id" id="categoria_id" class="form-control @error('categoria_id') is-invalid @enderror">
                                <option></option>
                                @foreach ($cat as $i)
                                <option value="{{ $i->id }}">{{ $i->titulo }}</option>
                                @endforeach
                            </select>
                            @error('categoria_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror 
                        </div>
                        <div class="form-group col-md-4">
                            <label for="imagem">Imagem</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="imagem" id="imagem">
                                <label class="custom-file-label" for="imagem">Choose file</label>
                            </div>
                            @error('imagem')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror 
                        </div>
                        <div class="form-group col-md-6">
                            <label for="titulo">Titulo</label>
                            <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}" class="form-control @error('titulo') is-invalid @enderror">
                            @error('titulo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror 
                        </div>
                        <div class="form-group col-md-6">
                            <label for="alt">Texto Alternativo</label>
                            <input type="text" name="alt" id="alt" value="{{ old('alt') }}" class="form-control @error('alt') is-invalid @enderror">
                            @error('alt')
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
