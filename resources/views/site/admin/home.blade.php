@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Banners</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Portfólio</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#Cat</th>
                                    <th scope="col">Titulo</th>
                                    <th scope="col" colspan="2">Views</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Web</th>
                                    <td>Site AlexRodri</td>
                                    <td>3567</td>
                                    <td class="text-right">
                                        <a class="btn btn-success" href="#"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-danger" href="#"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Mensagens</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Assunto</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Otto</td>
                                    <td>Quero uma consultora sobre ti na minha empresa</td>
                                    <td>
                                        <div class="alert alert-success" role="alert">
                                            Visto
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Posts</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#Cat</th>
                                    <th scope="col">Titulo</th>
                                    <th scope="col" colspan="2">Views</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Web</th>
                                    <td>Quero uma consultora sobre ti na minha empresa</td>
                                    <td>435</td>
                                    <td class="text-right">
                                        <a class="btn btn-success" href="#"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-danger" href="#"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
