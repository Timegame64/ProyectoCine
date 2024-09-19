<!-- Nos conectamos con la base de datos -->
<?php
    require '../../includes/config/database2.php';

    session_start();

    if(isset($_SESSION['user_id'])){
        if($results['estado'] === 'administrador'){
            header('Location: ../../Editor.php');
        }
        else{
            header('Location: ../../Cliente.php');
        }
    }

    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $records = $conn->prepare('SELECT * FROM usuarios WHERE email=:email');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $message = '';

        if((count($results) > 0) && (password_verify($_POST['password'],$results['password']))){
            $_SESSION['user_id'] = $results['ID_usuario'];
            if($results['estado'] === 'administrador'){
                header('Location: ../../Editor.php');
            }
            else{
                header('Location: ../../Cliente.php');
            }
        }else{
            echo "<script>alert('Usuario o contraseña incorrectos');</script>";
        }
    }


?>
<!-- Header -->
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
        <nav class="navigation">
            <ul>
                <li><a href="../../Index.php">Inicio</a></li>
                <li><a href="../../Cartelera.php">Cartelera</a></li>
                <li><a href="../../Blog.php">Blog</a></li>
                <li><a href="../../User.php">Usuario</a></li>
                <li><a href="../../Contactos.php">Sobre Nosotros</a></li>
            </ul>
        </nav>
    </header>
    <div class="hero"></div>
</body>
</html> 
<!-- Header -->

<br><br><br><br><br><br><br>

    <main class="contenedor seleccion">
        <center><a href="../../User.php" class="btn btn-secondary">Volver</a></center>
        <br><br>
        <center>
            <div class="conteiner" id="formulario">
                <!--Creamos un formulario-->
                <div class=" cont col-sm-12 col-md-4 col-lg-4 col-xl-4 bg-white py-5 px-5">
                        <?php if(!empty($message)): ?>
                            <p> <?= $message ?> </p>
                        <?php endif;?>
                    <h2 class="centrado">Acceder a mi cuenta</h2>
                    <!-- <form method="post" action="acceso.php" class="formulario" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="usu" id="usu" placeholder="Ingrese su usuario">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" name="con" id="con" placeholder="Ingrese su contraseña">
                        </div>
                        <div class="d-grid gap-2">
                            <input type="submit" value="Ingresar" class="btn btn-success">
                        </div>
                    </form> -->
                    <form action="acceso.php" method="post">
                            <input type="text"name="email"placeholder="Ingrese su cuenta email">
                            <input type="password"name="password"placeholder="Ingrese su contraseña">
                            <input type="submit"value="Enviar">
                    </form>
                </div>
            </div>
        </center>
    </main>

    <br><br><br><br><br><br>

<!-- Footer -->
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
<!-- Footer -->

<!-- admin/vendedores/registrarvendedor.php -->