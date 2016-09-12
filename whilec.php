<?php
$pares=0;
$j=1;
$impares=0;
$suma=0;
while ($j <=50) {
	if ($j % 2==0){
		echo $j.",";
		$suma =  $suma+$j;
	}else{

		$impares;
	}

	$j++;
	
}
 echo "<br> La sumatoria de los numeros pares es:";
 echo "<br>".$suma;
