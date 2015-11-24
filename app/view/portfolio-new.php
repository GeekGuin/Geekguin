<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Geekguin</title>

    <!-- Material Design Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.css" rel="stylesheet">

    <!-- style -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Sweet Alert -->
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="img/favicon.icon" /> 
</head>
<body>
<nav class="navbar">
            <div class="container-fluid z-depth-3" style="background-color: #3f51b5;">
                  <div class="container">
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                      <a class="navbar-brand waves-effect waves-light page-scroll" href="#home" style="padding-top: 0px;"><img src="img/logo.png" height="193" width="170" alt="" class="img-responsive"></a>                     
                  </div>
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                      <ul class="nav navbar-nav">
                      <li><a href="admin.html" class="waves-effect waves-light">
                        <i class="fa fa-tachometer fa-2x"></i>
                        </a></li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="waves-effect waves-light">
                            <i class="fa fa-user fa-2x"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Editar <i class="fa fa-wrench"></i></a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="waves-effect waves-light">
                        <i class="fa fa-envelope-o fa-2x"></i>
                        <span class="badge social-counter">5</span>
                        </a></li>
                        <li><a href="#" class="waves-effect waves-light">
                        <i class="fa fa-sign-out fa-2x"></i>
                        </a></li>
                      </ul>
                  </div>
                  </div>
            </div>
        </nav>
        <div class="container">
          <div class="row text-left">
            <h4>Nuevo Portafolio</h4>
          </div>
          <div class="row">
            <form class="col-md-12 z-depth-4" action="#" style="padding: 30px;">
              <div class="row">
                <div class="input-field col-md-4">
                  <label for="language">Lenguaje:</label>
                  <input placeholder="Ejem: HTML5/CSS3" id="language" type="text" class="validate" required>
                </div>
                <div class="input-field col-md-4">
                  <label for="date">Fecha:</label>
                  <input placeholder="Ejem: HTML5/CSS3" id="date" type="date" class="datepicker" required>
                </div>
                <div class="input-field col-md-4">
                  <label for="description">Descripción</label>
                  <textarea id="description" class="materialize-textarea" length="50" maxlength="50" required></textarea>
                </div>
              </div>
              <div class="row">
                <div class="input-field col-md-4">
                  <span>Imagen</span>
                  <input type ="file" required />
                </div>
                <div class="input-field col-md-4">
                  <label for="link">Enlace:</label>
                  <input id="link" type="text" class="validate" value="http://www." required>
                </div>
              </div>
              <div class="action text-right">
                <button type="submit" class="btn btn-danger waves-effect waves-light">Agregar</button>
              </div>
            </form>
          </div>
        </div>
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Material Design Bootstrap -->
    <script type="text/javascript" src="js/mdb.js"></script>

    <!-- Parallax Core JavaScript -->
    <script src="js/custom.js"></script>

    <!-- Smoothscroll JavaScript -->
    <script src="js/smoothscroll.js"></script>

    <script src="js/sweetalert.min.js"></script>


</body>
<!-- DEVELOP 1.0 -->
</html>