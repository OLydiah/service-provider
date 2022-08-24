<!DOCTYPE html>
<html lang="en">
    <head>
    @include('inc-files.meta-links')
    </head>
    <body id="page-top" class=" bg-gray">
        <!-- Navigation-->
        @include('inc-files.inc-nav')
        
        <section class="cta">
            <div class="cta-content">
                <div class="container px-5">
                    <h3 class="text-white  mb-4">
                        Top-notch Developers with
                        <br />
                        Fortune500 portfolio worth every penny.
                    </h3>
                    <a class="btn btn-outline-light py-3 px-4 rounded-pill" href="https://startbootstrap.com/theme/new-age" target="_blank">Get In Touch</a>
                </div>
            </div>
        </section>
        <main>
            @yield('content')
        </main>
        <section class="bg-gradient-primary-to-secondary" id="download">
            <div class="container px-5">
                <h2 class="text-center text-white font-alt mb-4"><i class="bi-discord icon-feature"></i>  Join Our Discord!</h2>
                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                    <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="{{asset('assets/img/google-play-badge.svg')}}" alt="..." /></a>
                    <a href="#!"><img class="app-badge" src="{{asset('assets/img/app-store-badge.svg')}}" alt="..." /></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        @include('inc-files.inc-footer')

        <!-- Feedback Modal-->
        @include('inc-files.feedback-modal')

        @include('inc-files.footer-js')
        
    </body>
</html>
