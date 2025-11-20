<?php
session_start();
include 'conexion.php';

if(isset($_POST['usuario'], $_POST['password'])){
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";
    $result = $conn->query($sql);

    if($result && $result->num_rows == 1){
        $row = $result->fetch_assoc();
        $_SESSION['usuario'] = $row['usuario'];
        $_SESSION['tipo'] = $row['tipo'];

        if($row['tipo'] == 'empleado'){
            header("Location: index.php"); // empleado va al formulario
            exit;
        } else {
            header("Location: mostrar.php"); // admin va al panel
            exit;
        }
    } else {
        $error = "Usuario o contraseña incorrecta.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div style="max-width:400px; margin:50px auto; padding:20px; background:#fff; border-radius:12px; box-shadow:0 4px 8px rgba(0,0,0,0.1); text-align:center;">
        <h2>Iniciar Sesión</h2>
        <?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <form method="POST" action="">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
