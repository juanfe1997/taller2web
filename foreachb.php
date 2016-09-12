<?php

$primer_numero = $_POST['primer_numero'];
$nro1=(int)$primer_numero;

$segundo_numero = $_POST['segundo_numero'];
$nro2=(int)$segundo_numero;

$tercer_numero = $_POST['tercer_numero'];
$nro3=(int)$tercer_numero;

$cuarto_numero = $_POST['cuarto_numero'];
$nro4=(int)$cuarto_numero;

$quinto_numero = $_POST['quinto_numero'];
$nro5=(int)$quinto_numero;

$asc = array($nro1, $nro2, $nro3, $nro4, $nro5);
asort($asc);

foreach($asc as $total)
	{
	echo "<br>" .$total;
	}