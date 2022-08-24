<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    @include('inc-files.meta-links')
    </head>
    <body id="page-top" class=" bg-gray">
        <!-- Navigation-->
        @include('inc-files.inc-nav')
        
        <main>
            @yield('content')
        </main>
        <!-- Footer-->
        @include('inc-files.inc-footer')

        <!-- Feedback Modal-->
        @include('inc-files.feedback-modal')

        @include('inc-files.footer-js')
        
    </body>
</html>
