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
