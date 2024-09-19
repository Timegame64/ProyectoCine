<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="build/StyleSheet/InicioCSS.css">
    <link rel="stylesheet" href="build/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <script src="build/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="build/StyleSheet/HeaderCSS.css"><!--estilo header-->
    <link rel="stylesheet" href="build/StyleSheet/FooterCSS.css"><!--estilo footer-->
    <link rel="stylesheet" href="build/StyleSheet/EditorCSS.css">
</head>
<body>
    <?php
        require 'includes/funciones.php';
        incluirTemplate('header');
    ?>
    <center><a href="admin/usuarios/logout.php" class="btn btn-success">Cerrar Sesion</a></center>
    
    <center><h1 class="letraE" style="color: white;">Menu de compras</h1></center>
    <div class="btnEditor ">
        <center>
            <button type="button" class="btn btn-outline-light e1"><a href="admin/compras/listado.php">Compras</a></button>
        </center>
    </div>

    <?php
        incluirTemplate('footer');
    ?>
</body>
</html>