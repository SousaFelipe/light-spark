<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @section('title', Auth::user()->firstAndLastName())

    @include('includes.head')

    <body class="text-center" aria-live="polite" aria-atomic="true">

        @include('includes.toast')

        <div class="d-flex flex-row w-100 h-100">

            <div class="d-flex flex-column flex-shrink-0 bg-light border-end h-100 p-3" style="width: 220px;">
                <div class="d-flex flex-column align-items-center mb-3 link-dark text-decoration-none">
                    <div class="row flex-column align-items-center mb-2">
                        <img src="{{ asset(Auth::user()->avatar()) }}" alt="{{ Auth::user()->firstName() }}" class="rounded-circle">
                    </div>
                    <span class="fs-4">{{ Auth::user()->firstAndLastName() }}</span>
                    <span class="text-default fs-6"><small>{{ Auth::user()->email() }}</small></span>
                </div>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto text-start">
                    <li class="nav-item">
                        <a href="{{ route('super.admin.dashboard') }}" class="nav-link @yield('dashboard', '')">
                            <i class="fas fa-tachometer-alt me-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('super.admin.provedores') }}" class="nav-link @yield('provedores', '')">
                            <i class="fas fa-satellite-dish me-2"></i>
                            Provedores
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('super.admin.tokens') }}" class="nav-link @yield('tokens', '')">
                            <i class="fas fa-key me-2"></i>
                            Tokens
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('super.admin.produtos') }}" class="nav-link @yield('produtos', '')">
                            <i class="fas fa-cubes me-2"></i>
                            Produtos
                        </a>
                    </li>
                </ul>
                <hr>
                <div class="d-flex justify-content-center align-items-center text-center">
                    <span class="text-muted">&copy; Darth.io - Ago 2021</span>
                </div>
            </div>

            <div class="d-flex flex-column flex-grow-1">

                <header class="navbar border-bottom container-fluid align-items-center">
                    <div class="navbar-brand d-flex align-items-center">@yield('page-title')</div>
                    <nav class="navbar-nav">
                        <div class="nav-item text-nowrap">
                            <button class="btn btn-outline-light text-primary" onclick="app.form('formSignOut').submit()">
                                Sair
                                <i class="fas fa-sign-out-alt"></i>
                            </button>
                        </div>
                    </nav>
                </header>

                <main class="container w-100 h-100">
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
