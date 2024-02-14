<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>M-Puss</title>
    <link rel="stylesheet" href="{{ asset('') }}assets/css/style.css">
</head>
<body>
{{-- Header Section Start --}}
<header class="header">
    <div class="header-1">
        <a href="" class="logo"><i class="fas fa-book"></i> M-Puss </a>
        {{-- Search Box --}}
        <form action="" class="search-form">
            <input type="search" name="" placeholder="Seacrh here......" id="search-box">
            <label for=""search-box class="fas fa-search"></label>
        </form>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <div id="#" class="fas fa-heart"></div>
            <div id="#" class="fas fa-shopping-cart"></div>
            <div id="login-btn" class="fas fa-user"></div>
        </div>

    </div>
    <div class="header-2">
        <div class="navbar">
            <a href="#home">Home</a>
            <a href="#featured">Featured</a>
            <a href="#arrivals">Arrivals</a>
            <a href="#reviews">Reviews</a>
            <a href="#contact">Contact</a>
        </div>
    </div>
</header>
{{-- Header Section End --}}









{{-- Costum Js File Link --}}
    <script src="https://kit.fontawesome.com/4f058cb84b.js" crossorigin="anonymous"></script>
    <script src="{{ asset('') }}assets/js/script.js"></script>
</body>
</html>