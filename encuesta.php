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
</head>

<body id="page-top">

  <?php 
  include_once("conexion.php"); 

  error_reporting(E_ALL ^ E_NOTICE);
  $_SERVER["QUERY_STRING"];
 $generoo=$_GET['genero'];
  $query3 = "select * from pregunta";
  $result= $conexion->query($query3);
 
        if (isset($_POST["genero"])){
          $genero = $_POST["genero"];
        }
$query4= "Insert into encuesta (fecha) values(curdate())";
 $result4= $conexion->query($query4);
  
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
      <?php echo $genero;?>
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
                   <?php 
                      while($row  =$result->fetch_assoc())
                      {
                    ?>
                
                  <tr>
                    <td><?php echo $row['n_pregunta'];?></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio<?php echo $row['id_pregunta']; ?>" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio<?php echo $row['id_pregunta']; ?>" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio<?php echo $row['id_pregunta']; ?>" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio<?php echo $row['id_pregunta']; ?>" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                    <td><div class="radio text-center"><label class="radio-inline"><input type="radio" name="optradio<?php echo $row['id_pregunta']; ?>" style="height:20px; width:20px; vertical-align: middle;"></label></div></td>
                  </tr> 
                   <?php 
                    }
                    
                    $conexion->close(); ?>
                  
                </tbody>    
              </table>
            </div>
          </div>
          <div class="form-group">
            <label for="comment"><b>¿Usted qué considera que debería de mejorar?</b></label>
            <textarea class="form-control" rows="5" id="comment"></textarea>
          </div>
        </div>
        <div class="col-lg-1"></div>
      </div>

      <div class="row">
        <div class="col-lg-5 col-md-6 text-center">  </div>
        <div class="col-lg-2 col-md-6 text-center">
          <div class="service-box">
            <a href="envia_en.php" type="submit" name="submit"class="btn btn-primary btn-block btn-lg" role="button"> <h4>ENVIAR</h4></a>  
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
