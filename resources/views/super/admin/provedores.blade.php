@extends('super.sidenav')



@section('head-styles')
    <!--<link rel="stylesheet" href="{{ asset('css/pages/super.provedores.css') }}">-->
@endsection



@section('provedores', 'active')



@section('page-title')
    <i class="fas fa-satellite-dish me-2"></i> <span class="text-dark fs-5">Provedores</span>
@endsection



@section('main-content')

    <div class="row w-100 justify-content-center">
        <div class="col-sx-12 col-sm-11 col-md-10 col-lg-9">

            <div class="card mt-5 bg-light border-0">
                <div class="card-body">
                    <table id="provedores" class="table table-stripped">
                        <thead>
                            <tr></tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

@endsection



@section('page-scripts')
    <script src="{{ asset('js/src/components/Table.js') }}"></script>
    <script src="{{ asset('js/src/pages/super.provedores.js') }}"></script>
@endsection
