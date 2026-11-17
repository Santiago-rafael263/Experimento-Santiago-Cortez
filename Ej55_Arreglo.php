<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset]="UTF-8">
	<title>Areglo Multidimensional de numeros pares </title>
</head>
<body>
	<h2>Arreglo multidimensional para numeros pares</h2>
<?php
	$numeros=array();
	$valor=10;
	for ($f=0; $f<4; $f++){
		for($a=0; $a<4; $a++){
			$numeros[$f][$a]=$valor;
			$valor+=2;
		}
	}
	echo "<h2>Impresion normal</h2>";
for ($f=0; $f<4; $f++)
	{for ($a=0; $a<4; $a++)
    {echo $numeros[$f][$a]. " ";}
    echo "<br>";}

echo "<br>";
echo "<h2>filas invertidas</h2>";
for ($a=0; $a<4; $a++)
	{for ($f=0; $f<4; $f++)
    {echo $numeros[$f][$a]. " ";}
    echo "<br>";}
echo "<br>";
echo "<h2>espejo</h2>";
for ($f=3; $f>=0; $f--)
	{for ($a=0; $a<4; $a++)
    {echo $numeros[$f][$a]. " ";}
    echo "<br>";}
   echo "<br>";
for ($f=0; $f<4; $f++)
	{for ($a=0; $a<4; $a++)
    {echo $numeros[$f][$a]. " ";}  
    echo "<br>";}