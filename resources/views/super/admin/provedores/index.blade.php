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
    <button type="button" class="btn btn-md btn-brand no-shadow" onclick="frame.externals('spark-md-modal').modal(true).show()"> Novo Cliente </button>
@endsection



@section('main-content')

    <div class="card">
        <div class="card-body ms-2 me-2">
            <table id="provedores">
                <thead>
                    <tr>
                        <th>CNPJ</th>
                        <th>RAZÃO</th>
                        <th>ENDEREÇO</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

@endsection



@section('page-scripts')
    <script src="{{ asset('js/src/components/Table.js') }}"></script>
    <script src="{{ asset('js/src/pages/provedores/index.js') }}"></script>
@endsection
