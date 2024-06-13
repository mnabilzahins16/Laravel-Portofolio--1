<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nabil - Portofolio</title>
    <link rel="website icon" type="png" href="../assets/img/website-icons.png">

    <!-- My Style -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- My Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">

    <!-- Icons With Feathers Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>

    <!-- Navbar Start -->
    <nav class="navbar">
        <a href="/" class="navbar-logo"><span>My</span> Portopolio</a>

        <div class="navbar-nav">
            <a href="/">Home</a>
            <a href="/about">About Me</a>
            <a href="/porto">Portofolio</a>
        </div>
        <div class="navbar-extra">
            <a href="https://www.instagram.com/kirianwhite_cos" id="instagram"><i data-feather="instagram"></i></a>
            <a href="https://github.com/nabilzs" id="github"><i data-feather="github"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Section Start -->
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <!-- About Section End -->
        <!-- Start -->
        @yield('content')
        <!-- End -->
    <!-- Hobby Section Start -->
    <!-- Hobby Section End -->

    <!-- portofolio Section Start -->
    <!-- portofolio Section End -->

    <!-- Footer Start -->
    <footer>
        <div class="sosials">
            <a href="https://www.instagram.com/kirianwhite_cos"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
            <a href="#"><i data-feather="facebook"></i></a>
            <a href="#"><i data-feather="mail"></i></a>
            <a href="https://github.com/nabilzs"><i data-feather="github"></i></a>
        </div>

        <div class="links">
            <a href="/">Home</a>
            <a href="/about">About Me</a>
            <a href="/porto">Portofolio</a>
        </div>

        <div class="credit">
            <p>Created by <a href="/">M.NabilZahinSiddiq</a>. | &copy; 2023.</p>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- My Icons -->
    <script>feather.replace();</script>

    <!-- My Javascript -->
    <script src="../assets/js/script.js"></script>
</body>
</html>