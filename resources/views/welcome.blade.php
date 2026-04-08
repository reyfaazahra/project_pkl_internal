<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Examify</title>

    <link rel="icon" href="{{asset('assets/frontend/img/favicon.png') }}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/all.css') }}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/examify.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>

<body>

    @include('layouts.components-frontend.navbar')

    <!-- HERO (MAIN) -->
    <section class="hero_main">
        <div class="container">
            <div class="row align-items-center">

                <!-- LEFT -->
                <div class="col-lg-6">
                    <h1 class="hero-title">
                        Belajar Jadi Lebih Seru 🎯<br>
                        dengan Quiz Interaktif
                    </h1>

                    <p class="hero-desc">
                        Jawab soal, lihat timer berjalan, dan dapatkan skor secara real-time.
                        Belajar jadi lebih cepat, seru, dan gak membosankan.
                    </p>

                    <a href="{{ route('login') }}" class="btn_primary">
                        Mulai Sekarang
                    </a>
                </div>

                <!-- RIGHT -->
                <div class="col-lg-6">
                    <div class="quiz-box">

                        <div class="quiz-header">
                            <span>Soal 1/10</span>
                            <span>⏱ 00:10</span>
                        </div>

                        <h5 class="question">Berapa hasil dari 5 × 3 ?</h5>

                        <div class="option">A. 10</div>
                        <div class="option correct">B. 15</div>
                        <div class="option">C. 20</div>
                        <div class="option">D. 25</div>

                        <div class="progress-bar">
                            <div class="progress"></div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('layouts.components-frontend.footer')

    <!-- JS -->
    <script src="{{asset('assets/frontend/js/jquery-1.12.1.min.js') }}"></script>
    <script src="{{asset('assets/frontend/js/popper.min.js') }}"></script>
    <script src="{{asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('assets/frontend/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{asset('assets/frontend/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{asset('assets/frontend/js/slick.min.js') }}"></script>
    <script src="{{asset('assets/frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{asset('assets/frontend/js/waypoints.min.js') }}"></script>
    <script src="{{asset('assets/frontend/js/contact.js') }}"></script>
    <script src="{{asset('assets/frontend/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{asset('assets/frontend/js/jquery.form.js') }}"></script>
    <script src="{{asset('assets/frontend/js/jquery.validate.min.js') }}"></script>
    <script src="{{asset('assets/frontend/js/mail-script.js') }}"></script>
    <script src="{{asset('assets/frontend/js/custom.js') }}"></script>

</body>
</html>