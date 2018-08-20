<?php
function conectarse2(){
	$servidor="localhost";
	$usuario="root";
	$password="cynthia";
	$bd="encuesta_pro";
	$conectar= new mysqli($servidor,$usuario,$password,$bd);
	return $conectar;
}
$conexion=conectarse2();
?>