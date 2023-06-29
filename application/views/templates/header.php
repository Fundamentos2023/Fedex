<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fedex</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <!-- <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->
    <link href="<?php echo base_url('assets/plantilla/lib/owlcarousel/assets/owl.carousel.min.css') ?>"
        rel="stylesheet">
    <link href="<?php echo base_url('assets/plantilla/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') ?>"
        rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url('assets/plantilla/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url('assets/plantilla/css/style.css') ?>" rel="stylesheet">

    <!-- Google Maps API -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFOc9qByFkUoSoqGntXjhz2PD5GGRpITM&libraries=places&callback=initMap"></script>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <img src="<?php echo base_url('assets/fedex.png') ?>" alt="fedex logo" width="165">
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?php echo base_url('assets/plantilla/img/user.jpg') ?>" alt=""
                            style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="<?php echo site_url('welcome') ?>" class="nav-item nav-link active">
                        <i class="fa fa-tachometer-alt me-2"></i>
                        Dashboard
                    </a>
                    <a href="<?php echo site_url('clientes') ?>" class="nav-item nav-link">
                        <i class='fas fa-user me-2'></i>
                        Clientes
                    </a>
                    <a href="<?php echo site_url('pedidos') ?>" class="nav-item nav-link">
                        <i class='fas fa-box me-2'></i>
                        Pedidos
                    </a>
                    <a href="<?php echo site_url('sucursales') ?>" class="nav-item nav-link">
                        <i class='fas fa-store me-2'></i>
                        Sucursales
                    </a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class='fas fa-truck-moving me-2'></i>
                            Envios
                        </a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="<?php echo site_url('envios/nuevoEnvio') ?>" class="dropdown-item">Nuevo envío</a>
                            <a href="<?php echo site_url('envios/index') ?>" class="dropdown-item">Listado de
                                envíos</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->