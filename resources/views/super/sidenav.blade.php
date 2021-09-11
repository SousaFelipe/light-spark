<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @section('title', Auth::user()->firstAndLastName())

    @section('head-styles')
        <link rel="stylesheet" href="{{ asset('css/layouts/sidenav.css') }}">
    @endsection

    @include('includes.head')

    <body class="text-center">

        @include('includes.toast')

        <div class="flex-row bg-secondary w-100 h-100">

            <nav class="sidenav">

                <div class="user-panel">
                    <div class="flex-row align-center">
                        <section class="img-sm-square bg-brand-4">
                            <img class="img-sm-square" src="{{ Auth::user()->avatar() }}" alt="{{ Auth::user()->firstName() }}">
                        </section>
                        <div class="user-panel-description">
                            <span class="text-primary fs-6 fw-7">{{ Auth::user()->firstAndLastName()  }}</span>
                            <span class="text-secondary fs-7 fw-5">Administrador</span>
                        </div>
                    </div>
                    <button type="button" class="btn btn-close bg-danger-4 no-shadow" onclick="app.form('formSignOut').submit()">
                        <span class="icon-md icn-exit"></span>
                    </button>
                </div>

                <ul>
                    <li class="nav-item @yield('dashboard', '')">
                        <a href="{{ route('super.admin.admin') }}"> <span class="nav-item-icon icon-md icn-dashboard"></span> Dashboard </a>
                    </li>
                    <li class="nav-item @yield('provedores', '')">
                        <a href="{{ route('super.admin.provedores') }}"> <span class="nav-item-icon icon-md icn-earth"></span> Clientes </a>
                    </li>
                    <li class="nav-item @yield('tokens', '')">
                        <a href="{{ route('super.admin.tokens') }}"> <span class="nav-item-icon icon-md icn-keys"></span> Tokens </a>
                    </li>
                    <li class="nav-item @yield('produtos', '')">
                        <a href="{{ route('super.admin.produtos') }}"> <span class="nav-item-icon icon-md icn-package-variant"></span> Produtos </a>
                    </li>
                </ul>

                <div id="notificacoes" class="p-1 mb-4 border-light radius-2">

                </div>
            </nav>

            <div class="main-container">
                <main class="main-content">

                    <div class="main-content-header">
                        <div class="main-content-header-section">
                            <span class="main-content-title"> @yield('main-content-title', '') </span>
                            <span class="main-content-subtitle"> @yield('main-content-subtitle', '') </span>
                        </div>
                    </div>


                    @yield('main-content')
                </main>
            </div>

        </div>

        <form id="formSignOut" action="{{ route('super.logout') }}" method="POST">
            @csrf
        </form>

        @include('includes.scripts')

        <script src="{{ asset('js/src/components/Request.js') }}"></script>

        @yield('page-scripts')

    </body>
</html>
