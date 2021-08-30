<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('includes.head')

    <body>

        @include('includes.toast')



        <form id="formLogout" class="align-self-center" action="{{ route('super.logout') }}" method="POST">
            @csrf
        </form>

        @include('includes.scripts')

    </body>
</html>
