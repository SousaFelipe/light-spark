@extends('super.default')


@section('title', 'Login')


@section('head-styles')
    <link rel="stylesheet" href="{{ asset('css/pages/super.login.css') }}">
@endsection


@section('main-content')

    <main class="form-signin">

        <form id="formSignIn" action="{{ route('super.enter') }}" method="POST">
            @csrf

            <span class="text-center fs-1 fw-6 mb-1">Bem-vindo de volta!</span>

            <div class="input-group shadow-1">
                <div id="input-email" class="form-input white form-input-lg first-of-group">
                    <label for="email">EMAIL</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="seu@email.com" required>
                </div>
                <div id="input-password" class="form-input white form-input-lg last-of-group">
                    <label for="password">SENHA</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="********" required>
                </div>
            </div>

            <div class="checkbox text-center mt-3 mb-3">
                <label>
                    <input type="checkbox" name="remember" value="remember"> Lembrar de mim
                </label>
            </div>
        </form>

        <button id="btnEnter" type="button" class="btn btn-lg btn-brand w-100 is-loading" onclick="login(this)">
            Entrar
        </button>

        <p class="mt-5 mb-3 text-center text-tertiary">&copy; Ago 2021</p>

    </main>

@endsection


@section('template-scripts')
    <script src="{{ asset('js/src/components/Request.js') }}"></script>
    <script src="{{ asset('js/src/components/Toast.js') }}"></script>
    <script src="{{ asset('js/src/pages/super.login.js') }}"></script>
@endsection
