@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.post.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    &nbsp; &nbsp;
                    Adicionar Post
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.post.store') }}" enctype="multipart/form-data" method="POST" class="row">
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
                            <label for="subtitulo">Subtitulo</label>
                            <input type="text" name="subtitulo" id="subtitulo" value="{{ old('subtitulo') }}" class="form-control @error('subtitulo') is-invalid @enderror">
                            @error('subtitulo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror 
                        </div>
                        <div class="form-group col-md-1">
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
                        <div class="form-group col-md-2">
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
                            <label for="titulo">Descrição</label>
                            <textarea name="descricao" id="descricao">{{ old('descricao') }}</textarea>
                            @error('descricao')
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

        //ClassicEditor.create($('#edit_about_text').get()[0]); this or below part.
        //to elobrate I have added more codes
        ClassicEditor.create( document.querySelector( '#descricao' ), {
            toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                ]
            }
        })
        .catch( error => {
            console.log( error );
        });
    });

</script>
@endsection