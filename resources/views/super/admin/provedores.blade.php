@extends('super.frame')



@section('layout-styles')
    <link rel="stylesheet" href="{{ asset('css/pages/super.provedores.css') }}">
@endsection



@section('main-content-title', 'Clientes')
@section('main-content-subtitle', 'Com acesso ao HUB e à API')



@section('main-content')

    <div class="card bg-primary border-white">
        <div class="card-body">
            <div id="provedores" class="table">
                <div class="table-header bg-light"></div>
                <div class="table-body"></div>
            </div>
        </div>
        <div class="card-footer justify-end">
            <button type="button" class="btn btn-md btn-dark no-shadow">Novo</button>
        </div>
    </div>

    <div id="provedor-detalhes" class="super">
        <div class="super-content">
            <div class="super-header">
                <div class="super-header-section">
                    <span id="provedor-detalhes-titulo" class="super-title"></span>
                    <span id="provedor-detalhes-subtitulo" class="super-subtitle"> </span>
                </div>
                <button type="button" class="btn-close-dark" data-super-close="provedor-detalhes"><span class="icon-md icn-close"></span></button>
            </div>
            <div class="super-body">
                <div class="row mt-2">
                    <div class="col-4">
                        <div id="input-fantasia" class="form-input primary form-input-md">
                            <label for="fantasia">FANTASIA</label>
                            <input type="text" id="fantasia" class="form-control" disabled="true">
                        </div>
                    </div>
                    <div class="col-5">
                        <div id="input-titular" class="form-input primary form-input-md">
                            <label for="titular">TITULAR</label>
                            <input type="text" id="titular" class="form-control" disabled="true">
                        </div>
                    </div>
                    <div class="col-3">
                        <div id="input-ctt-titular" class="form-input primary form-input-md">
                            <label for="ctt-titular">CONTATO DO TITULAR</label>
                            <input type="text" id="ctt-titular" class="form-control" disabled="true">
                        </div>
                    </div>
                <div>
                <div class="row mt-2">
                    <div class="col-2">
                        <div id="input-cep" class="form-input primary form-input-md">
                            <label for="cep">CEP</label>
                            <input type="text" id="cep" class="form-control" disabled="true">
                        </div>
                    </div>
                    <div class="col-3">
                        <div id="input-cidade" class="form-input primary form-input-md">
                            <label for="cidade">CIDADE/UF</label>
                            <input type="text" id="cidade" class="form-control" disabled="true">
                        </div>
                    </div>
                    <div class="col-7">
                        <div id="input-logradouro" class="form-input primary form-input-md">
                            <label for="logradouro">ENDEREÇO</label>
                            <input type="text" id="logradouro" class="form-control" disabled="true">
                        </div>
                    </div>
                <div>
            </div>
        </div>
    </div>

@endsection



@section('page-scripts')
    <script src="{{ asset('js/src/components/Super.js') }}"></script>
    <script src="{{ asset('js/src/components/Table.js') }}"></script>
    <script src="{{ asset('js/src/pages/provedores.js') }}"></script>
@endsection
