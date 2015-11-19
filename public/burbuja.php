<?php
$arreglo = new array();
for ($i=0; $i <10 ; $i++) { 
 	$arreglo[i] = rand(1,50);
 } 
 for ($i=0; $i <10 ; $i++) { 
 	$valor_actual 	 = $arreglo[i];
 	$valor_siguiente = $arreglo[i+1];
 	if ($valor_actual>$valor_siguiente) 
 	{
 		$valor_paso 	= $valor_actual;
 		$arreglo[i] 	= $valor_siguiente;
 		$arreglo[i+1]	= $valor_actual;
 	}
 } 