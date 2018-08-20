<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Voto - Pronabec </title>

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

<body id="page-top" setTimeout ("r()", 5000);>
<?php 
          include_once("conexion.php"); 
          error_reporting(E_ALL ^ E_NOTICE);
          $_SERVER["QUERY_STRING"];
          $id_calificacion=$_GET['calificacion'];
         $fecha = date("y/m/d");
         $query1= "Insert into valoracion (id_calificacion,fecha) values($id_calificacion,curdate())";
       
         $conta=$conexion->query($query1);

          $conexion->close();?>

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
        <br><br><br>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"> Su opinión/valoración ha sido registrada ...</h2>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"> Gracias por su apoyo.</h3>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-2">
                    
                </div>
                <div class="col-lg-8">
                    
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </section>
    <br><br><br><br>
   <section class="bg-primary" >
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <span class="copyright">  Copyright &copy; Pronabec Tacna 2017</span>
                </div>
                <div class="col-md-4">
                </div>
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
    <script>
    function r() { location.href="index.php" } 
    setTimeout ("r()", 5000);
</script>

</body>

</html>
