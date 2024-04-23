<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>semana 5</title>
</head>
<body>
<h2>formulario</h2>

<form action="" method="post">
    <label for="codigo">Código:</label>
    <input type="text" id="codigo" name="codigo" required><br><br>

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="duracion">Duración (horas):</label>
    <input type="number" id="duracion" name="duracion" min="1" required><br><br>

    <label for="fecha_inicio">Fecha de inicio:</label>
    <input type="date" id="fecha_inicio" name="fecha_inicio" required><br><br>

    <label for="fecha_fin">Fecha de fin:</label>
    <input type="date" id="fecha_fin" name="fecha_fin" required><br><br>

    <input type="submit" value="Registrar Curso">
</form>

<?php
class Curso {
    private $codigo;
    private $nombre;
    private $duracion;
    private $fecha_inicio;
    private $fecha_fin;

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setDuracion($duracion) {
        $this->duracion = $duracion;
    }

    public function setFechaInicio($fecha_inicio) {
        $this->fecha_inicio = $fecha_inicio;
    }

    public function setFechaFin($fecha_fin) {
        $this->fecha_fin = $fecha_fin;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDuracion() {
        return $this->duracion;
    }

    public function getFechaInicio() {
        return $this->fecha_inicio;
    }

    public function getFechaFin() {
        return $this->fecha_fin;
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $curso = new Curso();

    $curso->setCodigo($_POST["codigo"]);
    $curso->setNombre($_POST["nombre"]);
    $curso->setDuracion($_POST["duracion"]);
    $curso->setFechaInicio($_POST["fecha_inicio"]);
    $curso->setFechaFin($_POST["fecha_fin"]);

   
    echo "<h2>Información del Curso</h2>";
    echo "Código: " . $curso->getCodigo() . "<br>";
    echo "Nombre: " . $curso->getNombre() . "<br>";
    echo "Duración: " . $curso->getDuracion() . " horas<br>";
    echo "Fecha de inicio: " . $curso->getFechaInicio() . "<br>";
    echo "Fecha de fin: " . $curso->getFechaFin() . "<br>";
}
?>
</body>
</html>