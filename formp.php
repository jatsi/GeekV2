<?php
#Ssession_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Articulos</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body ng-app="mainModule" ng-controller="mainController" style="background-image: url(src/Fondo2.jpg); background-size: 100%"> 

  <nav class="black"  role="navigation">

   <div class="navbar-">
    <a class="white-text" href="#" style="font-size: 32px">Articulos</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down ">
      <li >
        <a class="white-text" href="http://localhost/Review/public/inicio">Revistas</a>
      </li>
      <li >
        <a class="white-text" href="http://localhost/Review/public/autor">Autores</a>
      </li>  
      <li >
        <a class="white-text" href="http://localhost/Review/public/Form2" >Application</a>
      </li>

    </ul>
  </div>

</nav>
<!--########################################################3 MENU################################# -->

<ul id="slide-out" class="side-nav">
    <li><div class="user-view">
      <a class="background">
        <img src="src/f3.png" style="width: 100%" >
      </a>
      <a href="#user"><img class="circle" src="src/perfil.png"></a>
      <a   href="#name"><span  class="teal-text name">John Doe</span></a>
      <a href="#email"><span class="teal-text email">jdandturk@gmail.com</span></a>
    </div></li>
  <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
  <li><a href="#!">Second Link</a></li>
  <li><div class="divider"></div></li>
  <li><a class="subheader">Subheader</a></li>
  <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
</ul>
<a href="#"  data-activates="slide-out" style="padding-left: 20px ;" class="button-collapse white-text"><i  class="material-icons deep-green-text">menu</i></a>
<!--########################################################cuerpo################################# -->

<div class="section no-pad-bot">
  <div class="container">
    <br><br>
    <h1 class="header center teal-text ">ARTICULOS</h1>
    <div class="row center">
      <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
    </div>
    <div class="row center">
      <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
    </div>
    <br><br>

  </div>
</div>








</div>




<footer class="page-footer teal">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Company Bio</h5>
        <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


      </div>
      <div class="col l3 s12">
        <h5 class="white-text">Settings</h5>
        <ul>
          <li><a class="white-text" href="#!">Link 1</a></li>
          <li><a class="white-text" href="#!">Link 2</a></li>
          <li><a class="white-text" href="#!">Link 3</a></li>
          <li><a class="white-text" href="#!">Link 4</a></li>
        </ul>
      </div>
      <div class="col l3 s12">
        <h5 class="white-text">Connect</h5>
        <ul>
          <li><a class="white-text" href="#!">Link 1</a></li>
          <li><a class="white-text" href="#!">Link 2</a></li>
          <li><a class="white-text" href="#!">Link 3</a></li>
          <li><a class="white-text" href="#!">Link 4</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
    </div>
  </div>
</footer>

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

</body>
</html>
