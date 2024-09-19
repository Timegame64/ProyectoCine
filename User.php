<?php
    session_start();
    require 'includes/config/database.php';
    $db = conectarDB();

    // Verificar si el usuario está logueado
    $usuarioLogueado = false;
    $esAdmin = false;

    if (isset($_SESSION['user_id'])) {
        $userId = $_SESSION['user_id'];

        $query = "SELECT estado FROM usuarios WHERE ID_usuario = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $stmt->bind_result($estado);
        $stmt->fetch();
        $stmt->close();

        if ($estado) {
            $usuarioLogueado = true;
            $esAdmin = ($estado === 'administrador');
        }
    }

    // Redirigir según el rol del usuario
    if ($usuarioLogueado) {
        if ($esAdmin) {
            header('Location: editor.php');
            exit;
        } else {
            header('Location: cliente.php');
            exit;
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="build/StyleSheet/InicioCSS.css">
    <link rel="stylesheet" href="build/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <script src="build/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="build/StyleSheet/HeaderCSS.css"><!--estilo header-->
    <link rel="stylesheet" href="build/StyleSheet/FooterCSS.css"><!--estilo footer-->
    <link rel="stylesheet" href="build/StyleSheet/UserCSS.css">
</head>
<body>
    <?php
        require 'includes/funciones.php';
        incluirTemplate('header');
    ?>
    <div class="btnUser ">
        <center>
            <a href="admin/usuarios/crear.php" class="btn btn-outline-light e1">Crear cuenta</a>
        </center>
    </div>

    <div class="btnUser">
        <center>
            <a href="admin/usuarios/acceso.php" class="btn btn-outline-light e1">Acceder a mi cuenta</a>
        </center>
    </div>
    
    <?php
        incluirTemplate('footer');
    ?>
</body>
</html>