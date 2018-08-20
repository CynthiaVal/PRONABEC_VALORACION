<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
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
</head>

<body id="page-top">
  <?php 
  include_once("conexion.php"); 
  error_reporting(E_ALL ^ E_NOTICE);
  $_SERVER["QUERY_STRING"];
  $id_calificacion=$_GET['calificacion'];
  $fecha = date("y/m/d");
  $query1= "Update calificacion Set Contador=Contador+1 Where Id_calificacion ='$id_calificacion'";
  $conta=$conexion->query($query1);

  $conexion->close();?>

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
          
    <div class="container">
      <div class = 'row'>
        <div class="col-md-1"></div>
        <div class='col-md-2'>
          <div class='form-group'>
            <label for='num_venta '>Género: </label>
            <div class="radio">
              <label><input type="radio" name="optradio">Masculino</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="optradio">Femenino</label>
            </div>
          </div>
        </div>
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
        <div class="col-md-7"></div>
      </div> 

      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
          <div class="panel panel-primary ">
            <div class="panel-heading text-center">CALIFICACIÓN</div>
            <div class="table">
              <table class='table table-striped  table-hover'>
                <thead>
                  <tr class="primary">
                    <th class="text-center">Preguntas</th>
                    <th class="text-center">Muy Satisfecho</th>
                    <th class="text-center">Satisfecho</th>
                    <th class="text-center">Ni Satisfecho/Ni insatisfecho</th>
                    <th class="text-center">Insatisfecho</th>
                    <th class="text-center">Muy Insatisfecho</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><b>1. SERVICIO</b></td>
                  </tr> 
                  <tr>
                    <td>Sobre la atención recibida me siento: </td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio1" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio1" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio1" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio1" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio1" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                  </tr> 
                  <tr>
                    <td><b>2. INSTALACIONES  Y RECURSOS</b></td>
                  </tr> 
                  <tr>
                    <td>Estoy______ sobre espacios de atención  al usuario.</td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio2" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio2" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio2" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio2" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio2" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                  </tr> 
                  <tr>
                    <td>Respecto al material informativo (folletos, dípticos) me siento: </td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio3" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio3" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio3" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio3" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio3" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                  </tr> 
                  <tr>
                    <td><b>3. DURACIÓN DE LA ATENCIÓN</b></td>
                  </tr>  
                  <tr>
                    <td>Sobre el tiempo de atención que se presta, me siento:</td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio4" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio4" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio4" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio4" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio4" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                  </tr>
                  <tr>
                    <td><b>4. ATENCIÓN EN LAS OFICINAS</b></td>
                  </tr> 
                  <tr>
                    <td>Me siento ______ con la atención del personal que labora en la oficina.</td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio5" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio5" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio5" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio5" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio5" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                  </tr>
                  <tr>
                    <td><b>5. HORARIOS DE ATENCION </b></td>
                  </tr>
                  <tr>
                    <td>Sobre los horarios de atención al público me siento:  </td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio6" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio6" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio6" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio6" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio6" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                  </tr>
                  <tr>
                    <td><b>6.ATENCIÓN A DUDAS Y SUGERENCIAS</b></td>
                  </tr>
                    <tr>
                    <td>Me siento _____ con la rapidez con la que el personal que labora en la oficina, resuelve mis dudasy sugerencias, sobre los servicios que brinda el PRONABEC.</td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio7" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio7" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio7" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio7" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio7" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                  </tr>
                  <tr>
                    <td><b>7. EXPECTATIVAS DE ATENCIÓN</b></td>
                  </tr>
                  <tr>
                    <td>Me siento _____ que la atención recibida cumplió con las expectativas que esperaba.</td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio8" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio8" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio8" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio8" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio8" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                  </tr>  
                </tbody>    
              </table>
            </div>
          </div>
          <div class="form-group">
            <label for="comment"><b>8.MEJORA: ¿Usted qué considera que debería de mejorar?</b></label>
            <textarea class="form-control" rows="5" id="comment"></textarea>
          </div>
        </div>
        <div class="col-lg-1"></div>
      </div>

      <div class="row">
        <div class="col-lg-5 col-md-6 text-center">  </div>
        <div class="col-lg-2 col-md-6 text-center">
          <div class="service-box">
            <a href=""class="btn btn-primary btn-block btn-lg" role="button"> <h4>ENVIAR</h4></a>  
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
