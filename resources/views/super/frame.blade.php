<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @section('head-styles')
        <link rel="stylesheet" href="{{ asset('css/layouts/frame.css') }}">
    @endsection

    @include('includes.head')

    <body>

        @include('includes.toast')

        <div class="main-container">
            <header class="frame-header">
                <span class="text-primary fs-2 fw-5">@yield('frame-header')</span>
            </header>

            <div class="frame-top">
                <div class="breadcrumb-content">
                    @yield('breadcrumb-content')
                </div>
                <section class="frame-actions">
                    @yield('frame-actions')
                </section>
            </div>

            <main class="main-content">
                @yield('main-content')
            </main>
        </div>

        @include('includes.scripts')

        <script src="{{ asset('js/src/components/Request.js') }}"></script>
        <script src="{{ asset('js/src/components/Modal.js') }}"></script>
        <script src="{{ asset('js/src/layouts/frame.js') }}"></script>

        @yield('page-scripts')

    </body>
</html>
