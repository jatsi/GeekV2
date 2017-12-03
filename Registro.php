<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Muebles del centro</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="deep-green teal ">

 <nav class="deep-purple accent-3" role="navigation">
    <div class="nav-wrapper container"> 
    <div class="nav-wrapper">
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="http://localhost/geekv2/">INICIO</a></li>
      <li><a href="">CATALOGO </a></li>
      <li><a href="">CARRITO</a></li>
    </ul>
  </div>
    </div>
  </nav>


<div class="row">
   <!--  ###############################################################################3333Scripts-->
      <div class="col s6">
<div class=" right deep-orange-text col s10">
    <form class="col s12  z-depth-6 card-panel deep-orange-text">
      <div class="row">
        <h5 class="center deep-orange-text" style="padding: 15px">REGISTRO</h5>
        <div class="input-field col s12  ">
          <input  id="NOMBRE" type="text" class="validate">
          <label for="NOMBRE">NOMBRE</label>
        </div>
      </div>
    <div class="row">
        <div class="input-field col s12">
          <input id="DIRECCION" type="text" class="validate">
          <label for="DIRECCION">DIRECCION</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="CORREO" type="email" class="validate">
          <label for="CORREO">CORREO</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="CONTRASEÑA" type="password" class="validate">
          <label for="CONTRASEÑA">CONTRASEÑA</label>
        </div>
      </div>
       <div class="row">
        <div class="input-field col s12">
          <input id="REPETIR" type="password" class="validate">
          <label for="REPETIR">REPETIR CONTRASEÑA</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="LOCALIDAD" type="text" class="validate">
          <label for="LOCALIDAD">LOCALIDAD</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="RFC" type="text" class="validate">
          <label for="RFC">RFC</label>
        </div>
      </div>
       <div class="row">
        <div class="input-field col s12">
          <input id="TELEFONO" type="tel" class="validate">
          <label for="TELEFONO">TELEFONO</label>
        </div>
      </div>
      <div class="row">
          <div class="input-field col s12">
            <a href="#" class="btn waves-effect  deep-orange waves col s12">REGISTRAR</a>
          </div>
        </div>
    </form>
  </div>




      </div>
        <!--  ###############################################################################3333Scripts-->
      <div class="col s5">
<div id="login-page center" class="row ">
    <div class="col s10 z-depth-6 right card-panel">
      <form class="login-form center deep-orange-text">
        <div class="row">
        </div>
        <div class="row">
          <h5 class="center deep-orange-text">INICIO DE SESION</h5>
          <div class="input-field col s12">
            <i class="material-icons prefix">mail_outline</i>
            <input class="validate" id="email" type="email">
            <label for="email" data-error="wrong" data-success="right">CORREO</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">lock_outline</i>
            <input id="password" type="password">
            <label for="password">CONTRASEÑA</label>
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Recuerdame</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <a href="#" class="btn waves-effect  deep-orange waves col s12">INICIAR SESION</a>
          </div>
        </div>
      </form>
    </div>
  </div> 


      </div>
    </div>

<!-- ********* footer ********************8-->
<footer class="page-footer deep-orange teal">
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