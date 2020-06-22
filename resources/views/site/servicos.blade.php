@extends('layout')

@section('menu-servicos-class', 'menu-has-children menu-active')
@section('menu-servicos-links')
<ul>
    <li><a href="#">Hospedagem cPanel</a></li>
    <li><a href="#">SEO</a></li>
    <li><a href="#">Inbound Marketing</a></li>
    <li><a href="#">Criação de Site</a></li>
    <li><a href="#">Social Media</a></li>
    <li><a href="#">Produção de Conteúdo</a></li>
    <li><a href="#">Videos</a></li>
    <li><a href="#">Email Marketing</a></li>
    <li><a href="#">Anúncios Patrocinados</a></li>
</ul>
@stop

@section('conteudo')
    <!--==========================
        Services Section
    ============================-->

    <section id="services">
        <div class="container">
            <div class="section-header">
                <h2>Serviços</h2>
                <p>Apresentamos aqui uma lista de serviços que disponibilizamos para você.</p>
            </div>
            <div class="row">
                
                <div class="col-lg-6">
                    <div class="box wow fadeInLeft">
                    <div class="icon"><i class="fa fa-file-code-o"></i></div>
                    <h4 class="title"><a href="">Criamos Sites</a></h4>
                    <p class="description">Ser encontrado na internet é essencial. Pensar na criação de sites não é olhar para o futuro, mas para o agora.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box wow fadeInLeft">
                    <div class="icon"><i class="fa fa-server"></i></div>
                    <h4 class="title"><a href="">Hospedagem cPanel</a></h4>
                    <p class="description">Um site precisa ser hospedado, uma hospedagem de qualidade faz toda a diferença.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box wow fadeInLeft">
                    <div class="icon"><i class="fa fa-align-left"></i></div>
                    <h4 class="title"><a href="">Produção de Conteúdo</a></h4>
                    <p class="description">Primeiro passo para conquistar credibilidade no mercado e garantir a conversão de novos clientes.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box wow fadeInRight">
                    <div class="icon"><i class="fa fa-line-chart"></i></div>
                    <h4 class="title"><a href="">SEO</a></h4>
                    <p class="description">Quando pessoas buscarem algo relacionado ao serviço ou produto oferecido pela sua empresa, as chances de chegar até seu site serão bem maiores.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="icon"><i class="fa fa-magnet"></i></div>
                    <h4 class="title"><a href="">Inbound Marketing</a></h4>
                    <p class="description">A produção de conteúdo relevante, a utilização de anúncios patrocinados, a criação de páginas para cadastro e o disparo de e-mail marketing são ferramentas de destaque na implantação do Inbound.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box wow fadeInRight" data-wow-delay="0.2s">
                    <div class="icon"><i class="fa fa-facebook"></i></div>
                    <h4 class="title"><a href="">Social Media</a></h4>
                    <p class="description">As mídias sociais são os locais perfeitos para reforçar o relacionamento com o público.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box wow fadeInRight" data-wow-delay="0.2s">
                    <div class="icon"><i class="fa fa-envelope"></i></div>
                    <h4 class="title"><a href="">Email Marketing</a></h4>
                    <p class="description">Não tenha dúvidas sobre a utilização do Email Marketing em sua estratégia digital! Esta é uma das ferramentas mais eficientes na conversão de novos clientes!</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box wow fadeInRight" data-wow-delay="0.2s">
                    <div class="icon"><i class="fa fa-video-camera"></i></div>
                    <h4 class="title"><a href="">Videos</a></h4>
                    <p class="description">Os videos são uma peça fundamental para todos os casos, então é nacessario faze-los.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box wow fadeInRight" data-wow-delay="0.2s">
                    <div class="icon"><i class="fa fa-google"></i></div>
                    <h4 class="title"><a href="">Anúncios Patrocinados</a></h4>
                    <p class="description">Como alternativa para uma divulgação de resultados rápidos o investimento em anúncios patrocinados atribuirá um alcance maior a sua marca na internet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #services -->
@stop