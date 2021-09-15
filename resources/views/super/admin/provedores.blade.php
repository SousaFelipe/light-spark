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
            <hr class="light">
            <div class="super-body">

            </div>
        </div>
    </div>

@endsection



@section('page-scripts')
    <script src="{{ asset('js/src/components/Super.js') }}"></script>
    <script src="{{ asset('js/src/components/Table.js') }}"></script>
    <script src="{{ asset('js/src/pages/provedores.js') }}"></script>
@endsection
