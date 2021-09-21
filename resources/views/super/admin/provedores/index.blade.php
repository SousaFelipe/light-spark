@extends('super.frame')



@section('layout-styles')
    <link rel="stylesheet" href="{{ asset('css/pages/super.provedores.css') }}">
@endsection



@section('frame-header', 'Clientes')



@section('breadcrumb-content')
    <nav class="breadcrumb">
        <ul>
            <li> <span class="icon icon-md icn-account-multiple"></span> </li>
            <li> <a href="{{ route('super.admin.provedores.index') }}">Todos</a> </li>
        </ul>
    </nav>
@endsection



@section('frame-actions')
    <button type="button" class="btn btn-md btn-brand no-shadow" onclick="frame.externals('novo-cliente-modal').modal(true).show()"> Novo Cliente </button>
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
        </div>
    </div>

@endsection



@section('page-scripts')
    <script src="{{ asset('js/src/components/Table.js') }}"></script>
    <script src="{{ asset('js/src/pages/provedores/index.js') }}"></script>
@endsection
