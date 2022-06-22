<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>News 24 - Free News Website Templates</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap Ecommerce Template" name="keywords">
        <meta content="Bootstrap Ecommerce Template Free Download" name="description">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Favicon -->
        <link href="{{asset('img/favicon.ico')}}" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{asset('lib/slick/slick.css')}}" rel="stylesheet">
        <link href="{{asset('lib/slick/slick-theme.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
    </head>

    <body>
        <!-- Top Header Start -->
    @include('frontend.includes.TopHeader')
        <!-- Top Header End -->


        <!-- Header Start -->


    @include('frontend.includes.header')

        <!-- Header End -->


    @yield('content')


        <!-- Footer Start -->
        @include('frontend.includes.footer')
        <!-- Footer End -->


        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Bản quyền &copy; <a href="https://htmlcodex.com">HTML Codex</a>. Đã đăng ký Bản quyền</p>
                    </div>

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <div class="col-md-6 template-by">
                        <p>Mẫu của <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->


        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


        <!-- JavaScript Libraries -->
        {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> --}}
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('lib/slick/slick.min.js')}}"></script>
        <!-- Template Javascript -->
        <script src="{{asset('js/main.js')}}"></script>

        <script type="text/javascript" charset="utf-8">
            $.ajaxSetup({
                 headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     }
                });
        </script>
    </body>
</html>
