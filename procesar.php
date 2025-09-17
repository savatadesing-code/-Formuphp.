<?php
// Capturar datos del formulario
$producto1 = $_POST['producto1'];
$precio1 = floatval($_POST['precio1']);
$producto2 = $_POST['producto2'];
$precio2 = floatval($_POST['precio2']);
$producto3 = $_POST['producto3'];
$precio3 = floatval($_POST['precio3']);

// Calcular suma
$suma = $precio1 + $precio2 + $precio3;

// Calcular descuento del 16%
$descuento = $suma * 0.16;
$total = $suma - $descuento;

// Mostrar resultados
echo "<h2>Resumen de la compra</h2>";
echo "<p><strong>Producto 1:</strong> $producto1 - $" . number_format($precio1, 2) . "</p>";
echo "<p><strong>Producto 2:</strong> $producto2 - $" . number_format($precio2, 2) . "</p>";
echo "<p><strong>Producto 3:</strong> $producto3 - $" . number_format($precio3, 2) . "</p>";
echo "<hr>";
echo "<p><strong>Suma de precios:</strong> $" . number_format($suma, 2) . "</p>";
echo "<p><strong>Descuento (16%):</strong> -$" . number_format($descuento, 2) . "</p>";
echo "<h3>Total a pagar: $" . number_format($total, 2) . "</h3>";
?>
