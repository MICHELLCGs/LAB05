<?php

$importe = $_POST['importe'];
$hijos = $_POST['hijos'];

$comision = $importe * 0.075;

$bonificacion = $hijos * 50;


$sueldoBasico = 600;
$sueldoBruto = $sueldoBasico + $comision + $bonificacion;

$descuento = $sueldoBruto * 0.11;

$sueldoNeto = $sueldoBruto - $descuento;

echo "<h2>Resultados:</h2>";
echo "Comisión: S/. " . $comision . "<br>";
echo "Bonificación por hijos en edad escolar: S/. " . $bonificacion . "<br>";
echo "Sueldo bruto: S/. " . $sueldoBruto . "<br>";
echo "Descuento: S/. " . $descuento . "<br>";
echo "Sueldo neto: S/. " . $sueldoNeto . "<br>";

?>
