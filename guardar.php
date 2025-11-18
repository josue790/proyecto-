<?php
include 'conexion.php';
$nombre = $_POST['nombre'];
$dias = $_POST['dias'];
$fechaInicio = $_POST['fechaInicio'];
$fechaFin = date('Y-m-d', strtotime($fechaInicio . ' + ' . $dias . ' days'));
$sql = "INSERT INTO solicitudes (nombre, dias, fecha_inicio, fecha_fin, estado)
        VALUES ('$nombre', $dias, '$fechaInicio', '$fechaFin', 'Pendiente')";
if ($conn->query($sql) === TRUE) {
    echo "<h2>Confirmación</h2>";
    echo "<p><strong>Empleado:</strong> $nombre</p>";
    echo "<p><strong>Días solicitados:</strong> $dias</p>";
    echo "<p><strong>Fecha de inicio:</strong> $fechaInicio</p>";
    echo "<p><strong>Fecha de finalización:</strong> $fechaFin</p>";
    echo "<p style='color: orange;'><strong>Estado:</strong> Pendiente de aprobación</p>";
    echo "<a href='index.php'>Volver al formulario</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
