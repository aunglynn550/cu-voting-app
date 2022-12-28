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
    <script type="text/javascript" src="/js/app.js"></script>
    
    @livewireStyles
</head>
<body class="bg-gray-100">
<!-- <a href="{{ route('logout') }}">Logout</a>
<a href="{{ route('login') }}">Login</a>
<a href="{{ route('register') }}">Register</a> -->


<header class="header">
        <!-- Logo -->
        <a href="#" class="logo">LR</a>
        <!-- Hamburger icon -->
        <input class="side-menu" type="checkbox" id="side-menu"/>
        <label class="hamb" for="side-menu"><span class="hamb-line"></span></label>
        <!-- Menu -->
        <nav class="nav">
            <ul class="menu">
            <li> <a class="ff-tanger" href="{{ route('king') }}">King</a></li>
                <li><a class="ff-tanger" href="{{ route('queen') }}">Queen</a> </li>
                <li><a class="ff-tanger" href="{{ route('allking') }}">all King</a> </li>
                <li><a class="ff-tanger" href="{{ route('allqueen') }}">all Queen</a> </li>
            </ul>
        </nav>
    </header>
   


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