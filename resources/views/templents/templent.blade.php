<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>AngoSearch</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">


            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="/" class="logo mr-auto"><img src="{{asset('assets/img/logo.png')}}" width="100%" alt=""
                    class="img-fluid"></a>            
            <div class="row mt-3">

                <div class="col-lg-12 mt-lg-0">

                    <form action="{{ route('search') }}" method="GET" class="">

                        <div class="form-row">
                            <div class="col-md-4 form-group">

                                <input type="date" name="data_emissao_inicio" id="data_emissao_inicio"
                                    class="form-control" placeholder="Data de Emissão (De)"
                                    data-msg="Porfavor insira data de emissão do BI!">
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-1 form-group text-center">
                                <label> Até</label>
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="date" name="data_emissao_fim" id="data_emissao_fim" class="form-control"
                                    placeholder="Data de Emissão (Até)"
                                    data-msg="Porfavor insira data de validade do BI!">
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-2 form-group">
                                <div class="text-center"><button type="submit"
                                        class="btn get-started-btn scrollto">Busca Rápida</button></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </header><!-- End Header -->

    <!-- ======= Main Section ======= -->
    <section class="layout-content">

        @yield('content')

    </section><!-- End #main section-->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container d-md-flex py-4">

            <div class="mr-md-auto text-center text-md-left">
                <div class="copyright">
                    &copy; Copyright 2024. All Rights Reserved
                </div>
                <div class="credits">
                    Developed by <a href="https://www.linkedin.com/in/tonilson-bartolomeu-260119161/">Jeremias
                        Dinzinga</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="https://www.facebook.com/home.php?_rdc=1&_rdr" class="facebook"><i
                        class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/jeremiasdinzinga/" class="instagram"><i
                        class="bx bxl-instagram"></i></a>
                <a href="https://github.com/Jeremias16Dinzinga/AngoSearch" class="google-plus"><i
                        class="bx bxl-github"></i></a>
                <a href="https://www.linkedin.com/in/tonilson-bartolomeu-260119161/" class="linkedin"><i
                        class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>