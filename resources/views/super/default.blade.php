<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('includes.head')
    
    <body class="text-center" aria-live="polite" aria-atomic="true">

        @include('includes.toast')

        @yield('main-content')

        <form id="formLogout" action="{{ route('super.logout') }}" method="POST">
            @csrf
        </form>

        @include('includes.scripts')

    </body>
</html>
