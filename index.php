<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Productos</title>
</head>
<body>
    <h2>Formulario de Productos</h2>
    <form action="procesar.php" method="post">
        <label>Producto 1:</label>
        <input type="text" name="producto1" required>
        <label>Precio 1:</label>
        <input type="number" step="0.01" name="precio1" required><br><br>

        <label>Producto 2:</label>
        <input type="text" name="producto2" required>
        <label>Precio 2:</label>
        <input type="number" step="0.01" name="precio2" required><br><br>

        <label>Producto 3:</label>
        <input type="text" name="producto3" required>
        <label>Precio 3:</label>
        <input type="number" step="0.01" name="precio3" required><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>

