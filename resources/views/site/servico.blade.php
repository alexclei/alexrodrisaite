@extends('layouts.layout')

@section('menu-servicos-class', 'menu-active')

@section('title', "$servico->titulo | Serviços | ")

@section('meta-blog')
  <meta itemprop="name" content="{{ $servico->titulo }} | Serviços | AlexRodri Digital">
  {{-- <meta itemprop="description" content="Descrição da página em menos de 200 caracteres."> --}}
  <meta itemprop="description" content="{{ $servico->resumo }}">
  <meta itemprop="image" content="{{ asset('storage/' . $servico->imagem) }}">

  <!-- Open Graph Facebook -->
  {{-- <meta property="fb:admins" content="100001921016756"> --}}
  <meta property="fb:app_id" content="1259129577759263">
  <meta property="og:title" content="{{ $servico->titulo }} | AlexRodri Digital">
  <meta property="og:description" content="{{ $servico->resumo }}">
  {{-- <meta property="og:description" content="Descrição da página em menos de 200 caracteres."/> --}}
  <meta property="og:url" content="{{ Request::url() }}">
  <meta property="og:site_name" content="AlexRodri Digital">
  <meta property="og:type" content="website">
  <meta property="og:image" content="{{ asset('storage/' . $servico->imagem) }}">

  <!-- Twitter -->
  <meta name="twitter:title" content="{{ $servico->titulo }} | AlexRodri Digital">
  <meta name="twitter:description" content="{{ $servico->resumo }}">
  {{-- <meta name="twitter:description" content="Descrição da página em menos de 200 caracteres."> --}}
  <meta name="twitter:url" content="{{ Request::url() }}">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:image" content="{{ asset('storage/' . $servico->imagem) }}">
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
        <h3>{{ $servico->resumo }}</h3>
      </div>
      <div class="row">
        <div class="col-12">
          {!! $servico->codigo !!}
        </div>
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-lg-3 text-center">
              <a class="btn btn-45off text-white" href="{{ route('servico_orcamento')}}">
                Peça já seu orçamento - {{ $servico->titulo }}
							</a>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-6">
              <br>
              <br>
              <br>
              <img src="{{ asset('storage/' . $servico->imagem) }}" width="100%" alt="">
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
                    <i class="ion-arrow-right-b"></i> <a
                      href="{{ Route('servicoshow', [$s->id, Str::slug($s->titulo)]) }}">{{ $s->titulo }}</a>
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
                $tag = explode(',', $servico->tag);
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
  {{-- <script type="text/javascript" src="{{ PagSeguro::getUrl()['javascript'] }}"></script> --}}
  <script>
    function sl() {
      $('#form-buy').show()
    }

    $("#form-buy-btn").click(function() {
      // $('#pagseguro_token').val(PagSeguroDirectPayment.getSenderHash())
      $("#form-buy").addClass("wow fadeInUp animated");
      $("#form-buy").attr("style", "visibility: visible; animation-name: fadeInUp;");
    });

  </script>
@endsection
