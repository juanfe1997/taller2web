<?php
$numero = $_POST['numero'];
$num = (int)$numero;

$resul=1;
for ($i=1; $i<=$numero; $i++) { 
	
	$resul=$resul*$i;
	echo " x ".$i;	
	"<br>";
}
 echo " = ".$resul;
echo "<br>";
echo "<a href='forc.html'> volver Atras <a>";
?>