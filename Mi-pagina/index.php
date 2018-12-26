<?php 

	echo "<p>Hola mundo \n</p>";

	// Variables, se modela con el dato

	$entero=10;
	
	echo $entero;

	//Arrays

	$arrayColours = array('White','Black','Blue');
	
	echo "<p>\n</p>";
	echo $arrayColours[0];
	echo $arrayColours[1];
	echo $arrayColours[2];

	//Variables Globales

	$GLOBALS['global'] = "a\n\nZOY GLOBALDD\ns";
	echo $global;

	//Variables Constantes
	// Tambien se puede usar define

	const constante = 'Constante de prueba';
	echo constante;
	
	//Variables constantes, uso de PHP, cambian de acuerdo al sistema ejecutado

	echo __CLASS__;

	//Cambio de variable

	echo "<p>\n\n\nCambio de variables\n</p>";

	$CambioDeVariable1 = "20 adawe";
	$Suma = 20 + $CambioDeVariable1;
	echo $Suma;
	echo gettype($Suma);
 ?>