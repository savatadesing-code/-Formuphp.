<?php
// Verificar que el formulario fue enviado por POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Capturamos los datos enviados
    $producto1 = $_POST['producto1'];
    $precio1   = floatval($_POST['precio1']);

    $producto2 = $_POST['producto2'];
    $precio2   = floatval($_POST['precio2']);

    $producto3 = $_POST['producto3'];
    $precio3   = floatval($_POST['precio3']);

    // Calcular la suma de los precios
    $subtotal = $precio1 + $precio2 + $precio3;

    // Aplicar descuento del 16%
    $descuento = $subtotal * 0.16;
    $total = $subtotal - $descuento;
} else {
    echo "No se recibieron datos.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados</title>
</head>
<body>
    <h2>Resultados</h2>
    <p><strong>Producto 1:</strong> <?php echo htmlspecialchars($producto1); ?> - $<?php echo number_format($precio1, 2); ?></p>
    <p><strong>Producto 2:</strong> <?php echo htmlspecialchars($producto2); ?> - $<?php echo number_format($precio2, 2); ?></p>
    <p><strong>Producto 3:</strong> <?php echo htmlspecialchars($producto3); ?> - $<?php echo number_format($precio3, 2); ?></p>

    <hr>
    <p><strong>Subtotal:</strong> $<?php echo number_format($subtotal, 2); ?></p>
    <p><strong>Descuento (16%):</strong> -$<?php echo number_format($descuento, 2); ?></p>
    <p><strong>Total a Pagar:</strong> $<?php echo number_format($total, 2); ?></p>

    <br>
    <a href="index.html">Volver al formulario</a>
</body>
</html>

