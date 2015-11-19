<?php
/********************************

PROGRAMA DE ORDENAMIENTOS PARA INFO
   PLAN 2006 PERIODO 2016-1
		   17/11/2015
         BY menatoric59
********************************/
$arreglo = array();
$elementos =rand(5,20);

llenaArreglo($elementos);

switch (variable) {
	case 'burbuja':
		ordenaBurbuja();
		break;
	case 'quick':
		quickSort();
		break;
	default:
		echo "Selección incorrecta";
		break;
}

function quickSort()
{	
	$mitadArreglo = (integer) $elementos/2;
	$pivote = $arreglo[$mitadArreglo];
	 do{
        while( ($A[$i] < $x) && ($j <= $der) )
        {
            $i++;
        }
 
        while( ($x < $A[$j]) && ($j > $izq) )
        {
            $j--;
        }
 
        if( $i <= $j )
        {
            $aux = $A[$i]; $A[$i] = $A[$j]; $A[$j] = $aux;
            $i++;  $j--;
        }
 
    }while( $i <= $j );
 
    if( $izq < $j )
        quicksort( $A, $izq, $j );
    if( $i < $der )
        quicksort( $A, $i, $der );
 
        return $A;
    }
}


function ordenaBurbuja()
{
	for ($i=0; $i < $elementos; $i++) 
	{ 
		for ($j=0; $j < $elementos - $i; $j++) 
		{ 
			if ($arreglo[$j]<$arreglo[$j+1]) 
			{
				$paso = $arreglo[$j+1];
				$arreglo[$j+1]  = $arreglo[$j]
				$arreglo[$j] = $paso;
			}
		}
	}
}

function llenaArreglo($elementos)
{
	for ($i=0; $i < $elementos ; $i++) 
	{ 
		$valor = rand(1,100);
		$arreglo[i] = $valor;
	}

}