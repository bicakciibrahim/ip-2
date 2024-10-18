<!DOCTYPE html>
<html lang="tr">
<head>
    <title>ANA SAYFA</title>
    <link rel="shortcut icon" href="logo.png" >

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>



        .jumbotron {
            background-color: rgb(131, 0, 0);

        }



        .body
        {
            font-family:Times New Roman;

        }

    </style>

</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
    <h1>ÇANAKKALE TEKNİK BİLİMLER MYO</h1>
    <p></p>

</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">

    <a class="navbar-brand" href="">
        <img src="logo.png" alt="logo" style="width:30px;">
    </a>


    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/">ANA SAYFA</a>

        <li class="nav-item">
            <a class="nav-link" href="/about">HAKKIMIZDA</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/contact">İLETİŞİM</a>
        </li>

    </ul>
</nav>
<main>
    @yield('main')
</main>



<footer>
    <p class="copyright"> Copyright ©2024</p>
</footer>

