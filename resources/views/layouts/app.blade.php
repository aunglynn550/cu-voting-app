<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CU Voting App</title>

    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="/css/layout/layout.css">
    @livewireStyles
</head>
<body class="bg-gray-100">
<a href="{{ route('logout') }}">Logout</a>
<a href="{{ route('login') }}">Login</a>
<a href="{{ route('register') }}">Register</a>
    <div class="nav">
        <div class="nav-items">
        <a href="{{ route('king.index') }}">King</a>
        <a href="{{ route('queen.index') }}">Queen</a> 
        </div>
    </div>

<div class="product-grid">
   
            @yield('content')
    @livewireScripts
</body>