<!DOCTYPE html>
<html>
<style>
body {
	animation: cambiarColor 3s infinite;
}
@keyframes cambiarColor {
	0%	{background-color: rgb(200, 230, 255); }
	33%	{background-color: rgb(255, 220, 240); }
	66% {background-color: rgb(240, 255, 220); }
	100%{background-color: rgb(200, 230, 255); }
}
table{
	border-collapse: collapse;
	background: white;
}
th, td{
	border: 1px solid black;
	padding: 8px;
	text-align: center;
}
</style>
<body>
<h2>arreglo</h2>
<?php
$sucesion=array();
$valor=2;
for($a=0; $a<15; $a++){
	$sucesion[$a]=$valor;
	$valor*=2;
}
echo "<table>";
for($m=14; $m>=0; $m--){
	echo "<tr>";
	echo "<td>".$sucesion[$m]."</td>";
}
echo "</table>";