<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta charset="ISO-8859-1">
 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
  <meta name="author" content="">
  <title>Encuesta Pronabec </title>
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

  <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function()
      {
      $("#boton").click(function () {  
        alert($('input:radio[name=genero]:checked').val());
        $("#formulario").submit();

        });
       });
  </script>
</head>
<body id="page-top">

  <?php 
  include_once("conexion.php"); 

  error_reporting(E_ALL ^ E_NOTICE);
  $_SERVER["QUERY_STRING"];

 /*$fecha = date("y/m/d");
$query4= "Insert into encuesta (genero,fecha) values($genero,curdate())";
 $result= $conexion->query($query4); */
  ?>

  <section class="bg-primary" >
    <div class="container">
      <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8  text-center">
          <h3 class="section-heading">ENCUESTA DE SATISFACCIÓN AL USUARIO</h4>  
        </div>
        <div class="col-lg-2"></div>
      </div>
    </div>    
  </section>

  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
          <h4 class="section-heading"> Estimado Usuario: </h2> 
          <h5 class="section-heading"> Solicitamos su colaboración diligenciando el siguiente cuestionario, cuyos resultados pretenden
                      conocer su nivel de satisfacción frente a los servicios ofrecidos y la calidad del servicio prestado por la Unidad de Enlace Regional Tacna/PRONABEC. </h2> <br>
          <h4 class="section-heading"> </h2> 
        </div>
        <div class="col-lg-1"></div>
      </div>
    </div>
       <br><br>
    <div class="container">
      <div class = 'row'>
        <div class="col-md-4"></div>
        <div class='col-md-2'>
          <div class='form-group'>
            <label for='num_venta '>Género: </label>
            <form name="formulario" id="formulario" action="12-radio-button-jquery.php" method="POST">
              <div class="radio">
                <input type="radio" name="genero" id="genero1" value="0"> Masculino<br>
              </div>
              <div class="radio">
                <input type="radio" name="genero" id="genero2" value="1"> Fenemino<br>
              </div>
            </form>
          </div>
        </div>
        

    <?php
      /*  if (isset($_POST['genero'])){
          $genero = $_POST['genero'];
        }*/

      if ($_POST['genero'])
        $genero =$_POST['genero'];
       
      ?> 

        <div class='col-md-2'>
          <form action='' class=''>
            <div class='form-group'>
              <label for='fecha'>Fecha</label>
              <div class='input-group'>
                  <span class='input-group-addon'><span class='glyphicon glyphicon-hourglass'></span></span>
                  <input class='form-control' id='fecha' type='text' autocomplete='off' value='<?php echo date("y/m/d"); ?>' disabled>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-4"></div>
      </div> 
      <br> <br>
  
      
      <div class="row">
        <div class="col-lg-5 col-md-6 text-center">  </div>
        <div class="col-lg-2 col-md-6 text-center">
          <div class="service-box">
            <a href="encuesta.php?genero=<?php  echo $genero; ?>" type="submit" id="boton" name="boton"class="btn btn-primary btn-block btn-lg" role="button"> <h4>CONTINUAR</h4></a>  
          </div> 
        </div>
        <div class="col-lg-5 col-md-6 text-center"></div>
      </div>
      <br><br>
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
