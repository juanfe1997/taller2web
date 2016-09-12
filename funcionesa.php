<?php

$numero= $_POST['numero'];
$num = (int)$numero;

$potencia = $_POST['potencia'];
$poten = (int)$potencia;

function potencia($num, $poten) {

  
echo pow($num, $poten);


}