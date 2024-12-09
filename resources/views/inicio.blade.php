<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DEPOSITO - Deposito HTML Template</title>
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
                    <a href="{{route('inicio')}}" class="nav-item nav-link active">Inicio</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Categorías</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="{{route('cervezas')}}" class="dropdown-item">Cervezas</a>
                            <a href="{{route('refrescos')}}" class="dropdown-item">Refrescos</a>
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

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/font.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h3 class="display-1 text-white m-0">Refrescando tus momentos especiales</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/font1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h3 class="display-1 text-white m-0">Refrescando tus momentos especiales</h3>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    


     <!-- Offer Start -->
     <div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom">
        <div class="container py-5">
            <h1 class="display-3 text-primary mt-2">PROXIMAMENTE DESCUENTOS</h1>
            <h1 class="text-white mb-5">DICIEMBRE</h1>
            <h4 class="text-white font-weight-normal mb-4 pb-3">FIESTAS NAVIDEÑAS</h4>
            <form class="form-inline justify-content-center mb-4">
            
        </div>
    </div>
    <!-- Offer End -->

    <!-- Service Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Productos más vendidos</h4>
                <h1 class="display-6">"Liderando las ventas, impulsando tus momentos."</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/promas.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-truck service-icon"></i>Coca-Cola Retornable 2.5 L</h4>
                            <p class="m-0">Perfecta para familias o reuniones, ofreciendo un equilibrio entre tamaño y precio.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/promas2.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-truck service-icon"></i>Tecate Latón 473 ML</h4>
                            <p class="m-0">Ofrece una buena cantidad de producto por un costo accesible, atrayendo a consumidores frecuentes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/promas3.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-truck service-icon"></i>Coca-Cola Vidrio 1.25L</h4>
                            <p class="m-0">Es ampliamente distribuida, lo que facilita su adquisición en tiendas de conveniencia y supermercados.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/promas4.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-truck service-icon"></i>Volt Yellow 473 ml</h4>
                            <p class="m-0">Es comúnmente disponible en tiendas y a un precio competitivo en comparación con otras bebidas energéticas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/promas6.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-truck service-icon"></i>Coca-Cola Plastico 600 ml</h4>
                            <p class="m-0">Es ideal para consumo individual, disponible en la mayoría de las tiendas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/promas5.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-truck service-icon"></i>Modelo Latón 473 ml</h4>
                            <p class="m-0">Es popular tanto para consumo individual como para reuniones casuales, gracias a su empaque práctico y diseño atractivo.</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Service End -->


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