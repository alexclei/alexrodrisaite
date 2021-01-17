@extends('layouts.layout')

@section('menu-servicos-class', 'menu-active')

@section('title', 'Serviços | ')

@section('conteudo')
    <!--==========================
        Services Section
    ============================-->

    <section id="services" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h1>Serviços</h1>
                <p>Apresentamos aqui uma lista de serviços que disponibilizamos para você.</p>
            </div>
            <div class="row grid">
                <div class="col-lg-6 grid-sizer"></div>
                @foreach ($servicos as $s)
                <div class="col-lg-6 grid-item">
                    <div class="box wow fadeInLeft">
                        <div class="icon"><i class="{{ $s->icon }}"></i></div>
                        <h2 class="title"><a href="{{ route('servicoshow',[$s->id, Str::slug($s->titulo)]) }}">{{ $s->titulo }}</a></h2>
                        <p class="description">{{ $s->resumo }}</p>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-6 grid-item">
                    <div class="box wow fadeInLeft">
                        <div class="icon"><i class="fa fa-file-code-o"></i></div>
                        <h2 class="title"><a href="">Criamos Sites</a></h2>
                        <p class="description">Ser encontrado na internet é essencial. Pensar na criação de sites não é olhar para o futuro, mas para o agora.</p>
                    </div>
                </div>
                <div class="col-lg-6 grid-item">
                    <div class="box wow fadeInLeft">
                        <div class="icon"><i class="fa fa-server"></i></div>
                        <h2 class="title"><a target="_blank" href="https://painel.alexrodri.com.br/cart.php?a=add&pid=1">Hospedagem de Site</a></h2>
                        <p class="description">Um site precisa ser hospedado, uma hospedagem de qualidade faz toda a diferença.</p>
                    </div>
                </div>
                <div class="col-lg-6 grid-item">
                    <div class="box wow fadeInLeft">
                        <div class="icon"><i class="fa fa-align-left"></i></div>
                        <h2 class="title"><a href="">Produção de Conteúdo</a></h2>
                        <p class="description">Primeiro passo para conquistar credibilidade no mercado e garantir a conversão de novos clientes.</p>
                    </div>
                </div>
                <div class="col-lg-6 grid-item">
                    <div class="box wow fadeInRight">
                        <div class="icon"><i class="fa fa-line-chart"></i></div>
                        <h2 class="title"><a href="">SEO</a></h2>
                        <p class="description">Quando pessoas buscarem algo relacionado ao serviço ou produto oferecido pela sua empresa, as chances de chegar até seu site serão bem maiores.</p>
                    </div>
                </div>
                <div class="col-lg-6 grid-item">
                    <div class="box wow fadeInLeft">
                        <div class="icon"><i class="fa fa-magnet"></i></div>
                        <h2 class="title"><a href="">Inbound Marketing</a></h2>
                        <p class="description">A produção de conteúdo relevante, a utilização de anúncios patrocinados, a criação de páginas para cadastro e o disparo de e-mail marketing são ferramentas de destaque na implantação do Inbound.</p>
                    </div>
                </div>
                <div class="col-lg-6 grid-item">
                    <div class="box wow fadeInRight">
                        <div class="icon"><i class="fa fa-facebook"></i></div>
                        <h2 class="title"><a href="">Social Media</a></h2>
                        <p class="description">As mídias sociais são os locais perfeitos para reforçar o relacionamento com o público.</p>
                    </div>
                </div>
                <div class="col-lg-6 grid-item">
                    <div class="box wow fadeInRight">
                        <div class="icon"><i class="fa fa-envelope"></i></div>
                        <h2 class="title"><a href="">Email Marketing</a></h2>
                        <p class="description">Não tenha dúvidas sobre a utilização do Email Marketing em sua estratégia digital! Esta é uma das ferramentas mais eficientes na conversão de novos clientes!</p>
                    </div>
                </div>
                <div class="col-lg-6 grid-item">
                    <div class="box wow fadeInRight">
                        <div class="icon"><i class="fa fa-video-camera"></i></div>
                        <h2 class="title"><a href="">Videos</a></h2>
                        <p class="description">Os videos são uma peça fundamental para todos os casos, então é nacessario faze-los.</p>
                    </div>
                </div>
                <div class="col-lg-6 grid-item">
                    <div class="box wow fadeInRight">
                    <div class="icon"><i class="fa fa-google"></i></div>
                    <h2 class="title"><a href="">Anúncios Patrocinados</a></h2>
                    <p class="description">Como alternativa para uma divulgação de resultados rápidos o investimento em anúncios patrocinados atribuirá um alcance maior a sua marca na internet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #services -->
@stop