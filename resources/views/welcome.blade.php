<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>autopmuebles</title>
  <link rel="stylesheet" type="text/css" href="">
</head>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
@font-face {
  font-family: 'Poppins', sans-serif;
  src: url(../fonts/inconsolata.ttf);
}
@font-face {
  font-family: 'Poppins', sans-serif;
  src: url(../fonts/Poppins-Bold.ttf);
}
* {
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body {
  margin: 0;
  background-image: url(../IMG/inter.jpg);
  font-family: 'Poppins', sans-serif;

}
img {
  display: block;
  width: 100%;
}
.main-header {
  padding: 0 20px;
  background: #000000;
}
.main-header__title{
  text-align: center;
  font-size: 2.5em;
  margin: 10px 0;
  color: #ffffff;
  font-family: "Poppins";
}
.main-header__container{
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.main-header__link {
  color: rgb(255, 255, 255);
}

.main-nav {
  opacity: 0;
  visibility: hidden;
  transition: all 0.5s;
  z-index: 999999;
}
.menu{
  position: absolute;
  top: 180px;
  left: 0;
  background: #ffffff;
  width: 100%;
  list-style: none;
  padding: 0px;
  margin: 0;
}
.menu__item {
  text-align: center;
  margin: auto;
}
.menu__link {
  padding: 20px;
  color: white;
  text-decoration: none;
  position: relative;
  display: block;
}
.menu__link:hover {
  background: white;
  color: #ffffff;
}

.mostrar{
  opacity: 1;
  visibility: visible;
}

.icon-menu{
  font-size: 1.5em;
  border: 1px solid #ffffff; 
  display: block;
  padding: 10px 20px;
  cursor: pointer;
  margin-left: auto;
}
.main-header__btn{
  display: block;
  padding: 10px 30px;
  color: #ffffff;
  border: 1px solid #ffffff;
  text-decoration: none;
}
.main-header__input{
  display: block;
  padding: 10px;
  width: 50%;
}

.main {
  padding: 0 20px;
}

.container-slider{
  margin: 50px 0;
  position: relative;
  overflow: hidden;
}

.slider {
  display: flex;
  width: 400%;
  height: 300px;
  margin-left: -100%;
  position: relative;
}
.slider:before{
  content: "";
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
  width: 100%;
  background: rgba(0,0,0,0.5);
  height: 100%;
}

.slider__section {
  width: 100%;
  position: relative;
}
.slider__img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.slider__btn {
  position: absolute;
  width: 40px;
  height: 40px;
  background: rgb(255, 255, 255, 0.7);
  top: 50%;
  transform: translateY(-50%);
  font-size: 30px;
  font-weight: bold;
  font-family: monospace;
  text-align: center;
  border-radius: 50%;
  cursor: pointer;
  z-index: 999;
}
.slider__btn:hover { 
  background: #fff;
}
.slider__btn--left{
  left: 10px;
}
.slider__btn--right {
  right: 10px;
}
.slider__content{
  position: absolute;
  top: 50%;
  left: 50%;
  color: white;
  transform: translate(-50%, -50%);
  width: 60%;
  text-align: center;
  z-index: 999;
}
.slider__title{
  font-size: 2.2em;
  margin: 0;
}
.slider__txt{
  margin: 5px 0;
}
.btn-shop{
  display: block;
  border: 2px solid #ffffff;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  width: 150px;
  margin: 20px auto;
  transition: all 0.5s;
}
.btn-shop:hover{
  background: #000000;
  color: white;
}

.container-products {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 15px;
}
.product {
  border: 1px solid rgb(255, 255, 255);
  padding: 20px;
  text-align: center;
  position: relative;
}  

.product:before {


  padding: 10px;
  width: 60px;
  position: absolute;
  top: 20px;
  right: 10px;
  transform: rotate(-90deg);
  color: rgb(255, 255, 255);
}

.product__img{
  width: 100%;
  height: 120px;
  object-fit: cover;
}
.product__title{
  text-align: center;
}
.product__price {
  color: #ffffff;
  font-weight: bold;
}
.product__icon {
  display: block;
  margin-top: 10px;
}
.product:hover .product__icon {
  color: #14d1e2;
}

.product:hover .product__img{
transition: all 500ms ease;
transform: scale(1.2);
}

.container__testimonials{
  text-align: center;
  background: #000000;
  padding: 20px;
  margin: 20px 0;
}
.testimonial__txt{
  color: rgb(255, 255, 255);
}
.container-editor{
  margin-top: 20px;
}

.editor__item{
  height: 200px;
  position: relative;
  overflow: hidden;
}
.editor__img  {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.editor__circle{
  width: 200px;
  height: 200px;
  border: 2px solid rgb(255, 255, 255);
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  bottom: -200px;
  right: -150px;
  color: white;
  padding: 20px;
  padding-bottom: 70px;
  padding-right: 50px;
  font-size: 1.1em;
  text-align: center;
  font-weight: bold;
  transition: all 0.5s;
}
.editor__item:hover .editor__circle{
  transform: scale(1.2);
  bottom: -90px;
  right: -50px;
}
.editor__item:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.5);
  opacity: 0;
  transition: all 0.5s;
}
.editor__item:hover:before {
  opacity: 1;
}
.container-tips{
  margin: 20px 0;
  text-align: center;
}
.tip i{
  font-size: 2em;
  color: rgb(255, 255, 255);
  padding: 20px 0;
}
.tip .btn-shop {
  color: rgb(255, 255, 255);
}
.btn-shop:hover {
  color: white;
}

.main-footer{
  background: #151515;
  color: white;
  padding: 30px 20px;
  width: 100%;
}
.footer__title{
  border-bottom: 1px dotted rgb(255, 255, 255);
  padding-bottom: 20px;
}
.footer__txt {
  color: rgb(255, 255, 255);
}
.footer__link{
  color: rgb(255, 255, 255);
  text-decoration: none;
  display: block;
  padding: 10px 0;
}

.footer__input{
  background: #ffffff;
  width: 100%;
  display: block;
  padding: 20px;
  border: 1px solid rgb(255, 255, 255);
}
.copy {
  color: rgb(255, 255, 255);
}

/*Estilos para tablet*/
@media screen and (min-width:768px) {
  .slider{
    height: 400px;
  }
  .editor__item{
    height: 250px;
  }
  .container-tips{
    margin: 50px 0;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
  }
}
/*Estilos para web*/

@media screen and (min-width:1024px) { 
  .container{
    width: 1000px;
    margin: auto;
  }
  .icon-menu {
    display: none;
  }
  .main-header .container--flex{
    display: flex;
    align-items: center;
  }
  .main-header__container{
    flex-wrap: wrap;
    align-content: flex-start;
  }
  .main-header__txt{
    width: 100%;
  }
  .main-header__container:nth-child(2){
    order: -1;
    width: 25%;
  }
  .main-header__container:nth-child(3){
    width: 25%;
    padding: 0 20px;
  }
  .main-header__title {
    width: 100%;
    font-size: 4em;
    margin: 0;
    border-bottom: 1px solid rgb(255, 255, 255);
  }
  .main-header__link {
    margin-bottom: 20px;
  }
  .main-header__btn{
    width: 130px;
    padding: 10px;
    margin-bottom: 20px;
  }
  .main-header__input{
    width: 85%;
  }
  .main-nav{
    visibility: visible;
    opacity: 1;
    width: 100%;
    margin-top: 20px;
  }
  .menu {
    position: static;
    width: 100%;
    display: flex;
    background: none;
  }
  .menu__link{
    color: rgb(255, 255, 255);
  }
  .menu__link:hover{
    background: #333;
    color: white;
  }
  .container-products {
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 15px;
  }
  .product__img {
    height: 150px;
  }
  .container__testimonials{
    font-size: 1.3em; 
  }
  .container-editor{
    display: flex;
    justify-content: space-between;
  }
  .editor__item{
    width: 48%;
  }
  .main-footer {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 20px;
  }
  .copy {
    grid-column-start: span 4;
    text-align: center;
  }
}

@media screen and (min-width:1280px) { 
  .container{
    width: 1200px;
  }
  .main-header__container:nth-child(3){
    padding-left: 60px;
  }
  .main-header__container:nth-child(2){
    font-size: 1.3em;
  }
  .slider{
    height: 500px;
    font-size: 1.5em;
  }
}

@media screen and (min-width:1600px) { 
  .container{
    width: 1500px;
  }
  .main-header__container:nth-child(3){
    padding-left: 150px;
  }
  .main-header__container:nth-child(2){
    font-size: 1.5em;
  }
  .slider{
    height: 600px;
  }
  .product__img {
    height: 200px;
  }
}

p{
  color: #fff;
}

h2{
  color:#fff
}

h3{
  color: #fff;
}

span{
  color: #fff;
}

.carrito_main{
  width: 30%;
  background-position: initial;
}

.what_sapp{
  width: 20%;

}

#carucel1{
  background-image: url(../IMG/alcobas.jpg);

}


</style>

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
  <div class="container-slider">
    <div class="slider" id="slider">
      <div class="slider__section"id="carucel1">
      <img src="../IMG/alcobas.jpg" alt="" class="slider__img">> 
        <div class="slider__content">
          <h2 class="slider__title">ALCOBAS</h2>
          <a href="ALCOBAS.php" class="btn-shop">Ver Producto</a>
        </div>
      </div>
      <div class="slider__section">
        <img src="../IMG/salas3.jpg" alt="" class="slider__img">
        <div class="slider__content" id="carucel2">
          <h2 class="slider__title">SALAS</h2>
          <a href="SALAS.php" class="btn-shop">Ver Producto</a>
        </div>
      </div>
      <div class="slider__section">
        <img src="../IMG/comedor vip.jpg" alt="" class="slider__img">
        <div class="slider__content" id="carucel3">
          <h2 class="slider__title">COMEDORES</h2>
          <a href="COMEDORES.php" class="btn-shop">Ver Producto</a>
        </div>
      </div>
      <div class="slider__section">
        <img src="../IMG/comedores2.jpg" alt="" class="slider__img">
        <div class="slider__content" id="carucel4">
          <h2 class="slider__title">COMEDORES</h2>
          <a href="COMEDORES.php" class="btn-shop">Ver Producto</a>
        </div>
      </div>
    </div>
    <div class="slider__btn slider__btn--right" id="btn-right">&#62;</div>
    <div class="slider__btn slider__btn--left" id="btn-left">&#60;</div>
  </div>
  <main class="main">
    <div class="container">
      <h2 class="main-title">PRODUCTOS IDEALES PARA TI</h2>
      <section class="container-products">
        <div class="product">
          <img src="../IMG/alcobas.jpg" alt="" class="product__img">
          <div class="product__description">
            <h3 class="product__title">ALCOBA (VAINILLA)</h3>
            <span class="product__price">$1.500.000</span>
            <a href="CARRITO.php" class="btn-shop">COMPRAR AHORA</a>
          </div>
          <i class="product__icon fas fa-cart-plus"></i>
        </div>
        <div class="product">
          <img src="../IMG/comedores2.jpg" alt="" class="product__img">
          <div class="product__description">
            <h3 class="product__title">COMEDOR (ESPECIAL)</h3>
            <span class="product__price">$1.800.000</span>
            <a href="CARRITO.php" class="btn-shop">COMPRAR AHORA</a>
          </div>
          <i class="product__icon fas fa-cart-plus"></i>
        </div>
        <div class="product">
          <img src="../IMG/comedores3.jpg" alt="" class="product__img">
          <div class="product__description">
            <h3 class="product__title">COMEDOR (NATURE)</h3>
            <span class="product__price">$1.800.000</span>
            <a href="CARRITO.php" class="btn-shop">COMPRAR AHORA</a>
          </div>
          <i class="product__icon fas fa-cart-plus"></i>
        </div>
        <div class="product">
          <img src="../IMG/salas3.jpg" alt="" class="product__img">
          <div class="product__description">
            <h3 class="product__title">SALA (MODEL)</h3>
            <span class="product__price">$2'00.000.000</span>
            <a href="CARRITO.php" class="btn-shop">COMPRAR AHORA</a>
          </div>
          <i class="product__icon fas fa-cart-plus"></i>
        </div>
      </section>
</main>
      <br><br><br>
  <footer class="main-footer">
    <div class="footer__section">
      <h2 class="footer__title">ACERCA DE NOSOTROS</h2>
      <p class="footer__txt">Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at tellus. Nulla porttitor accumsana tincidunt.</p>
    </div>
    <div class="footer__section">
      <h2 class="footer__title">DIRECCION: BOGOTA D.C</h2>
      <p class="footer__txt">CALLE 7 # 69 - 69 BOGOTA D.C</p>
      <h2 class="footer__title">CONTACTANOS</h2>
      <p class="footer__txt">TELEFONO: 9876543210</p>
    </div>
    <div class="footer__section">
      <h2 class="footer__title">INFORMACION INCLUIDA</h2>
      <a href="index.php" class="footer__link">INICIO</a>
      <a href="crear_cuenta.php" class="footer__link">CREAR CUENTA</a>
      <a href="PERFIL.php" class="footer__link">CATEGORIA</a>
      <a href="PERFIL.php" class="footer__link">PRODUCTOS</a>
      <a href="direccion.php" class="footer__link">DIRECCION</a>
    </div>
    <div class="footer__section">
      <h2 class="footer__title">Escribenos por whatsapp para informacion, inquietud, etc...</h2>
      <p class="footer__txt"></p>
      <img class="what_sapp" src="../IMG/whatsapp.png">
    </div>
    <p class="copy">© 2021 CON DERECHOS DE AUTOR DM SENA</p>
  </footer>
  <script src="js/automueble.js"></script>
</body>

</html>