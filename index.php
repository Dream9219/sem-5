<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>semana 5</title>
</head>
<body>

<h2>Calculadora de Promedio de Notas</h2>

<form action="" method="post">
    <label for="nombre">Nombre del estudiante:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="nota1">Nota 1:</label>
    <input type="number" id="nota1" name="nota1" min="0" max="9" step="0.1" required><br><br>

    <label for="nota2">Nota 2:</label>
    <input type="number" id="nota2" name="nota2" min="0" max="9" step="0.1" required><br><br>

    <label for="nota3">Nota 3:</label>
    <input type="number" id="nota3" name="nota3" min="0" max="9" step="0.1" required><br><br>

    <label for="nota4">Nota 4:</label>
    <input type="number" id="nota4" name="nota4" min="0" max="9" step="0.1" required><br><br>

    <label for="nota5">Nota 5:</label>
    <input type="number" id="nota5" name="nota5" min="0" max="9" step="0.1" required><br><br>

    <input type="submit" name="calcular" value="Calcular Promedio">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];
    $nota4 = $_POST["nota4"];
    $nota5 = $_POST["nota5"];

    // Validar las notas
    if ($nota1 > 9 || $nota2 > 9 || $nota3 > 9 || $nota4 > 9 || $nota5 > 9 ||
        $nota1 < 0 || $nota2 < 0 || $nota3 < 0 || $nota4 < 0 || $nota5 < 0) {
        echo "<p style='color: red;'>Error: Las notas deben ser valores entre 0 y 9.</p>";
    } else {
        // Calcular el promedio
        $promedio = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5) / 5;
        echo "<p>El promedio de notas de $nombre es: " . number_format($promedio, 2) . "</p>";
    }
}
?>

</body>
</html>
