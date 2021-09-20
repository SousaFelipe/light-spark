@extends('super.frame')



@section('layout-styles')
    <link rel="stylesheet" href="{{ asset('css/pages/super.provedores.css') }}">
@endsection



@section('frame-header', 'Clientes')



@section('breadcrumb-content')
    <nav class="breadcrumb">
        <ul>
            <li> <span class="icon icon-md icn-account-multiple"></span> </li>
            <li> Todos </li>
        </ul>
    </nav>
@endsection



@section('main-content')

    <div class="card">
        <div class="card-body">
            <div id="provedores" class="table ps-2 pe-2">
                <div class="table-header"></div>
                <div class="table-body"></div>
            </div>
        </div>
        <div class="card-footer justify-end">
            <button type="button" class="btn btn-md btn-dark no-shadow">Novo</button>
        </div>
    </div>

    <div id="provedor-detalhes" class="super">
        <div class="super-content">
            <div class="super-body">
                <div class="card bg-primary">
                    <div class="card-header">
                        <span id="provedor-detalhes-titulo" class="title"></span>
                        <span id="provedor-detalhes-subtitulo" class="subtitle"> </span>
                        <button type="button" class="btn-close-dark end" data-super-close="provedor-detalhes"><span class="icon-md icn-close"></span></button>
                    </div>
                    <div class="card-body ps-2 pe-2">
                        <div class="row mt-1">
                            <div class="col-4">
                                <div id="input-fantasia" class="form-input border-bottom form-input-md">
                                    <label for="fantasia">FANTASIA</label>
                                    <input type="text" id="fantasia" class="form-control" disabled="true">
                                </div>
                            </div>
                            <div class="col-5">
                                <div id="input-titular" class="form-input border-bottom form-input-md">
                                    <label for="titular">TITULAR</label>
                                    <input type="text" id="titular" class="form-control" disabled="true">
                                </div>
                            </div>
                            <div class="col-3">
                                <div id="input-ctt-titular" class="form-input border-bottom form-input-md">
                                    <label for="ctt-titular">CONTATO DO TITULAR</label>
                                    <input type="text" id="ctt-titular" class="form-control" disabled="true">
                                </div>
                            </div>
                        <div>
                        <div class="row mt-2">
                            <div class="col-2">
                                <div id="input-cep" class="form-input border-bottom form-input-md">
                                    <label for="cep">CEP</label>
                                    <input type="text" id="cep" class="form-control" disabled="true">
                                </div>
                            </div>
                            <div class="col-3">
                                <div id="input-cidade" class="form-input border-bottom form-input-md">
                                    <label for="cidade">CIDADE/UF</label>
                                    <input type="text" id="cidade" class="form-control" disabled="true">
                                </div>
                            </div>
                            <div class="col-7">
                                <div id="input-logradouro" class="form-input border-bottom form-input-md">
                                    <label for="logradouro">ENDEREÇO</label>
                                    <input type="text" id="logradouro" class="form-control" disabled="true">
                                </div>
                            </div>
                        <div>
                        <div class="row mt-2">
                            <div class="col-3">
                                <div id="input-ctt1" class="form-input border-bottom form-input-md">
                                    <label for="ctt1">CONTATO 1</label>
                                    <input type="text" id="ctt1" class="form-control" disabled="true">
                                </div>
                            </div>
                            <div class="col-3">
                                <div id="input-ctt2" class="form-input border-bottom form-input-md">
                                    <label for="ctt2">CONTATO 2</label>
                                    <input type="text" id="ctt2" class="form-control" disabled="true">
                                </div>
                            </div>
                            <div class="col-3">
                                <div id="input-abertura" class="form-input border-bottom form-input-md">
                                    <label for="abertura">DATA ABERTURA</label>
                                    <input type="text" id="abertura" class="form-control" disabled="true">
                                </div>
                            </div>
                            <div class="col-3">
                                <div id="input-situacao" class="form-input border-bottom form-input-md">
                                    <label for="situacao">DATA SITUAÇÃO</label>
                                    <input type="text" id="situacao" class="form-control" disabled="true">
                                </div>
                            </div>
                        </div>
                        <span class="text-tertiary mt-3 fs-3">Tokens</span>
                        <div class="row mt-1">
                            <div id="tokens" class="table">
                                <div class="table-header bg-secondary"></div>
                                <div class="table-body"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="alert confirm warning">
        <div class="alert-content">
            <div class="alert-icon">
            </div>
            <div class="alert-question">

            </div>
            <div class="alert-footer">
                <button type="button" class="btn btn-md btn-light">Cancelar</button>
                <button type="button" class="btn btn-md btn-accent">Ativar</button>
            </div>
        </div>
    </div>

@endsection



@section('page-scripts')
    <script src="{{ asset('js/src/components/Super.js') }}"></script>
    <script src="{{ asset('js/src/components/Table.js') }}"></script>
    <script src="{{ asset('js/src/components/Token.js') }}"></script>
    <script src="{{ asset('js/src/pages/provedores.js') }}"></script>
@endsection
