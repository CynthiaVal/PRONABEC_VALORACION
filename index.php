<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pronabec Tacna - Valoración </title>

  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

  <!-- Custom Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="css/animate.min.css" type="text/css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/creative.css" type="text/css">
</head>

<body id="page-top">
  <?php
  include("conexion.php");
  ?>
  <section class="bg-primary" >
    <div class="container">
      <div class="row">
        <div class="col-lg-2">
      		<img  class="img-responsive" src="img/pronabec3.png" width="200" height="200" alt="">
  			</div>
        <div class="col-lg-8  text-center">
          <h2 class="section-heading">VALORACIÓN DEL SERVICIO AL USUARIO - PRONABEC TACNA</h2>
          <hr class="light">
          <i class="fa fa-4x  fa-star wow bounceIn " data-wow-delay=".3s"></i>
          <i class="fa fa-4x  fa-star wow bounceIn " data-wow-delay=".3s"></i>
          <i class="fa fa-4x  fa-star wow bounceIn " data-wow-delay=".3s"></i>
          <i class="fa fa-4x  fa-star wow bounceIn " data-wow-delay=".3s"></i>
          <i class="fa fa-4x  fa-star wow bounceIn " data-wow-delay=".3s"></i>
        </div>
        <div class="col-lg-2"></div>
      </div>
    </div>
  </section>

  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">De acuerdo al servicio brindado Usted se siente ...</h2>        
        </div>
      </div>
    </div>
    <?php 
      include_once("conexion.php"); 
      error_reporting(E_ALL ^ E_NOTICE);
      //  $_SERVER["QUERY_STRING"];
      // $id_calificacion=$_GET['calificacion'];
      // $fecha = date("y/m/d");
      //  $query1= "Update calificacion Set Contador=Contador+1 Where Id_calificacion ='$id_calificacion'";
      // $conta=$conexion->query($query1);
      $query = "select * from calificacion";
      $result= $conexion->query($query);
    ?>
    <div class="container">
      <?php 
        while($row=$result->fetch_assoc())
        {
      ?>
      <div class="row">
        <div class="col-lg-4 col-md-6 text-center"></div>
        <div class="col-lg-4 col-md-6 text-center">
          <div class="service-box">
            <a href="voto.php?calificacion=<?php  echo $row['id_calificacion']; ?> "class="btn btn-primary btn-block btn-lg" role="button"> <h4><?php echo $row['n_calificacion'];?></h4></a>  
          </div> 
        </div>
        <div class="col-lg-4 col-md-6 text-center"></div>
      </div>
      <?php 
        }
        echo $id_calificacion; 
        echo $row['id_calificacion'];
        $conexion->close(); ?>
      <div class="row">
        <div class="col-lg-4 col-md-6 text-center"> </div>
        <div class="col-lg-4 col-md-6 text-center">
          <div class="service-box">
             <a href="crear_encuesta.php"class="btn btn-primary btn-block btn-lg" role="button"> <h4>ENCUESTA</h4></a>  
          </div> 
        </div>
        <div class="col-lg-4 col-md-6 text-center"></div>
      </div>
    </div>
  </section>

  <section class="bg-primary" >
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <span class="copyright">  Copyright &copy; Pronabec Tacna 2017</span>
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
    </footer>
	</section>
  
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
</body>
</html>
