@extends('super.sidenav')


@section('head-styles')
    <link rel="stylesheet" href="{{ asset('css/pages/super.provedores.css') }}">
@endsection


@section('provedores', 'active')
@section('page-title', 'Provedores')


@section('main-content')

@endsection



@section('page-scripts')
    <script src="{{ asset('js/src/components/Table.js') }}"></script>
@endsection