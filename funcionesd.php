<?php

   $nro1 = $_POST["nroa"];
   $nroa = (int)$nro1;

	$nro2 = $_POST["nrob"];
	$nrob = (int)$nro2;

	$nro3 = $_POST["nroc"];
	$nroc = (int)$nro3;

	$nro4 = $_POST["nrod"];
	$nrod = (int)$nro4;

   $operacion = $_POST["operacion"];

	echo $operacion($nroa,$nrob,$nroc,$nrod);


	function sumar($nroa,$nrob,$nroc,$nrod){
				$result_numerador=(($nroa*$nrod)+($nrob*$nroc));
				$result_denominador=($nrob*$nrod);
				$total=$result_numerador/$result_denominador;

				echo $nroa."/".$nrob."  +  ".$nroc."/".$nrod." = "."( (".$nroa."*".$nrod.") + (".$nrob."*".$nroc.") )/(".$nrob."*".$nrod.") = ".$result_numerador."/".$result_denominador." = ".$total;
			
			}

			function diferencia($nroa,$nrob,$nroc,$nrod){
				$result_numerador=(($nroa*$nrod)-($nrob*$nroc));
				$result_denominador=($nrob*$nrod);
				$total=$result_numerador/$result_denominador;

				echo $nroa."/".$nrob."  +  ".$nroc."/".$nrod." = "."( (".$nroa."*".$nrod.") - (".$nrob."*".$nroc.") )/(".$nrob."*".$nrod.") = ".$result_numerador."/".$result_denominador." = ".$total;
			
			}

			function multiplicacion($nroa,$nrob,$nroc,$nrod){
				$result_numerador=(($nroa*$nroc));
				$result_denominador=($nrob*$nrod);
				$total=$result_numerador/$result_denominador;

				echo $nroa."/".$nrob."  *  ".$nroc."/".$nrod." = "." (".$nroa."*".$nroc.") / (".$nrob."*".$nrod.") = ".$result_numerador."/".$result_denominador." = ".$total;
			}

		 	
		 	function division($nroa,$nrob,$nroc,$nrod){
				$result_numerador=(($nroa*$nrod));
				$result_denominador=($nrob*$nroc);
				$total=$result_numerador/$result_denominador;

				echo "(".$nroa."/".$nrob.")  /  (".$nroc."/".$nrod.") = "." (".$nroa."*".$nrod.") / (".$nrob."*".$nroc.") = ".$result_numerador."/".$result_denominador." = ".$total;
			}

?>

