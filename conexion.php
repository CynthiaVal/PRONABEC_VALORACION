<?php
function conectarse(){
	$servidor="localhost";
	$usuario="root";
	$password="cynthia";
	$bd="pronabec";
	$conectar= new mysqli($servidor,$usuario,$password,$bd);
	return $conectar;
	
}
$conexion=conectarse();
?>