@extends('layouts.layout')

@section('menu-servicos-class', 'menu-active')

@section('title', "$servico->titulo | Serviços | ")

@section('meta-blog')
<meta itemprop="name" content="{{ $servico->titulo }} | Serviços | AlexRodri Digital">
{{-- <meta itemprop="description" content="Descrição da página em menos de 200 caracteres."> --}}
<meta itemprop="description" content="{{ $servico->resumo }}">
<meta itemprop="image" content="{{ asset('storage/'.$servico->imagem) }}">

<!-- Open Graph Facebook -->
{{-- <meta property="fb:admins" content="100001921016756"> --}}
<meta property="fb:app_id" content="1259129577759263">
<meta property="og:title" content="{{ $servico->titulo }} | AlexRodri Digital">
<meta property="og:description" content="{{ $servico->resumo }}">
{{-- <meta property="og:description" content="Descrição da página em menos de 200 caracteres."/> --}}
<meta property="og:url" content="{{ Request::url() }}">
<meta property="og:site_name" content="AlexRodri Digital">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ asset('storage/'.$servico->imagem) }}">

<!-- Twitter -->
<meta name="twitter:title" content="{{ $servico->titulo }} | AlexRodri Digital">
<meta name="twitter:description" content="{{ $servico->resumo }}">
{{-- <meta name="twitter:description" content="Descrição da página em menos de 200 caracteres."> --}}
<meta name="twitter:url" content="{{ Request::url() }}">
<meta name="twitter:card" content="summary">
<meta name="twitter:image" content="{{ asset('storage/'.$servico->imagem) }}">
<meta name="twitter:creator" content="@alexrodridev">
<meta name="twitter:site" content="@alexrodridev">
@endsection

@section('conteudo')
<!--==========================
Services Section
============================-->

<section id="services" class="wow fadeInUp">
    <div class="container">
        <div class="section-header">
            <h1>{{ $servico->titulo }}</h1>
            <h2>{{ $servico->resumo }}</h2>
        </div>
        <div class="row">
            <div class="col-12">
                {!! $servico->codigo !!}
            </div>
            <div class="col-12">
                <div class="row justify-content-center">
                    @if ($servico->plano1 != '#')
                    <div class="col-lg-3 text-center">
                        <button id="form-buy-btn" class="btn btn-45off text-white">
                            Compre Já - {{ $servico->plano1 }}
                        </button>
                    </div>
                    @endif
                    @if ($servico->plano2 != '#')
                    <div class="col-lg-3 text-center">
                        <button id="form-buy-btn" class="btn btn-45off text-white">
                            Compre Já - {{ $servico->plano2 }}
                        </button>
                    </div>
                    @endif
                    @if ($servico->plano3 != '#')
                    <div class="col-lg-3 text-center">
                        <button id="form-buy-btn" class="btn btn-45off text-white">
                            Compre Já - {{ $servico->plano3 }}
                        </button>
                    </div>
                    @endif
                    @if ($servico->plano4 != '#')
                    <div class="col-lg-3 text-center">
                        <button id="form-buy-btn" class="btn btn-45off text-white">
                            Compre Já - {{ $servico->plano4 }}
                        </button>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-12" id="form-buy" style="display: none">
                <br>
                <br>
                <form method="post" class="row" action="{{ route('boleto_action') }}">
                    @csrf
                    <div class="col-12">
                        <h5>Dados Pessoais</h5>
                    </div>
                    <input type="hidden" id="pagseguro_token" name="pagseguro_token"/>
                    <div class="form-group col-md-6 col-lg-3">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" value="{{ old('nome') }}" class="form-control @error('nome') is-invalid @enderror">
                        @error('nome')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 col-lg-3">
                        <label for="telefone">Telefone</label>
                        <input type="text" name="telefone" id="telefone" value="{{ old('telefone') }}" class="form-control @error('telefone') is-invalid @enderror">
                        @error('telefone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 col-lg-3">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 col-lg-3">
                        <label for="c">CPF/CNPJ</label>
                        <input type="text" name="c" id="cpf" value="{{ old('c') }}" class="form-control @error('c') is-invalid @enderror">
                        @error('c')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-12">
                        <h5>Dados de Endereço</h5>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="c">Endereço</label>
                        <input type="text" name="c" id="cpf" value="{{ old('c') }}" class="form-control @error('c') is-invalid @enderror">
                        @error('c')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 col-lg-2">
                        <label for="c">Número</label>
                        <input type="text" name="c" id="cpf" value="{{ old('c') }}" class="form-control @error('c') is-invalid @enderror">
                        @error('c')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 col-lg-4">
                        <label for="c">Bairro</label>
                        <input type="text" name="c" id="cpf" value="{{ old('c') }}" class="form-control @error('c') is-invalid @enderror">
                        @error('c')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 col-lg-3">
                        <label for="cep">CEP</label>
                        <input type="text" name="cep" id="cep" value="{{ old('cep') }}" class="form-control @error('cep') is-invalid @enderror">
                        @error('cep')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="c">Cidade</label>
                        <input type="text" name="c" id="cpf" value="{{ old('c') }}" class="form-control @error('c') is-invalid @enderror">
                        @error('c')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 col-lg-3">
                        <label for="c">UF</label>
                        <input type="text" name="c" id="cpf" value="{{ old('c') }}" class="form-control @error('c') is-invalid @enderror">
                        @error('c')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-12">
                        <button class="btn btn-45off text-white" type="submit">CONFIRMAR e GERAR BOLETO</button>
                    </div>
                </form>
            </div>
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <br>
                        <br>
                        <br>
                        <img src="{{ asset('storage/'.$servico->imagem) }}" width="100%" alt="">
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <h5>Mais Serviços</h5>
                <table width="100%">
                    <tbody>
                        @foreach ($fs as $s)
                        <tr>
                            <td>
                                <i class="ion-arrow-right-b"></i> <a href="{{ Route('post', [$s->id,Str::slug($s->titulo)]) }}">{{ $s->titulo }}</a>
                                <hr>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                <h5>Tags</h5>
                <table>
                    <tbody>
                        @php
                            $tag = explode(',',$servico->tag);
                            @endphp
                        @foreach ($tag as $t)
                        <tr>
                            <td><a href="#">{{ $t }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>                 
        </div>
    </div>
</section><!-- #services -->
@stop

@section('pagseguro')
<script type="text/javascript" src="{{ PagSeguro::getUrl()['javascript'] }}"></script>
<script>
    function sl() {
        $('#form-buy').show()
    }
    
    $("#form-buy-btn").click(function(){
        $('#pagseguro_token').val(PagSeguroDirectPayment.getSenderHash())
        $("#form-buy").addClass("wow fadeInUp animated");
        $("#form-buy").attr("style","visibility: visible; animation-name: fadeInUp;");
    });
</script>
@endsection