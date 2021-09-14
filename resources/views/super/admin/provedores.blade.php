@extends('super.frame')



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

    <div id="panel-detalhes" class="super-panel">

    </div>

@endsection



@section('page-scripts')
    <script src="{{ asset('js/src/components/Table.js') }}"></script>
    <script src="{{ asset('js/src/pages/provedores/provedores.js') }}"></script>
@endsection
