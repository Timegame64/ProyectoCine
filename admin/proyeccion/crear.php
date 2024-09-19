<?php
    require '../../includes/config/database.php';
    $db = conectarDB();
?>
<!-- HEADER -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Proyección</title>
    <link rel="stylesheet" href="../../build/StyleSheet/HeaderCSS.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../build/StyleSheet/FooterCSS.css">
    <script src="https://kit.fontawesome.com/6da47a7b84.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .contenedor {
            margin-top: 50px;
        }
        .formulario {
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
    </style>
</head>
<body class="bodyH">
    <header class="header">
        <div class="logoC">
            <img src="../../build/img/CineGalaxyLogoBlanco.png" alt="" width="250px">
        </div>
        <input type="checkbox" id="toggle">
        <label for="toggle"><img class="menu" src="../../build/img/menu.svg" alt="menu"></label>
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
<!-- HEADER --> 

    <br><br><br><br><br><br><br><br>
    
    <main class="contenedor seleccion">
        <div class="container">
            <center><h1 style="color: white;">Crear Proyección</h1></center>
            <center><a href="listado.php" class="btn btn-success mb-4">Volver</a></center>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="formulario p-4">
                        <form method="post" action="registrarproyeccion.php" class="formulario">
                            <div class="mb-3">
                                <label for="pelicula" class="form-label">Película</label>
                                <select name="pelicula" id="pelicula" class="form-control">
                                    <?php
                                    $query = "SELECT ID_pelicula, nombre_pelicula FROM peliculas";
                                    $resultado = mysqli_query($db, $query);
                                    while($row = mysqli_fetch_assoc($resultado)) {
                                        echo "<option value='" . $row['ID_pelicula'] . "'>" . $row['nombre_pelicula'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="fecha_hora" class="form-label">Fecha y Hora</label>
                                <input type="datetime-local" class="form-control" name="fecha_hora" id="fecha_hora" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="sala" class="form-label">Sala de Cine</label>
                                <input type="text" class="form-control" name="sala" id="sala" required>
                            </div>

                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio</label>
                                <select name="precio" id="precio" class="form-control">
                                    <?php
                                    $query = "SELECT DISTINCT precio_pelicula FROM peliculas";
                                    $resultado = mysqli_query($db, $query);
                                    while($row = mysqli_fetch_assoc($resultado)) {
                                        echo "<option value='" . $row['precio_pelicula'] . "'>" . $row['precio_pelicula'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="d-grid gap-2">
                                <input type="submit" value="Registrar Proyección" class="btn btn-secondary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <br><br><br><br><br><br><br><br>
<!-- FOOTER  FOOTER FOOTER-->
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
<!-- FOOTER  FOOTER FOOTER-->