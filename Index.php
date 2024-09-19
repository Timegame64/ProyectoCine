<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="build/StyleSheet/InicioCSS.css">
    <link rel="stylesheet" href="build/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="build/StyleSheet/HeaderCSS.css"><!--estilo header-->
    <link rel="stylesheet" href="build/StyleSheet/FooterCSS.css"><!--estilo footer-->
    <script src="build/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="build/StyleSheet/allStyles.css">
</head>

<body class ="body-inicio">
    
    <?php
        require 'includes/funciones.php';
        incluirTemplate('header');
    ?>

    <!--CARRUSEL-->
    <div class="seccion1">
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="build/img/Salas.png" class="d-block w-100" alt="..." id="imgCarr">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="10000">
                        <img src="build/img/dune2.png" class="d-block w-100" alt="..." id="imgCarr">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="build/img/kfpanda4.jpeg" class="d-block w-100" alt="..."id="imgCarr">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="build/img/oppenheimer.jpg" class="d-block w-100" alt="..."id="imgCarr">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="build/img/avatar.jpeg" class="d-block w-100" alt="..."id="imgCarr">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="build/img/poord.png" class="d-block w-100" alt="..."id="imgCarr">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
        </div>
    </div>

<br><br><br>
    
    <div class="promocion">
        <hr><span>Promociones</span><hr>
    </div>

    <div class="promo">
        <div class="container">
            <div class="caja">
                <img src="build/img/foto.jpeg" alt="" width="100%" height="100%" class="imagen" >
            </div>

            <div class="caja1">
                <img src="build/img/lis.jpeg" alt="" width="100%" height="100%" class="imagen"  >
            </div>
        </div>
    </div>

    <br><br>

    <div class="promocion">
        <hr><span>Estrenos</span> <hr>
    </div>

    <br><br>

    <div class="estrenos">
        <div class="contenedor">
            <div class="cajas">
                <img src="build/img/1.jpg" alt="" class="im">
            </div>
            <div class="caja2">
            <img src="build/img/2.jpg" alt="" class="im">
            </div>
            <div class="caja3">
            <img src="build/img/3.jpg" alt="" class="im">
            </div>
            <div class="caja4">
            <img src="build/img/4.jpg" alt="" class="im">
            </div>
        </div>
    </div>

<br><br><br><br><br>

    <h2 class="textH2">Explora nuestras modernas instalaciones, equipadas con las salas más avanzadas y las mejores comodidades de la ciudad</h2>

<br><br><br>
    <!-- Algunas amenidades del cine -->
    <div class="seccion2">
        <div class="img1">
            
        </div>
        <div class="text1">
        <h3 class="textH3" style="color: #be12c1;">Sala IMAX:</h3>
            <h4 class="textH4">Ofrece una experiencia cinematográfica inmersiva con tecnología de proyección de alta definición y sonido envolvente, para que los espectadores se sumerjan completamente en las películas.</h4>
        </div>
    </div>
    <div class="seccion2">
        <div class="text2">
            <h3 class="textH3"style="color: #be12c1;" >Butacas VIP: </h3><h4 class="textH4">Disfruta de un nivel de comodidad excepcional con nuestras butacas VIP, diseñadas para brindar máximo confort durante la proyección de las películas más esperadas.</h4>
        </div>
        <div class="img2">
            
        </div>
    </div>
    <div class="seccion2">
        <div class="img3">
            
        </div>
        <div class="text1">
            <h3 class="textH3" style="color: #be12c1;">Cafetería y Snack Bar:</h3><h4 class="textH4">Completa tu experiencia cinematográfica con una visita a nuestra cafetería y snack bar, donde podrás disfrutar de una amplia variedad de bebidas, palomitas de maíz, nachos y otros aperitivos antes o después de la película.</h4>
        </div>
    </div>
    <div class="seccion2">
        <div class="text2">
            <h3 class="textH3" style="color: #be12c1;">Eventos Especiales y Proyecciones Temáticas:</h3><h4 class="textH4">En CINE GALAXY, ofrecemos eventos especiales y proyecciones temáticas para que cada visita sea única. Desde estrenos exclusivos hasta maratones de sagas cinematográficas, siempre hay algo emocionante que descubrir en nuestra cartelera.</h4>
        </div>
        <div class="img4">
            
        </div>
    </div>
    <!-- Ubicacion -->
    <div class="seccion3">
        <h2 class="textH2dwn" style="color: white;">¿Donde nos encontramos?</h2>
        <button type="button" class="btn btn-outline-light" id="btn-contacto"onclick=""><a href="Contactos.php" style="text-decoration: none;">Contáctanos</a></button>
    </div>
    <div class="seccion4">
        <h2 class="textH2dwn" style="color: white;">¿Quieres venir el fin de semana?</h2>
        <button type="button" class="btn btn-outline-light" id="btn-contacto"onclick=""><a href="Cartelera.php" style="text-decoration: none;">Reserva tu entrada</a></button>
    </div>

    
    <?php
        incluirTemplate('footer');
    ?>
    
</body>
</html>