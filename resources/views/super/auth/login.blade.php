@extends('super.default')


@section('title', 'Login')


@section('head-styles')
    <link rel="stylesheet" href="{{ asset('css/pages/super.login.css') }}">
@endsection


@section('main-content')

    <main class="form-signin">

        <form id="formSignIn" action="{{ route('super.enter') }}" method="POST">
            @csrf

            <img class="mb-3" src="{{ asset('images/brand/bootstrap-logo.svg') }}" alt="" width="72" height="57">

            <div class="form-floating mb-1">
                <input type="email" id="email" name="email" class="form-control" placeholder="seuemail@exemplo.com" required>
                <label for="email">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                <label for="password">Senha</label>
            </div>
            <div class="checkbox mt-3 mb-3">
                <label>
                    <input type="checkbox" name="remember" value="remember"> Lembrar de mim
                </label>
            </div>
        </form>

        <button id="btnEnter" type="button" class="w-100 btn btn-lg btn-primary" onclick="doEnter(this)">
            Entrar
        </button>
        <p class="mt-5 mb-3 text-muted">&copy; Ago 2021</p>

    </main>

@endsection


@section('template-scripts')
    <script src="{{ asset('js/src/components/Request.js') }}"></script>
    <script src="{{ asset('js/src/components/Toast.js') }}"></script>
    <script src="{{ asset('js/src/pages/super.login.js') }}"></script>
@endsection
