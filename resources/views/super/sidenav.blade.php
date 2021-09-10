<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @section('title', Auth::user()->firstAndLastName())

    @section('head-styles')
        <link rel="stylesheet" href="{{ asset('css/layouts/sidenav.css') }}">
    @endsection

    @include('includes.head')

    <body class="text-center">

        @include('includes.toast')

        <div class="flex-col align-center w-100 h-100">

            <header class="navbar bg-brand-4 border-bottom">

            </header>

            <main class="main-container">
                <div class="flex-row">

                    <nav class="sidenav">
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
                    </nav>

                    <div class="main-content">
                        @yield('main-content')
                    </div>

                </div>
            </main>

        </div>

        <form id="formSignOut" action="{{ route('super.logout') }}" method="POST">
            @csrf
        </form>

        @include('includes.scripts')

        <script src="{{ asset('js/src/components/Request.js') }}"></script>

        @yield('page-scripts')

    </body>
</html>
