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
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Formulario de compra</h1>
            
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Formulario de Compra Start -->
<div class="container mt-5">
<div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Registra tu pedido</h4>
            </div>
            </div>

    <form action="{{ route('procesar') }}" method="POST" class="p-4 bg-light rounded">
        @csrf <!-- Token de seguridad en Laravel -->
        <table>
        <!-- Información Personal -->
        <div class="form-group">
            <label for="nombre">Nombre Completo</label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Tu nombre completo" required>
        </div>

        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Tu correo electrónico" required>
        </div>

        <!-- Dirección -->
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <textarea name="direccion" id="direccion" class="form-control" rows="3" placeholder="Tu dirección de envío" required></textarea>
        </div>

        <div class="form-group">
            <label for="ciudad">Ciudad</label>
            <input type="text" name="ciudad" id="ciudad" class="form-control" placeholder="Tu ciudad" required>
        </div>

        <div class="form-group">
            <label for="codigo_postal">Código Postal</label>
            <input type="text" name="codigo_postal" id="codigo_postal" class="form-control" placeholder="Tu código postal" required>
        </div>

        <!-- Método de Pago -->
        <div class="form-group">
            <label for="metodo_pago">Método de Pago</label>
            <select name="metodo_pago" id="metodo_pago" class="form-control" required>
                <option value="tarjeta">Tarjeta de Crédito/Débito</option>
                <option value="paypal">PayPal</option>
                <option value="efectivo">Pago en Efectivo</option>
            </select>
        </div>

        <div class="form-group">
            <label for="numero_tarjeta">Número de Tarjeta</label>
            <input type="text" name="numero_tarjeta" id="numero_tarjeta" class="form-control" placeholder="Ingresa tu número de tarjeta" required>
        </div>

        <!-- Resumen del Pedido -->
        <div class="form-group">
            <label for="resumen">Resumen del Pedido</label>
            <textarea name="resumen" id="resumen" class="form-control" rows="3" placeholder="Detalles de tu pedido" readonly></textarea>
        </div>

        <!-- Botón de Envío -->
        <button type="submit" class="btn btn-primary btn-block">Finalizar Compra</button>
        </table>

</div>
<!-- Formulario de Compra End -->


    


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