@extends('super.sidenav')



@section('provedores', 'active')



@section('main-content')

    <div class="card bg-primary">
        <div class="card-header">
            <span class="title">Clientes</span>
            <span class="subtitle">Provedores com token ativo</span>
        </div>
        <div class="card-body">
            <table id="provedores" class="table">
                <thead class="bg-light">
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

@endsection



@section('page-scripts')
    <script src="{{ asset('js/src/components/Table.js') }}"></script>
    <script src="{{ asset('js/src/pages/super.provedores.js') }}"></script>
@endsection
