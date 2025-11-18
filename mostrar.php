<?php
include 'conexion.php';
$result = $conn->query("SELECT * FROM solicitudes ORDER BY fecha_solicitud DESC");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Solicitudes - Panel</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Panel de Solicitudes</h1>
<p><a href="index.php">Volver al sitio</a></p>
<table>
  <tr>
    <th>ID</th>
    <th>Empleado</th>
    <th>Días</th>
    <th>Inicio</th>
    <th>Fin</th>
    <th>Solicitud</th>
    <th>Estado</th>
    <th>Acciones</th>
  </tr>
  <?php while($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= htmlspecialchars($row['nombre']) ?></td>
      <td><?= $row['dias'] ?></td>
      <td><?= $row['fecha_inicio'] ?></td>
      <td><?= $row['fecha_fin'] ?></td>
      <td><?= $row['fecha_solicitud'] ?></td>
      <td><?= $row['estado'] ?></td>
      <td>
        <?php if ($row['estado'] === 'Pendiente'): ?>
          <form method="post" action="aprobar.php" style="display:inline;">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="hidden" name="accion" value="Aprobada">
            <button type="submit">Aprobar</button>
          </form>
          <form method="post" action="aprobar.php" style="display:inline;">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="hidden" name="accion" value="Rechazada">
            <button type="submit" style="color:red;">Rechazar</button>
          </form>
        <?php else: ?>
          <?= $row['estado'] ?>
        <?php endif; ?>
      </td>
    </tr>
  <?php endwhile; ?>
</table>
</body>
</html>
<?php $conn->close(); ?>
