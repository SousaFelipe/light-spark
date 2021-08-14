@extends('super.sidenav')


@section('head-styles')
    <!--<link rel="stylesheet" href="{{ asset('css/pages/super.tokens.css') }}">-->
@endsection


@section('tokens', 'active')

@section('page-title')
    <i class="fas fa-key me-2"></i> <span class="text-dark fs-5">Tokens</span>
@endsection


@section('main-content')

@endsection



@section('page-scripts')
    <script src="{{ asset('js/src/components/Table.js') }}"></script>
@endsection
