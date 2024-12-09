<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DEPOSITO AVANTEL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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
            <a href="{{route('inicio')}}" class="navbar-brand px-lg-4 m-0">
            <img src="img/logo.jpg" alt="Logo" class="logo-img mr-2">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="{{route('inicio')}}" class="nav-item nav-link">Inicio</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Categorías</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="{{route('cervezas')}}" class="dropdown-item">Cervezas</a>
                            <a href="{{route('refrescos')}}" class="dropdown-item">Refrescos</a>
                            <a href="{{route('bebidas')}}" class="dropdown-item ">Otras bebidas</a>
                        </div>
                    </div>
                    <a href="{{route('compra')}}" class="nav-item nav-link active">Compra</a>
                    <a href="{{route('contacto')}}" class="nav-item nav-link active">Contacto</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">CONTACTO</h1>
            
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contacto Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">CONTACTOS</h4>
                <h1 class="display-7">¡Estamos aquí para ayudarte! Contáctanos y descubre todo lo que tenemos para ofrecerte.</h1>
            </div>
            <div class="row px-3 pb-2">
                <div class="col-sm-4 text-center mb-3">
                    <i class="fa fa-2x fa-map-marker-alt mb-3 text-primary"></i>
                    <h4 class="font-weight-bold">Dirección</h4>
                    <p>C. Los Ángeles S/N, Col Los Ángeles, 72680 San Francisco Ocotlán, Pue.</p>
                </div>
                <div class="col-sm-4 text-center mb-3">
                    <i class="fa fa-2x fa-phone-alt mb-3 text-primary"></i>
                    <h4 class="font-weight-bold">Telefono Celular</h4>
                    <p>22-11-98-51-37</p>
                </div>
                <div class="col-sm-4 text-center mb-3">
                    <i class="far fa-2x fa-envelope mb-3 text-primary"></i>
                    <h4 class="font-weight-bold">Correo</h4>
                    <p>depositoavantal.com</p>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Contact End -->


    
    <div class="container-fluid py-5">
    <div class="container">
        <div class="section-title text-center">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Encargados</h4>
            <h1 class="display-12">Jose Luis Muños</h1>
            <h1 class="display-12">Alexis Muños</h1>
        </div>
        <div class="row align-items-center">
            <!-- Mapa -->
            <div class="col-md-6 mb-4 mb-md-0">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.3331279325375!2d-98.2761209!3d19.1368899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc5a5f51a8fbd%3A0x939b6da16bb0fa77!2sAbarrotes%20Maravilla!5e0!3m2!1ses!2smx!4v1733162874489!5m2!1ses!2smx" 
                    width="100%" 
                    height="400" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <!-- Imagen -->
            <div class="col-md-6">
                <div class="position-relative" style="min-height: 400px;">
                    <img class="w-100 h-100" src="img/deposito.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- About End -->


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