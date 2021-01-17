@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.post.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    &nbsp; &nbsp;
                    Editar Post
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.post.update', $p->id) }}" enctype="multipart/form-data" method="POST" class="row">
                        @csrf
                        @method('put')
                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                        <div class="form-group col-md-6">
                            <label for="titulo">Titulo</label>
                            @if (old('titulo'))
                            <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}" class="form-control @error('titulo') is-invalid @enderror">
                            @else
                            <input type="text" name="titulo" id="titulo" value="{{ $p->titulo }}" class="form-control @error('titulo') is-invalid @enderror">
                            @endif
                            @error('titulo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror 
                        </div>
                        <div class="form-group col-md-6">
                            <label for="subtitulo">Subtitulo</label>
                            @if (old('subtitulo'))
                            <input type="text" name="subtitulo" id="subtitulo" value="{{ old('subtitulo') }}" class="form-control @error('subtitulo') is-invalid @enderror">
                            @else
                            <input type="text" name="subtitulo" id="subtitulo" value="{{ $p->subtitulo }}" class="form-control @error('subtitulo') is-invalid @enderror">
                            @endif
                            @error('subtitulo')
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
                                @else
                                @if ($p->status == '1')
                                <option value="1">Ativo</option>
                                @else
                                <option value="0">Oculto</option>
                                @endif
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
                            <label for="imagem">Imagem {{ $p->imagem }}</label>
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
                            @if (old('alt'))
                            <input type="text" name="alt" id="alt" value="{{ old('alt') }}" class="form-control @error('alt') is-invalid @enderror">
                            @else
                            <input type="text" name="alt" id="alt" value="{{ $p->alt }}" class="form-control @error('alt') is-invalid @enderror">
                            @endif
                            @error('alt')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror 
                        </div>
                        <div class="form-group col-md-3">
                            <label for="icon">Icon</label>
                            @if (old('icon'))
                            <input type="text" name="icon" id="icon" value="{{ old('icon') }}" class="form-control @error('icon') is-invalid @enderror">
                            @else
                            <input type="text" name="icon" id="icon" value="{{ $p->icon }}" class="form-control @error('icon') is-invalid @enderror">
                            @endif
                            @error('icon')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror 
                        </div>
                        <div class="form-group col-md-3">
                            <label for="tag">Tags</label>
                            @if (old('tag'))
                            <input type="text" name="tag" id="tag" value="{{ old('tag') }}" class="form-control @error('tag') is-invalid @enderror">
                            @else
                            <input type="text" name="tag" id="tag" value="{{ $p->tag }}" class="form-control @error('tag') is-invalid @enderror">
                            @endif
                            @error('tag')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror 
                        </div>
                        <div class="form-group col-md-12">
                            <label for="titulo">Descrição</label>
                            @if (old('descricao'))
                            <textarea name="descricao" id="descricao">{{ old('descricao') }}</textarea>
                            @else
                            <textarea name="descricao" id="descricao">{{ $p->descricao }}</textarea>
                            @endif
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