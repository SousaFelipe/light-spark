<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @section('title', Auth::user()->firstAndLastName())

    @section('head-styles')
        <link rel="stylesheet" href="{{ asset('css/layouts/sidenav.css') }}">
    @endsection

    @include('includes.head')

    <body class="text-center">

        <div class="flex-row bg-secondary w-100 h-100">

            <nav class="sidenav">

                <div class="nav-brand">
                    <span class="icon icon-md icn-light-on text-brand"></span>
                </div>

                <ul>
                    <li class="nav-item" data-nav-item="dashboard">
                        <span class="nav-item-icon icon-md icn-dashboard"></span>
                    </li>
                    <li class="nav-item" data-nav-item="provedores">
                        <span class="nav-item-icon icon-md icn-account-multiple"></span>
                    </li>
                    <li class="nav-item" data-nav-item="tokens">
                        <span class="nav-item-icon icon-md icn-keys"></span>
                    </li>
                    <li class="nav-item" data-nav-item="produtos">
                        <span class="nav-item-icon icon-md icn-package-variant"></span>
                    </li>
                </ul>

                <div id="notificacoes" class="p-1 mb-4 border-light radius-2">

                </div>
            </nav>

            <iframe id="main" width="100%" height="100%">
            </iframe>

            <div id="novo-cliente-modal" class="modal-content">
                <div class="modal modal-md">
                    <header class="modal-header">
                        <button type="button" class="btn-close end" data-modal-close="novo-cliente-modal">
                            <span class="icon icon-md icn-close"></span>
                        </button>
                    </header>
                    <div class="modal-body">
                    </div>
                    <footer class="modal-footer">
                    </footer>
                </div>
            </div>

        </div>

        <form id="formSignOut" action="{{ route('super.logout') }}" method="POST">
            @csrf
        </form>

        @include('includes.scripts')

        <script src="{{ asset('js/src/components/Request.js') }}"></script>
        <script src="{{ asset('js/src/layouts/sidenav.js') }}"></script>

        @yield('page-scripts')

    </body>
</html>
