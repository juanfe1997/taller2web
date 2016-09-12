<?php

$operac = $_POST["operaciones"];
$operacion = (string)$operac;


$nro1 = $_POST["numero1"];
$numero1 = (int)$nro1;

$nro2 = $_POST["numero2"];
$numero2 = (int)$nro2;

switch ($operacion) {

	case "Sumar":
	suma($numero1, $numero2);
		  echo "<br><br><a href='funcionesc.html'>atras</a>";
		break;
	case "Restar":
	resta($numero1, $numero2);
		  echo "<br><br><a href='funcionesc.html'>atras</a>";
		break;
    case "Multiplicar":
	multiplicacion($numero1, $numero2);
		  echo "<br><br><a href='funcionesc.html'>atras</a>";
		break;
		case "Dividir":
	division($numero1, $numero2);
		  echo "<br><br><a href='funcionesc.html'>atras</a>";
		break;
}
//sumar
function suma($numero1, $numero2) {

	$suma = $numero1 + $numero2;
	
echo "El resultado de la suma de los numeros<br>".$numero1."+".$numero2." ="."(".$suma.")";

}
//Restar
function resta($numero1, $numero2) {

	$resta = $numero1 - $numero2;
	
echo "El resultado de la resta de los numeros<br>".$numero1."-".$numero2." ="."(".$resta.")";

}
//multiplicar
function multiplicacion($numero1, $numero2) {

	$multiplicacion = $numero1 * $numero2;
	
echo "El resultado de la multiplicacion de los numeros<br>".$numero1."*".$numero2." ="."(".$multiplicacion.")";

}
//dividir
function division($numero1, $numero2) {

	$division = $numero1 / $numero2;
	
echo "El resultado de la division de los numeros<br>".$numero1."/".$numero2." ="."(".$division.")";

}