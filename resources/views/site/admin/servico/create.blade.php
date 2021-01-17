@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.servico.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    &nbsp; &nbsp;
                    Adicionar Serviço
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.servico.store') }}" enctype="multipart/form-data" method="POST" class="row">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
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
                            <label for="resumo">Resumo</label>
                            <input type="text" name="resumo" id="resumo" value="{{ old('resumo') }}" class="form-control @error('resumo') is-invalid @enderror">
                            @error('resumo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror 
                        </div>
                        <div class="form-group col-md-1">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                @if (old('status') == '1')
                                <option value="1">Ativo</option>
                                @elseif (old('status') == '0')
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
                        <div class="form-group col-md-2">
                            <label for="imagem">Imagem</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="imagem" id="imagem">
                                <label class="custom-file-label" for="imagem">Escolher</label>
                            </div>
                            @error('imagem')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror 
                        </div>
                        <div class="form-group col-md-3">
                            <label for="alt">Texto Alternativo</label>
                            <input type="text" name="alt" id="alt" value="{{ old('alt') }}" class="form-control @error('alt') is-invalid @enderror">
                            @error('alt')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror 
                        </div>
                        <div class="form-group col-md-3">
                            <label for="icon">Icon</label>
                            <input type="text" name="icon" id="icon" value="{{ old('icon') }}" class="form-control @error('icon') is-invalid @enderror">
                            @error('icon')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror 
                        </div>
                        <div class="form-group col-md-3">
                            <label for="tag">Tags</label>
                            <input type="text" name="tag" id="tag" value="{{ old('tag') }}" class="form-control @error('tag') is-invalid @enderror">
                            @error('tag')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror 
                        </div>
                        <div class="form-group col-md-12">
                            <label for="codigo">Código</label>
                            <textarea name="codigo" id="codigo" class="form-control @error('codigo') is-invalid @enderror">{{ old('codigo') }}</textarea>
                            @error('codigo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror 
                        </div>
                        <div class="form-group col-md-3">
                            <label for="plano1">Plano 1</label>
                            <input type="text" name="plano1" id="plano1" value="{{ old('plano1') }}" class="form-control @error('plano1') is-invalid @enderror">
                            @error('plano1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror 
                        </div>
                        <div class="form-group col-md-3">
                            <label for="plano2">Plano 2</label>
                            <input type="text" name="plano2" id="plano2" value="{{ old('plano2') }}" class="form-control @error('plano2') is-invalid @enderror">
                            @error('plano2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror 
                        </div>
                        <div class="form-group col-md-3">
                            <label for="plano1">Plano 3</label>
                            <input type="text" name="plano3" id="plano3" value="{{ old('plano3') }}" class="form-control @error('plano3') is-invalid @enderror">
                            @error('plano3')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror 
                        </div>
                        <div class="form-group col-md-3">
                            <label for="plano4">Plano 4</label>
                            <input type="text" name="plano4" id="plano4" value="{{ old('plano4') }}" class="form-control @error('plano4') is-invalid @enderror">
                            @error('plano4')
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

@section('js')
<script>
    
    $(document).ready(function(){

        ClassicEditor.create($('#descricao').get()[0])
        //this or below part.
        //to elobrate I have added more codes
        // ClassicEditor.create( document.querySelector( '#descricao' ), {
        //     toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
        //     heading: {
        //         options: [
        //             { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
        //             { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
        //             { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
        //         ]
        //     }
        // })
        .catch( error => {
            console.log( error );
        });
    });

</script>
@endsection