<?php
include 'conexion.php';

$estado = null;
$mensaje = "";

if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
    $sql = "SELECT * FROM solicitudes WHERE nombre='$nombre' ORDER BY fecha_solicitud DESC LIMIT 1";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $estado = $result->fetch_assoc();
    } else {
        $mensaje = "No se encontró ninguna solicitud con ese nombre.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consultar Estado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Consultar Estado de Vacaciones</h1>
<p><a href="index.php">Volver al sitio</a></p>

<form method="POST" action="estado.php" style="max-width:400px; margin:auto;">
    <label for="nombre">Nombre del empleado:</label>
    <input type="text" name="nombre" id="nombre" required>
    <button type="submit">Consultar</button>
</form>

<?php if($estado): ?>
    <div style="background:#fff; padding:20px; margin:20px auto; max-width:500px;">
        <h2>Resultado:</h2>
        <p><strong>Empleado:</strong> <?= htmlspecialchars($estado['nombre']) ?></p>
        <p><strong>Días solicitados:</strong> <?= $estado['dias'] ?></p>
        <p><strong>Fecha de inicio:</strong> <?= $estado['fecha_inicio'] ?></p>
        <p><strong>Fecha de fin:</strong> <?= $estado['fecha_fin'] ?></p>
        <p><strong>Estado actual:</strong> <?= $estado['estado'] ?></p>
    </div>
<?php elseif($mensaje): ?>
    <p style="color:red; text-align:center; margin-top:20px;"><?= $mensaje ?></p>
<?php endif; ?>

</body>
</html>

