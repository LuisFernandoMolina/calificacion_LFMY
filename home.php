<?php
session_start();
require "funciones.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
 <div class="fondo_tec" id="Fondo" align="center">
				<img src="imagenes/encabezado.png">
			</div>
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <!--<a class="navbar-brand" href="#">Logo</a>-->

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="active"><a href="#">Eventos</a></li>
        <li class="active"><a href="#">Calendario</a></li>
        <?php menu(); ?>
     </ul>




      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">

      <p><a href="#"> </a></p>
      <p><a href="#"> </a></p>
    </div>
    <div class="col-sm-8 text-left">



      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="images/uno.jpg" alt="Los Angeles" style="width:100%;">
          </div>

          <div class="item">
            <img src="images/2.jpg" alt="Chicago" style="width:100%;">
          </div>

          <div class="item">
            <img src="images/3.jpg" alt="New york" style="width:100%;">
          </div>


        <div class="item">
          <img src="images/4.jpg" alt="Chicag" style="width:100%;">
        </div>

        <div class="item">
          <img src="images/5.jpg" alt="New " style="width:100%;">
        </div>
      </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>  </p>
      </div>
      <div class="well">
        <p>   </p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Campus Centro
  Av. Tecnológico s/n
esq. Gral. Mariano Escobedo.
Colonia Centro Histórico
<p>C.P. 76000, Querétaro, Querétaro.</p>
<p>Tel. (442) 227 44 00	Campus Norte</p>
<p>01 (442) 243 55 92</p>
</footer>
</body>
</html>
