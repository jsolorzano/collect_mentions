<?php
/*
 * Collect Mentions
 *
 * An open source application development for PHP
 *
 * @author	jsolorzano
 * @link	https://github.com/jsolorzano/collect_mentions.git
 * @since	Version 1.0.0
 * 
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 *
 * You can change the contents of the variable $cadena_matriz and add all the random text and mentions as you wish, 
 * the program will help you detect which are mentions.
 * 
 */
 
$cadena_matriz = "Hola prueba #Salud, para texto #Asistencia";

$arreglo_cadena = explode(" ", $cadena_matriz);

$menciones = array();

foreach($arreglo_cadena as $elemento){
	
	$encontrar = "#";
	$pos = strpos($elemento, $encontrar);
	
	if ($pos === false) {
		echo "";
	} else {
		$menciones[] = $elemento;
		echo $elemento."<br>";
	}
	
}

?>
