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
                    <a href="{{ route('admin.portfolio.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    &nbsp; &nbsp;
                    Editar Portfolio
                </div>
                <div class="card-body row">
                    <form action="{{ route('admin.portfolio.update', $portfolio->id) }}" enctype="multipart/form-data" method="POST" class="row col-md-9">
                        @csrf
                        @method('put')
                        <div class="form-group col-md-4">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                @if ($portfolio->status == 1)
                                <option value="1">Ativo</option>
                                @endif
                                @if ($portfolio->status == 0)
                                <option value="0">Oculto</option>
                                @endif
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
                                <option value="{{ $portfolio->categoria->id }}">{{ $portfolio->categoria->titulo }}</option>
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
                            @if (old('titulo'))
                            <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}" class="form-control @error('titulo') is-invalid @enderror">
                            @else
                            <input type="text" name="titulo" id="titulo" value="{{ $portfolio->titulo }}" class="form-control @error('titulo') is-invalid @enderror">                                
                            @endif
                            @error('titulo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror 
                        </div>
                        <div class="form-group col-md-6">
                            <label for="alt">Texto Alternativo</label>
                            @if (old('alt'))
                            <input type="text" name="alt" id="alt" value="{{ old('alt') }}" class="form-control @error('alt') is-invalid @enderror">
                            @else
                            <input type="text" name="alt" id="alt" value="{{ $portfolio->alt }}" class="form-control @error('alt') is-invalid @enderror">
                            @endif
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
                    <div class="col-md-3">
                        <img src="{{ asset('storage/'.$portfolio->imagem) }}" width="100%" alt="{{ $portfolio->alt }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
