<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>autopmuebles</title>
  <link rel="stylesheet" type="text/css" href="">
</head>
<body>
<header class="main-header">
    <div class="container container--flex">
      <div class="main-header__container">
        <h1 class="main-header__title">AUTOPMUEBLES</h1>
        <span class="icon-menu" id="btn-menu"><i class="far fa-bars"></i></span>
        <nav class="main-nav" id="main-nav">
          <ul class="menu">
            <li class="menu__item"><a href="index.php" class="menu__link">INICIO</a></li>
            <li class="menu__item"><a href="{{ route('register') }}" class="menu__link">CREAR CUENTA</a></li>
            <li class="menu__item"><a href="{{ route('login') }}"  class="menu__link">INICIAR SESION</a></li>
          </ul>
        </nav>
      </div>
      <div class="main-header__container">
        <span class="main-header__txt"></span>
        <p class="main-header__txt"><i class="far fa-phone"></i></p>
      </div>
      <div class="main-header__container">
        <a href="" class="main-header__link"><i class="fas fa-user"></i></a>
        <a href="CARRITO.php"><img class="carrito_main" src="../IMG/carrito.png" width="40%"></a>
        <br>
      </div>
    </div>
  </header>
