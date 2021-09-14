<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @section('head-styles')
        <link rel="stylesheet" href="{{ asset('css/layouts/frame.css') }}">
    @endsection

    @include('includes.head')

    <body>

        @include('includes.toast')

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

        @include('includes.scripts')

        <script src="{{ asset('js/src/components/Request.js') }}"></script>

        @yield('page-scripts')

    </body>
</html>
