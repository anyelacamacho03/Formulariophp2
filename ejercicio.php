<?php
$producto1 = $_POST['producto1'];
$producto2 = $_POST['producto2'];
$producto3 = $_POST['producto3'];
$precio1 = $_POST['precio1'];
$precio2 = $_POST['precio2'];
$precio3 = $_POST['precio3'];
 $suma=$precio1+$precio2+$precio3

echo "LA SUMA DE LOS TRES PRODUCTOS EQUIVALE A: ".$suma;
echo "<br>";

$descuento=$suma*0.16
  
echo "EL DESCUENTO CORREESPONDE A: ".$descuento;
echo "<br>";

$totalpago=$suma-$descuento
  
echo "EL TOTAL A PAGAR ES: ".$totalpago;
echo "<br>";

?>
