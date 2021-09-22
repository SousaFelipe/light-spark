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

            <div id="spark-md-modal" class="modal-content">
                <div class="modal modal-md">
                    <header class="modal-header">
                        <button type="button" class="btn-close end" data-modal-close="spark-md-modal">
                            <span class="icon icon-md icn-close"></span>
                        </button>
                    </header>
                    <div class="modal-body">
                    </div>
                    <footer class="modal-footer">
                    </footer>
                </div>
            </div>

            <div id="question-spark-md" class="question-content">
                <!---->
                <div id="question-spark-md-modal" class="question">
                    <div class="question-body">
                        <div id="question-spark-md-img" class="mt-2 mb-2"></div>
                        <span id="question-spark-md-question" class="text-primary text-center fs-3 fw-2"></span>
                        <span id="question-spark-md-explain" class="text-tertiary text-center fs-5 mt-1"></span>
                    </div>
                    <div class="question-footer">
                        <button id="question-spark-md-cancel" type="button" class="btn btn-md btn-default no-shadow">Cancelar</button>
                        <button id="question-spark-md-confirm" type="button" class="btn btn-md">Confirmar</button>
                    </div>
                </div>
                <!---->
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
