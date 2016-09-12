<?php
$pares=0;
$j=1;
$impares=0;
$suma=0;
while ($j <=50) {
	if ($j % 2==1){
		echo $j.",";
		$suma =  $suma+$j;
	}else{

		$pares;
	}

	$j++;
	
}
 echo "<br> La sumatoria de los numeros impares es:";
 echo "<br>".$suma;
