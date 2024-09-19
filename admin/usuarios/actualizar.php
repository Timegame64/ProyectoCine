<!-- ███████████████████████████████████████████████████████████████ -->
<!-- HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER-->
<!-- ███████████████████████████████████████████████████████████████ -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="../../build/StyleSheet/HeaderCSS.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="bodyH">
    <header class="header">
        <div class="logoC">
            <img src="../../build/img/CineGalaxyLogoBlanco.png" alt="" width="250px">
            <!--<img src="../build/img/CineGalaxyLogoBlanco.png" alt="" width="250px">-->
        </div>
        <input type="checkbox" id="toggle">
        <label for="toggle"><img class="menu" src="../../build/img/menu.svg" alt="menu"></label>
        <!--<label for="toggle"><img class="menu" src="../build/img/menu.svg" alt="menu"></label>-->
        <nav class="navigation">
            <ul>
                <li><a href="../../Index.php">Inicio</a></li>
                <li><a href="../../Cartelera.php">Cartelera</a></li>
                <li><a href="../../Blog.php">Blog</a></li>
                <li><a href="../../Form.php">Usuario</a></li>
                <li><a href="../../Contactos.php">Sobre Nosotros</a></li>
            </ul>
        </nav>
    </header>
    <div class="hero"></div>
</body>
</html> 
<!-- ███████████████████████████████████████████████████████████████ -->
<!-- HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER-->
<!-- ███████████████████████████████████████████████████████████████ -->
<br><br><br><br><br><br><br>

<?php 
require '../../includes/config/database.php';
$db = conectarDB();
$cod = $_GET['cod'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $estado = $_POST['estado'];

    // Hasheando la nueva contraseña antes de almacenarla
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $con_sql = "UPDATE usuarios SET email=?, password=?, estado=? WHERE ID_usuario=?";
    $stmt = $db->prepare($con_sql);
    $stmt->bind_param("sssi", $email, $hashedPassword, $estado, $cod);
    $result = $stmt->execute();

    if ($result) {
        echo "
        <script>
            alert('Registro modificado con éxito');
            window.location='listado.php';
        </script>
        ";
        header("Location: listado.php");
        exit();
    } else {
        echo "
        <script>
            alert('Error al modificar el registro');
        </script>
        ";
        header("Location: listado.php");
        exit();
    }
}
?>

<center><a href="listado.php" class="btn btn-success">Volver</a></center>
<main class="contenedor seccion">
    <center><h1 style="color: white;">Modificar Usuario</h1></center>

    <?php
    $consulta = "SELECT * FROM usuarios WHERE ID_usuario=?";
    $stmt = $db->prepare($consulta);
    $stmt->bind_param("i", $cod);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $fila = $resultado->fetch_assoc();
    ?>

    <form action="actualizar.php?cod=<?php echo $cod; ?>" method="post">
        <table class="table table-striped table-bordered table-hover cont col-sm-12 col-md-4 col-lg-4 col-xl-4 bg-white py-5 px-5">
            <tr>
                <td>Email</td>
                <td><input type="email" class="form-control" name="email" id="email" value="<?php echo $fila['email']; ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" class="form-control" name="password" id="password" value=""></td>
            </tr>
            <tr>
                <td>Estado</td>
                <td><input type="text" class="form-control" name="estado" id="estado" value="<?php echo $fila['estado']; ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" class="btn btn-primary" name="Modificar" value="Modificar"></td>
            </tr>
        </table>
    </form>
</main>

<!-- ███████████████████████████████████████████████████████████████ -->
<!-- FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER  -->
<!-- ███████████████████████████████████████████████████████████████ -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="stylesheet" href="../../build/StyleSheet/FooterCSS.css">
    <!-- Ingresamos los iconos -->
    <script src="https://kit.fontawesome.com/6da47a7b84.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--Pie de pagina-->
    <footer class="pie-pagina" style="background-color: #530c54;">
        <div class="grupo-1" >
            <div class="box" style="background-color: transparent;">
                <figure>
                <a href="#">
                <img src="../empleados/imagenes/CineGalaxyLogoBlanco.png" alt="Logo" height="">
                    <!--<img src="../build/img/CineGalaxyLogoBlanco.png" alt="Logo" height="">-->
                </a>
                </figure>
            </div>
            <div class="box" style="background-color: transparent;">
                <h2>SOBRE NOSOTROS</h2>
                <p>El Cine Galaxy te transporta a nuevas dimensiones cinematográficas con su pantalla gigante, sonido envolvente y comodidad estelar. Experimenta aventuras épicas y emociones intensas en cada proyección. ¡Descubre el universo del entretenimiento!</p>
                <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, laboriosam.</p> -->
            </div>
            <div class="box" style="background-color: transparent;">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="https://www.facebook.com/cineGalaxy" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/cinegalaxyrize/" class="fa fa-instagram"></a>
                    <a href="https://twitter.com/CineGalaxyUSA" class="fa fa-x"></a>
                    <a href="https://github.com" class="fa fa-github"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2" style="background-color: #311b34;">
            <small>&copy; 2024 <b>CINE GALAXY</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
</body>
</html>
<!-- ███████████████████████████████████████████████████████████████ -->
<!-- FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER  -->
<!-- ███████████████████████████████████████████████████████████████ -->