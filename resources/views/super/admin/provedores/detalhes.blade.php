@extends('super.frame')



@section('layout-styles')
    <link rel="stylesheet" href="{{ asset('css/pages/super.provedores.css') }}">
@endsection



@section('frame-header', 'Clientes')



@section('breadcrumb-content')
    <nav class="breadcrumb">
        <ul>
            <li>
                <a href="{{ route('super.admin.provedores.index') }}">
                    <span class="icon icon-md icn-arrow-left text-brand"></span>
                </a>
            </li>
            <li> <a href="{{ route('super.admin.provedores.index') }}">Todos</a> </li>
            <li> Detalhes </li>
        </ul>
    </nav>
@endsection



@section('main-content')

    <input id="_id" type="hidden" value="{{ $provedor['id'] }}"/>

    <div class="flex-col align-center">
        <img src="{{ asset($provedor['avatar']) }}" alt="Avatar" class="img-lg rounded"/>
        <div class="flex-col align-center mt-1">
            <span class="text-center text-secondary fw-6 fs-2">{{ $provedor['nome_fantasia'] }}</span>
            <span class="text-center text-tertiary  fw-3 fs-4">{{ Format::cpf_cnpj($provedor['cnpj']) }}</span>
        </div>
    </div>

    <div class="flex-row ms-6 me-6">
        <div class="card mt-4">
            <div class="card-body">
                <div id="tokens" class="table ps-2 pe-2">
                    <div class="table-header"></div>
                    <div class="table-body"></div>
                </div>
            </div>
            <div class="card-footer justify-end">

            </div>
        </div>
    </div>

@endsection



@section('page-scripts')
    <script src="{{ asset('js/src/components/Table.js') }}"></script>
    <script src="{{ asset('js/src/components/Token.js') }}"></script>
    <script src="{{ asset('js/src/pages/provedores/detalhes.js') }}"></script>
@endsection
