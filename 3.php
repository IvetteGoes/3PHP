<html>
<head>
<title>HOLIS</title>
</head>
<body>

<p>
<?php
//Declarar variables
$cantidad1=$_POST["cantidad1"];
$precio1=$_POST["precio1"];
$cantidad2=$_POST["cantidad2"];
$precio2=$_POST["precio2"];
$cantidad3=$_POST["cantidad3"];
$precio3=$_POST["precio3"];

define('IVA',.16);

$multiplica1=$precio1*$cantidad1;
$multiplica2=$precio2*$cantidad2;
$multiplica3=$precio3*$cantidad3;

$subtotal=$multiplica1+$multiplica2+$multiplica3;

$iva=IVA*$subtotal;

$total=$subtotal+$iva;

echo "Total de Factura:";
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