<?php
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

$rebaja = $precio * 0.05;
$nuevoPrecio = $precio - $rebaja;

$importeCompra = $nuevoPrecio * $cantidad;

$descuento = $importeCompra * 0.07;

$importePagar = $importeCompra - $descuento;

$caramelosObsequio = $cantidad * 2;

echo "<h2>Resultados:</h2>";
echo "Nuevo precio de la gaseosa: S/. " . $nuevoPrecio . "<br>";
echo "Importe de la compra: S/. " . $importeCompra . "<br>";
echo "Importe del descuento: S/. " . $descuento . "<br>";
echo "Importe a pagar: S/. " . $importePagar . "<br>";
echo "Cantidad de caramelos de obsequio: " . $caramelosObsequio . "<br>";
?>
