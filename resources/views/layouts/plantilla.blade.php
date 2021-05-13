<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>iPortfolio Bootstrap Template - Index</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/venobox/venobox.css" rel="stylesheet">
    <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="vendor/aos/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: iPortfolio - v1.3.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="img/profile-img.png" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="{{ route('welcome') }}">Green Campus</a></h1>
                <div class="social-links mt-3 text-center">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>

            <nav class="nav-menu">
                <ul>
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li><a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>
                                    <span>Ingresar</span></a></li>
                        @endif

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}"><i class="far fa-address-card"></i>
                                    <span>Registro</span></a></li>
                        @endif
                        <li class="active"><a href="{{ route('welcome') }}"><i class="bx bx-home"></i>
                                <span>Inicio</span></a></li>
                        <li><a href="#about"><i class="bx bx-badge-check"></i> <span>Introducción</span></a></li>
                        <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resumen</span></a></li>
                        <li><a href="#nosotros"><i class="fas fa-users"></i></i> <span>Nosotros</span></a></li>
                        <li><a href="#contact"><i class="bx bx-envelope"></i> Contacto</a></li>
                    @else
                        <li class="nav-item dropdown navbar-dark">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> <i
                                    class="far fa-user"></i>
                                <span>{{ Auth::user()->name }} </span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-dark"
                                aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('home') }}"><i class="fas fa-chart-line"></i>
                                    <span>Dashboard</span></a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> <span>{{ __('Logout') }}</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                        <li class="active"><a href="{{ route('welcome') }}"><i class="bx bx-home"></i>
                                <span>Inicio</span></a></li>
                        <li class="active"><a href="{{ route('devices.index') }}"><i class="fas fa-mobile-alt"></i>
                                <span>Dispositivos</span></a></li>
                        <li class="active"><a href="{{ route('consumptions.index') }}"><i class="far fa-chart-bar"></i>
                                <span>Reportes</span></a></li>
                    @endguest
                    <!-- Authentication Links -->



                </ul>
            </nav><!-- .nav-menu -->
            <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

        </div>
    </header><!-- End Header -->


    @yield('content')



    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>iPortfolio</span></strong>
            </div>

        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="vendor/php-email-form/validate.js"></script>
    <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="vendor/counterup/counterup.min.js"></script>
    <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="vendor/venobox/venobox.min.js"></script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/typed.js/typed.min.js"></script>
    <script src="vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="js/main.js"></script>

</body>

</html>
