@extends('layouts.layout')

@section('menu-contato-class', 'menu-active')

@section('title', 'Contatos | ')

@section('conteudo')
    <!--==========================
        Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h1>Contatos</h1>
                <p>Entrem em contato conosco para ter mais informações.</p>
            </div>
            <div class="row contact-info">
                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Endereço</h3>
                        <address>Rua Pessêgo, 982, Macapá-AP</address>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Telefone</h3>
                        <p><a href="tel:+5596984058000">+55 96 98405 8000</a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:suporte@alexrodri.com.br">suporte@alexrodri.com.br</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d22569.78794875662!2d-51.08263836768244!3d0.09763847480227905!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xed822887f65855f0!2sAlexRodri%20Digital!5e0!3m2!1spt-BR!2sbr!4v1578076580020!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="container">
            <div class="form">
                <form action="{{ route('enviarcontato') }}" method="post" class="contactForm">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" value="{{ old('nome') }}" name="nome" class="form-control @error('nome') is-invalid @enderror" id="name" placeholder="Seu Nome">
                            @error('nome')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Seu Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" value="{{ old('conheceu') }}" name="conheceu" class="form-control @error('conheceu') is-invalid @enderror" id="name" placeholder="Como nos conheceu?">
                            @error('conheceu')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" value="{{ old('telefone') }}" class="form-control @error('telefone') is-invalid @enderror" name="telefone" id="telefone" placeholder="Seu Numero">
                            @error('telefone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ old('assunto') }}" class="form-control @error('assunto') is-invalid @enderror" name="assunto" id="assunto" placeholder="Assunto">
                        @error('assunto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea class="form-control @error('mensagem') is-invalid @enderror" name="mensagem" rows="5" placeholder="Mensagem">{{ old('mensagem') }}</textarea>
                        @error('mensagem')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="text-center"><button type="submit">Enviar</button></div>
                </form>
            </div>
            <br>
            <p>Mande sua mensagem de dúvida, agradecimento, reclamação, recomendação que nós leremos. Com seu email, voce ficará informado(a) sobre nossas novidades!</p>
        </div>
    </section><!-- #contact -->
@stop