<?php
include 'conexion.php';
if(isset($_POST['id'], $_POST['accion'])){
    $id = $_POST['id'];
    $accion = $_POST['accion']; 
    $conn->query("UPDATE solicitudes SET estado='$accion' WHERE id=$id");
}
header("Location: mostrar.php");
exit;
?>
