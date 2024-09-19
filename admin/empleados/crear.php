<?php
    require '../../includes/config/database.php';
    $db=conectarDB();
?>
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
<br><br><br><br><br><br><br><br><br>

    <main class="contenedor seleccion">
        <center><h1 style="color: white;">Crear Empleado</h1></center>
        <center><a href="listado.php" class="btn btn-success">Volver</a></center>
        <br><br>
        <center>
        <div class="conteiner" id="formulario">
        <!--Creamos un formulario-->
        <div class=" cont col-sm-12 col-md-4 col-lg-4 col-xl-4 bg-white py-5 px-5">
            <h2 class="centrado">Informacion general</h2>
            
            <form method="post" action="registrarempleado.php" class="formulario"enctype="multipart/form-data">
                <!--11111111111111111-->
                <div class="mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nom"id="nom" placeholder="Ingrese el nombre(s)">
                </div>
                <!--22222222222222222222-->
                <div class="mb-3">
                    <label for="" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" name="ap"id="ap"placeholder="Ingrese los apellidos">
                </div>
                <!--3333333333333333333333-->
                <div class="mb-3">
                    <label for="" class="form-label">Cargo</label>
                    <input type="text" class="form-control" name="car"id="car" placeholder="Ingrese el cargo">
                </div>
                <!--44444444444444444444444444-->
                <div class="mb-3">
                    <label for="" class="form-label">Telefono</label>
                    <input type="number" class="form-control" name="tel"id="tel" placeholder="Ingrese el numero de contacto">
                </div>
                <!--555555555555555555555555555-->
                <div class="mb-3">
                    <label for="ima" class="form-label">Imagen</label>
                    <input type="file" class="form-control" name="ima"id="ima"accept="image/jpeg, image/png">
                </div>
                <div class="d-grid gap-2"><!--Esto es para que los botones ocupen todo el ancho-->
                    <input type="submit"value="Registrar empleado"class="btn btn-secondary">
                </div>
            </form>

        </div>
        </center>
    </div>
        
    </main>
    <br><br><br><br><br><br><br><br><br>
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

<!-- admin/vendedores/registrarvendedor.php -->

