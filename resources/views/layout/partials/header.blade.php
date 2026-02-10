<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- meta -->
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta name="author" content="rony">
    <meta name="csrf-token" content="">
    <meta property="og:image" content="assets/images/favicon.png">
    <meta property="og:site_name" content="Blog">
    <meta property="og:title" content="top business news - Blog">
    <meta property="og:url" content="https://blog.com">
    <meta property="og:type" content="article">
    <meta name="description"
        content="top business news blog.">
    <meta name="keywords"
        content="blog, business">
    <!-- Favicon -->
<link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

<!-- CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link rel="stylesheet" href="{{ asset('assets/css/flatpickr.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/lightgallery.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/intlTelInput.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/select2-bootstrap-5-theme.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>
<body>
<header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg p-0">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img src="assets/images/logo2.png" class="img-fluid" alt="Blog">
                    </a>
                    <div class="d-flex align-items-center d-block d-lg-none">
                        <div class="me-2">
                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#mobilemenuOffcanvas" aria-controls="mobilemenuOffcanvas">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto d-flex align-items-center">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{url('/')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('blog.index')}}">Blog</a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link" href="{{route('contact.index')}}">Contact</a>
                            </li>
                            <li class="nav-item">
                                <!-- Search Form -->
                                <form class="d-flex" action="/search" method="GET">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="query">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            

            <!-- mobile menu -->
            <div class="mobile_menu offcanvas offcanvas-start d-block d-lg-none" tabindex="-1" id="mobilemenuOffcanvas"
                aria-labelledby="mobilemenuOffcanvasLabel">
                <div class="offcanvas-header">
                    <div class="offcanvas-title" id="mobilemenuOffcanvasLabel">
                        <img src="assets/images/logo2.png" width="120" class="img-fluid" alt="Blog">
                    </div>
                    <button type="button" class="btn-close shadow-none opacity-100" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('blog.index')}}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact.index')}}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>