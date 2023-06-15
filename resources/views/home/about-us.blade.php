<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Vurniture</title>
    
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <!-- box icons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- header section -->
    <header class="header">
        <div class="logo">
            <img src="{{ asset('img/logo.png') }}">
        </div>

        <ul class="navbar">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/categories') }}">Categories</a></li>
            <li><a href="{{ url('/about-us') }}">About Us</a></li>
        </ul>
        
        <div class="btn">
            <a href="#"><i class='bx bx-search' id="search-btn"></i></a>
            <a href="{{ url('/vurniture/cart') }}"><i class='bx bx-shopping-bag' id="shop-btn"></i></a>
            <a href="{{ url('/vurniture/login') }}"><i class='bx bx-user' id="user-btn"></i></a>
            <a href="#"><i class='bx bx-menu' id="menu-btn"></i></a>
        </div>
    </header>

    <!-- about section -->
    <section class="about-us">
        <div class="about">
            <h1>About Us</h1>
            <p><b>vurniture</b> is an e-commerce website that facilitates its users to shop for good quality used furniture. We realize that finding used furniture with good quality and at the best prices is quite difficult, so by creating this website, we hope that users can easily shop for used furniture while reducing the possibility of increasing the amount of furniture waste.</p>
        </div>

        <div class="our-team">
            <div class="team">
                <h1>Our Team</h1>
            </div>
    
            <div class="members">
                <div class="member">
                    <img src="img/admin-profile.jpeg">
                    <h3>Annisa Isaura Alfiany</h3>
                    <h4>Web Developer</h4>
                    <div class="ct-btn">
                        <a href="https://instagram.com/annisaisaura"><i class='bx bxl-instagram' id="ig-btn"></i></a>
                        <a href="https://wa.me/6288234108675"><i class='bx bxl-whatsapp' id="wa-btn"></i></a>
                        <a href="https://www.linkedin.com/in/annisaisaura"><i class='bx bxl-linkedin' id="li-btn"></i></a>
                    </div>
                </div>

                <div class="member">
                    <img src="img/admin-profile.jpeg">
                    <h3>M. Farid Fatchur Rohmad</h3>
                    <h4>Web Developer</h4>
                    <div class="ct-btn">
                        <a href="https://instagram.com/faridfahturrahman"><i class='bx bxl-instagram' id="ig-btn"></i></a>
                        <a href="https://wa.me/6287853336578"><i class='bx bxl-whatsapp' id="wa-btn"></i></a>
                        <a href="https://www.linkedin.com/in/faridfatchur"><i class='bx bxl-linkedin' id="li-btn"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- custom js -->
    <script src="js/script.js"></script>
</body>
</html>