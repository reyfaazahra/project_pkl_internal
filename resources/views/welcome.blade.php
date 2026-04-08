<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Examify</title>
    <link rel="icon" href="{{asset('assets/frontend/img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.min.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/all.css') }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/themify-icons.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/magnific-popup.css') }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/slick.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/examify.css') }}">

</head>

<body>
    <!--::header part start::-->
   @include('layouts.components-frontend.navbar')
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner_text">
                    <h1>Quiz Online,<br>Lebih Seru & Cepat</h1>
                    <p>
                        Platform kuis dan ujian online buat siswa.  
                        Simpel, cepat, dan fokus ke hasil.
                    </p>

                    <div class="banner_btn">
                        <a href="{{ route('login') }}" class="btn_primary">
                            Mulai Quiz
                        </a>
                    </div>
                </div>
            </div>

            <div class="feature-cards">
    <div class="feature-card">
        <span>⚡</span>
        <p>Cepat</p>
    </div>
    <div class="feature-card">
        <span>🎯</span>
        <p>Akurat</p>
    </div>
    <div class="feature-card">
        <span>📊</span>
        <p>Nilai Otomatis</p>
    </div>
</div>

        </div>
    </div>
</section>

    <!-- banner part start-->

    <!-- product list start-->
    
    <!-- product list end-->


    <!-- trending item start-->
   
    <!-- trending item end-->

    <!-- client review part here -->
   
    <!-- client review part end -->


    <!-- feature part here -->
    
    <!-- feature part end -->

    <!-- subscribe part here -->

    <!-- subscribe part end -->

    <!--::footer_part start::-->
    @include('layouts.components-frontend.footer');
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="{{asset('assets/frontend/js/jquery-1.12.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{asset('assets/frontend/js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <!-- magnific popup js -->
    <script src="{{asset('assets/frontend/js/jquery.magnific-popup.js') }}"></script>
    <!-- carousel js -->
    <script src="{{asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{asset('assets/frontend/js/jquery.nice-select.min.js') }}"></script>
    <!-- slick js -->
    <script src="{{asset('assets/frontend/js/slick.min.js') }}"></script>
    <script src="{{asset('assets/frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{asset('assets/frontend/js/waypoints.min.js') }}"></script>
    <script src="{{asset('assets/frontend/js/contact.js') }}"></script>
    <script src="{{asset('assets/frontend/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{asset('assets/frontend/js/jquery.form.js') }}"></script>
    <script src="{{asset('assets/frontend/js/jquery.validate.min.js') }}"></script>
    <script src="{{asset('assets/frontend/js/mail-script.js') }}"></script>
    <!-- custom js -->
    <script src="{{asset('assets/frontend/js/custom.js') }}"></script>
    
</body>

</html>