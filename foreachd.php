<?php

$primer_nombre = $_POST['primer_nombre'];
$nom1=$primer_nombre;

$segundo_nombre = $_POST['segundo_nombre'];
$nom2=$segundo_nombre;

$tercer_nombre = $_POST['tercer_nombre'];
$nom3=$tercer_nombre;

$cuarto_nombre = $_POST['cuarto_nombre'];
$nom4=$cuarto_nombre;

$quinto_nombre = $_POST['quinto_nombre'];
$nom5=$quinto_nombre;

$nombre = array($nom1, $nom2, $nom3, $nom4, $nom5);

foreach($nombre as $name)
	{
	echo "<br>" .$name;
	}