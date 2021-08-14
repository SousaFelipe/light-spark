@extends('super.sidenav')


@section('head-styles')
    <!--<link rel="stylesheet" href="{{ asset('css/pages/super.produtos.css') }}">-->
@endsection


@section('produtos', 'active')

@section('page-title')
    <i class="fas fa-cubes me-2"></i> <span class="text-dark fs-5">Produtos</span>
@endsection


@section('main-content')

@endsection



@section('page-scripts')
    <script src="{{ asset('js/src/components/Table.js') }}"></script>
@endsection
