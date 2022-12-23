<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Voting App </title>
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">


    <link rel="stylesheet" href="/app.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- Google Font -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:ital,wght@1,300;1,400;1,500&display=swap" rel="stylesheet">
</head>

<body>

<a class="auth-link" href="{{ route('logout') }}">Logout</a>

<div class="main-container">
    <div class="side-bar">
        <ul class="nav">
        <li class="nav-item nav-category"><h4>Dashboard</h4></li>     
        <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">Users</a> </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('king.index') }}">Kings</a> </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('queen.index') }}">Queen</a> </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">All Kings</a> </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">All Queens</a> </li>
        </ul>
    </div>
        
            @yield('content')



