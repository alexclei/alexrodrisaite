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
                    <a href="{{ route('admin.contato.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    &nbsp; &nbsp;
                    Contato
                </div>
                <div class="card-body row">
                    <div class="col-md-6 row m-0">
                        <div class="col-md-6">
                            <p>
                                <strong>Nome:</strong>
                                <br>
                                {{ $contato->nome }}
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Telefone:</strong>
                                <br>
                                {{ $contato->telefone }}
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Email:</strong>
                                <br>
                                {{ $contato->email }}
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Assunto:</strong>
                                <br>
                                {{ $contato->assunto }}
                            </p>
                        </div>
                        <div class="col-md-12">
                            <p>
                                <strong>Mensagem:</strong>
                                <br>
                                {{ $contato->mensagem }}
                            </p>
                        </div>
                    </div>
                    <form action="{{ route('admin.portfolio.update', $contato->id) }}" enctype="multipart/form-data" method="POST" class="col-md-6 m-0">
                        @csrf
                        <div class="form-group">
                            <label for="resposta">Resposta</label>
                            <textarea name="resposta" id="resposta" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
