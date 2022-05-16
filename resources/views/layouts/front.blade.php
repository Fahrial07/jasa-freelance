<!DOCTYPE html>
<html lang="{{ str_replace('-', '-', app()->getLocale()) }}">
    <head>

        @include('includes.landing.meta')

        <title>@yield('title') | SERVE</title>

        @stack('before-style')

        @include('includes.landing.style')

        @stack('after-style')


    </head>

    <body class="antialiased">
        <div class="relative">

            @include('includes.landing.header')

                {{-- @include('sweetalert::alert') --}}

                @yield('content')

            @include('includes.landing.footer')

         @stack('before-script')

        @include('includes.landing.script')

        @stack('after-script')

        {{-- modals --}}
        @include('components.modal.login')
        @include('components.modal.register')
        @include('components.modal.register-success')


        </div>
    </body>

</html>

