<?php

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
