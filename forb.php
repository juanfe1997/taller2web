<?php

$tabla  = $_POST['tabla'];

$num = (int)$tabla;

for ($i=1; $i <= 20; $i++) { 
	echo $num." x ".$i." = ".$num*$i.
	"<br>"; 

}
echo "<a href='forb.html'> volver Atras <a>";
?>