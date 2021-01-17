@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Portfolio</div>
                <div class="card-body">
                    <form action="{{ route('admin.portfolio.store') }}" enctype="multipart/form-data" method="POST" class="row">
                        @csrf
                        <div class="form-group col-md-4">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option></option>
                                <option>Ativo</option>
                                <option>Oculto</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="categoria">Categoria</label>
                            <select name="categoria" id="categoria" class="form-control">
                                <option></option>
                                <option>Web</option>
                                <option>Social Media</option>
                                <option>Foto</option>
                                <option>Video</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="imagem">Imagem</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="imagem" id="imagem">
                                <label class="custom-file-label" for="imagem">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="titulo">Titulo</label>
                            <input type="text" name="titulo" id="titulo" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="alternativo">Texto Alternativo</label>
                            <input type="text" name="alternativo" id="alternativo" class="form-control">
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
