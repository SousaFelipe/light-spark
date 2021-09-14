@extends('super.frame')



@section('main-content-title', 'Tokens')



@section('main-content')

    <div class="card bg-primary border-white">

        <div class="card-body">
            <div id="tokens" class="table">
                <div class="table-header bg-light"></div>
                <div class="table-body"></div>
            </div>
        </div>
        <div class="card-footer justify-end">
            <button type="button" class="btn btn-md btn-dark no-shadow">Novo</button>
        </div>
    </div>

@endsection



@section('page-scripts')
    <script src="{{ asset('js/src/components/Table.js') }}"></script>
    <script src="{{ asset('js/src/pages/super.tokens.js') }}"></script>
@endsection
