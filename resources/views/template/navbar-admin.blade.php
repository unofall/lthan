<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Blogger</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!--
        CSS
        ============================================= -->
    <link rel="stylesheet" href={{ asset('templates/css/linearicons.css') }}>
    <link rel="stylesheet" href={{ asset('templates/css/font-awesome.min.css') }}>
    <link rel="stylesheet" href={{ asset('templates/css/bootstrap.css') }}>
    <link rel="stylesheet" href={{ asset('templates/css/owl.carousel.css') }}>
    <link rel="stylesheet" href={{ asset('templates/css/main.css') }}>

    
</head>

<body>

    <!-- Start Header Area -->
    <header class="default-header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('templates/img/logo.png') }}" alt="Logo" height="30">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#news">News</a></li>
                        <li class="nav-item"><a class="nav-link" href="#travel">Travel</a></li>
                        <li class="nav-item"><a class="nav-link" href="#fashion">Fashion</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>

                        <!-- Dropdown Menu -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Pages
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/travel">Travel</a></li>
                                <li><a class="dropdown-item" href="/topic">Topic</a></li>
                                {{-- <li><a class="dropdown-item" href="search.html">Search</a></li>
                                <li><a class="dropdown-item" href="archive.html">Archive</a></li>
                                <li><a class="dropdown-item" href="generic.html">Generic</a></li>
                                <li><a class="dropdown-item" href="elements.html">Elements</a></li> --}}
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <!-- End Header Area -->



    <div class="container-fluid pb-5">
        @yield('content')
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
