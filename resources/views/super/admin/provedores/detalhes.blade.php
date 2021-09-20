@extends('super.frame')



@section('layout-styles')
    <link rel="stylesheet" href="{{ asset('css/pages/super.provedores.css') }}">
@endsection



@section('frame-header', 'Clientes')



@section('breadcrumb-content')
    <nav class="breadcrumb">
        <ul>
            <li> <span class="icon icon-md icn-arrow-left"></span> </li>
            <li> <span class="icon icon-md icn-account-multiple"></span> </li>
            <li> Todos </li>
            <li> Detalhes </li>
        </ul>
    </nav>
@endsection



@section('main-content')
    <div class="card">
        <div class="card-body">

        </div>
        <div class="card-footer justify-end">

        </div>
    </div>
@endsection



@section('page-scripts')
@endsection
