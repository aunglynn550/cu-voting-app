<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CU Voting App</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:ital,wght@0,100;0,300;0,400;1,100&display=swap" rel="stylesheet">

    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="/css/layout/layout.css">
    <link rel="stylesheet" href="/css/layout/buttons.css">
    <link rel="stylesheet" href="/css/layout/respnav.css">
    <script type="text/javascript" src="/js/app.js"></script>
    
    @livewireStyles
</head>
<body class="bg-gray-100">
<!-- <a href="{{ route('logout') }}">Logout</a>
<a href="{{ route('login') }}">Login</a>
<a href="{{ route('register') }}">Register</a> -->

<nav class="nav">
    <div class="container">
        <div class="logo">
            
            <button onclick="myfun()" class="button-two">
        <svg stroke=var(--button-color) class="hamburger" viewBox="0 0 100 100" width="40" height="40">
            <line id="line-top" class="line top"
            x1="90" x2="10" y1="40" y2="40"
            stroke-width="10"
            stroke-linecap="round"
            stroke-dasharray="80"
            stroke-dashoffset="0">
            </line>
            <line id="line-bottom" class="line bottom"
            x1="10" x2="90" y1="60" y2="60"
            stroke-width="10"
            stroke-linecap="round"
            stroke-dasharray="80"
            stroke-dashoffset="0">
            </line>
        
        </svg>
    </button>

        </div>
        <div class="main_list" id="mainListDiv">
            <ul>
                <li> <a class="ff-tanger" href="{{ route('king') }}">King</a></li>
                <li><a class="ff-tanger" href="{{ route('queen') }}">Queen</a> </li>
                <li><a class="ff-tanger" href="{{ route('allking') }}">all King</a> </li>
                <li><a class="ff-tanger" href="{{ route('allqueen') }}">all Queen</a> </li>
              
            </ul>
        </div>
        <div class="media_button">
            <button class="main_media_button" id="mediaButton">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</nav>


    <!-- <div class="nav">
        
        <div class="nav-items">
        <a href="{{ route('king') }}">King</a>
        <a href="{{ route('queen') }}">Queen</a> 
        <a href="{{ route('allking') }}">all King</a> 
        
        </div>
    </div> -->
    
<div class="product-grid">
   
            @yield('content')
    @livewireScripts
</body>