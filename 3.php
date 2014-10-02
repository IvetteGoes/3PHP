<html>
<head>
<title>HOLIS</title>
</head>
<body>

<p>
<?php
//Declarar variables
$cantidad1=$_POST["cantidad1"];
$descripcion1=$_POST["descripcion1"];
$precio1=$_POST["precio1"];
$cantidad2=$_POST["cantidad2"];
$descripcion2=$_POST["descripcion2"];
$precio2=$_POST["precio2"];
$cantidad3=$_POST["cantidad3"];
$descripcion3=$_POST["descripcion3"];
$precio3=$_POST["precio3"];

define('IVA',.16);

$multiplica1=$precio1*$cantidad1;
$multiplica2=$precio2*$cantidad2;
$multiplica3=$precio3*$cantidad3;

$subtotal=$multiplica1+$multiplica2+$multiplica3;

$iva=IVA*$subtotal;

$total=$subtotal+$iva;

echo "Total de Factura:","<br>";
echo $cantidad1,"	Piezas de: ", $descripcion1,"	Total: 	$", $multiplica1, "<br>";
echo $cantidad2,"	Piezas de: ", $descripcion2,"	Total: 	$", $multiplica2, "<br>";
echo $cantidad3,"	Piezas de: ", $descripcion3,"	Total: 	$", $multiplica3, "<br>";
echo "Subtotal: ";
echo $subtotal, "<br>";
echo "IVA :";
echo $iva, "<br>";
echo "TOTAL: ";
echo $total;

?>
</p>
</body>
</html>