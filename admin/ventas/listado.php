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




<main class="contenedor seleccion">
    <br><br><br><br><br><br><br>
    <center><a href="../../Editor.php" class="btn btn-success">Volver</a></center>
    <center><h1 style="color: white;">Lista de Ventas y Proyecciones</h1></center>
    <br><br>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <!-- <th>ID Ventas</th> -->
                <th>Fecha y Hora de Proyección</th>
                <th>Sala de Cine</th>
                <th>Nombre de la Película</th>
                <th>Imagen de la Película</th>
                <th>Total de Entradas Compradas</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require '../../includes/config/database.php';
            $db = conectarDB();

            $sql = "
                SELECT 
                    v.ID_ventas, 
                    p.fecha_hora_proyeccion, 
                    p.sala_cine, 
                    peli.nombre_pelicula, 
                    peli.imagen_pelicula,
                    IFNULL(SUM(c.nro_entradas_compradas), 0) AS total_entradas_compradas
                FROM 
                    proyeccion p
                LEFT JOIN 
                    compras c ON p.ID_proyeccion = c.ID_proyeccion
                LEFT JOIN 
                    ventas v ON c.ID_compra = v.ID_compra
                LEFT JOIN 
                    peliculas peli ON p.ID_pelicula = peli.ID_pelicula
                GROUP BY 
                    p.ID_proyeccion, v.ID_ventas, p.fecha_hora_proyeccion, p.sala_cine, peli.nombre_pelicula, peli.imagen_pelicula
                ORDER BY 
                    v.ID_ventas, p.fecha_hora_proyeccion
            ";

            $resultado = mysqli_query($db, $sql);

            while ($reg = $resultado->fetch_assoc()) {
            ?>
            <tr>
                <!-- <td> <?php //echo $reg['ID_ventas'] ?? 'N/A'; ?> </td> -->
                <td> <?php echo $reg['fecha_hora_proyeccion']; ?> </td>
                <td> <?php echo $reg['sala_cine']; ?> </td>
                <td> <?php echo $reg['nombre_pelicula']; ?> </td>
                <td> <img src="../pelicula/imagenes/<?php echo $reg['imagen_pelicula']; ?>" style="width: 100px; height: 100px; object-fit: cover;"> </td>
                <td> <?php echo $reg['total_entradas_compradas']; ?> </td>
            </tr>
            <?php
            }
            ?>  
        </tbody>
    </table>
    <br><br><br>
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