<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DEPOSITO AVANTEL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/bg.jpg" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="{{route('inicio')}}"class="navbar-brand px-lg-4 m-0">
            <img src="img/logo.jpg" alt="Logo" class="logo-img mr-2">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="{{route('inicio')}}"class="nav-item nav-link">Inicio</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Categorías</a>
                        <div class="dropdown-menu text-capitalize">
                        <a href="{{route('cervezas')}}" class="dropdown-item">Cervezas</a>
                            <a href="{{route('refrescos')}}" class="dropdown-item active">Refrescos</a>
                            <a href="{{route('bebidas')}}" class="dropdown-item">Otras bebidas</a>
                        </div>
                    </div>
                    <a href="{{route('compra')}}" class="nav-item nav-link active">Compra</a>
                    <a href="{{route('contacto')}}" class="nav-item nav-link">Contacto</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Refrescos en existencia</h1>
            
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Menu Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;"></h4>
                <h1 class="display-4">¡Explora los Refrescos Más Refrescantes: ¡Encuentra tu Favorito!</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="mb-5">Refrescos de sabores</h1>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-squares mb- mb-sm-0" src="img/r1.jpg" alt="">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Mundet Pet 600 ml</h4>
                            <h4>24 pzs $330.00</h4>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-squares mb- mb-sm-0" src="img/r2.jpg" alt="">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Fanta 600 ml</h4>
                            <h4>24 pzs $330.00</h4>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-squares mb- mb-sm-0" src="img/r3.jpg" alt="">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Sprite 600 ml</h4>
                            <h4>24 pzs $330.00</h4>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-squares mb- mb-sm-0" src="img/r4.jpg" alt="">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Squirt 2 L</h4>
                            <h4>8 pzs $236.00</h4>
                        </div>
                    </div>

                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-squares mb- mb-sm-0" src="img/r6.jpg" alt="">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Peñafiel Mineral 2 L</h4>
                            <h4>8 pzs $180.00</h4>
                        </div>
                    </div>

                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-squares mb- mb-sm-0" src="img/r5.jpg" alt="">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Jarro Sabores 2 L</h4>
                            <h4>8 pzs $170.00</h4>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <h1 class="mb-5">Coca-Cola tamaños</h1>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-squares mb- mb-sm-0" src="img/promas.jpg" alt="">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Retornable 2.5 L</h4>
                            <h4>8 pzs $255.00</h4>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-squares mb- mb-sm-0" src="img/promas3.jpg" alt="">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Vidrio 1.25 L</h4>
                            <h4>8 pzs $192.00</h4>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-squares mb-3 mb-sm-0" src="img/r7.jpg" alt="">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Platico 2 L</h4>
                            <h4>8 pzs $290.00</h4>
                        </div>
                    </div>

                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-squares mb-3 mb-sm-0" src="img/promas6.jpg" alt="">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Desechable 600 ml</h4>
                            <h4>24 pzs $285.00</h4>
                        </div>
                    </div>

                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-squares mb-3 mb-sm-0" src="img/r8.jpg" alt="">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Desechable 3 L</h4>
                            <h4>8 pzs $335.00</h4>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-squares mb-3 mb-sm-0" src="img/r9.jpg" alt="">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Coca-Cola Sabores 3 L</h4>
                            <h4>8 pzs $250.00</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->


   <!-- Footer Start -->
   <head>
    <style>
        .footer .row {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .footer .col-lg-3, .footer .col-md-6 {
            margin: 0 auto;
        }
    </style>
</head>
    <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
        <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Contactanos</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>C. Los Ángeles S/N, Col Los Ángeles, 72680 San Francisco Ocotlán, Pue.</p>
                <p><i class="fa fa-phone-alt mr-2"></i>22-11-98-51-37</p>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Horario de atención</h4>
                <div>
                    <h6 class="text-white text-uppercase">Lunes - Sabado</h6>
                    <p>8:00 AM - 7:30 PM</p>
                    <h6 class="text-white text-uppercase">Domingo</h6>
                    <p>9:00 PM - 5:00 PM</p>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>