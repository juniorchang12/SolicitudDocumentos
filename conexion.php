<?php
function conectar(){
	$con = null;
	$host = '127.0.0.1';
	$db = 'ley';
	$user ='root';
	$pwd = ''; 
	$charset = 'utf8';
	try {
		$dns = "mysql:host=$host;dbname=$db;charset=$charset";
		$opt = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
		$con = new	 PDO($dns, $user, $pwd, $opt);
	}catch(PDOException $e){
		echo ':( Error al conectar con la base de datos'.$e;
		exit;
	}
	return $con;
}

// $Servidor='127.0.0.1';
// $basededatos='ley';
// $usuario='root';
// $clave='';

// function conectar(){
// global $Servidor,$basededatos, $usuario, $clave;
// $con=mysql_connect($Servidor,$usuario,$clave) or die ("error conectando a la base de datos Clave");

// mysql_select_db($con, $basededatos) or die ("Error seleccionando la base de datos Clave");
// mysql_query("SET NAMES 'utf8'");
// return $con;
// }
?>