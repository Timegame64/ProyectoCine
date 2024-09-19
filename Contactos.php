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
    <link rel="stylesheet" href="build/StyleSheet/swiper-bundle.min.css">
    <link rel="stylesheet" href="build/StyleSheet/CSS.css"> <!--modificar este css-->
    <link rel="stylesheet" href="build/StyleSheet/allStyles.css">
</head>

<body class ="body-inicio" >

    <?php
        require 'includes/funciones.php';
        incluirTemplate('header');
    ?>

    <!--Donde nos encontramos?-->
    <div class="seccion5s">
        <h2 class="textH2dwn"></h2>
    </div>
    <!--PRIMER ANUNCIO-->
    <div class="seccion2" >
        <div class="img1">
            
        </div>
        <div class="text1">
            <h3 class="textH3" style="color: #be12c1;">Descripcion:</h3><h4 class="textH4">Cine Galaxy es una experiencia cinematográfica de otro mundo, ubicado en el epicentro de la diversión y la cultura. Con 15 salas equipadas con la más avanzada tecnología de proyección y sonido, Cine Galaxy invita a los espectadores a sumergirse en historias y mundos lejanos. El diseño interior, inspirado en las maravillas del universo, complementa la magia de las películas, creando un ambiente único para disfrutar de los últimos estrenos.<br></h4>
        </div>
    </div>

    
    <!--SEGUNDO ANUNCIO-->
    <div class="seccion2">
        <div class="text2">
            <h3 class="textH3" style="color: #be12c1;">Servicios: </h3><h4 class="textH4">Proyecciones en 2D, 3D, 4DX y ScreenX.<br>Una amplia selección de snacks y bebidas, incluyendo opciones veganas y sin gluten. <br>Salas de cine privadas para eventos y celebraciones especiales. <br>Programa de membresía Galaxy con acceso a preestrenos y promociones exclusivas. <br>Lounge espacial para relajarse antes o después de la película. </h4>
        </div>
        <div class="img2">
            
        </div>
    </div>
    <!--TERCER ANUNCIO-->
    <div class="seccion2">
        <div class="img3">
            
        </div>
        <div class="text1">
            <h3 class="textH3" style="color: #be12c1;">Direccion:</h3><h4 class="textH4">Galería Cosmos, 456 Vía Láctea, Ciudad Futura. <br>
            Horarios: Abierto todos los días de 9:00 a 01:00 horas.</p></h4>
        </div>
    </div>
    <!--CUARTO ANUNCIO-->
    <div class="seccion2">
        <div class="text2">
            <h3 class="textH3" style="color: #be12c1;">Contacto:</h3><h4 class="textH4">Teléfono: +123 456 7890 <br>
            Email: info@cinegalaxy.com <br>Sitio web: www.cinegalaxy.com <br>Teléfono: +123 456 7890 <br>Email: info@cinegalaxy.com <br>Sitio web: www.cinegalaxy.com <br></h4>
        </div>
        <div class="img4">
            
        </div>
    </div>

    <div class="contactos-f">
        <center><big><h1 style="color: #be12c1;">Contactos</h1></big></center> <br>
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                <!--Primera Tarjeta-->
                <div class="card swiper-slide">
                    <div class="image-content" >
                        <span class="overlay"></span>
                        <div class="card-image">
                            <img src="build/img/anonimoH.png" alt="persona1" class="card-img">
                        </div>
                    </div>
                    <div class="card-content"  >
                        <h2 class="name" >Cesar Machicado</h2><br>
                        <p class="description" >
                            Estudiante de Informatica de la UMSA <br>
                            Materia: Programacion Web III <br>
                            Especialidad: Diseño Navbar, Footer, y Ensamblado <br>
                            Telefono: +591 78764903 <br>
                            Correo: cesarmachicado787@gmail.com <br>
                        </p>
                        <button class="button">Contactar</button>
                    </div>
                </div>
                <!--Segunda Tarjeta-->
                <div class="card swiper-slide">
                    <div class="image-content" >
                        <span class="overlay"></span>
                        <div class="card-image">
                            <img src="build/img/anonimoM.png" alt="persona1" class="card-img">
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">Rosa</h2><br>
                        <p class="description">
                            Estudiante de Informatica de la UMSA <br>
                            Materia: Programacion Web III <br>
                            Especialidad: Diseño de la Cartelera <br>
                            Telefono: +591 79672600 <br>
                            Correo: rosa796@gmail.com <br>
                        </p>
                        <button class="button">Contactar</button>
                    </div>
                </div>
                <!--Tercera Tarjeta-->
                <div class="card swiper-slide">
                    <div class="image-content" >
                        <span class="overlay"></span>
                        <div class="card-image">
                            <img src="build/img/anonimoH.png" alt="persona1" class="card-img">
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">Brandon Patti</h2><br>
                        <p class="description">
                            Estudiante de Informatica de la UMSA <br>
                            Materia: Programacion Web III <br>
                            Especialidad: Diseño de la Informacion y Contactos <br>
                            Telefono: +591 60266321 <br>
                            Correo: brandonluispatti@gmail.com <br>
                        </p>
                        <button class="button">Contactar</button>
                    </div>
                </div>
                <!--Cuarta Tarjeta-->
                <div class="card swiper-slide">
                    <div class="image-content" >
                        <span class="overlay"></span>
                        <div class="card-image">
                            <img src="build/img/anonimoH.png" alt="persona1" class="card-img">
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">Cesar Condori</h2><br>
                        <p class="description">
                            Estudiante de Informatica de la UMSA <br>
                            Materia: Programacion Web III <br>
                            Especialidad: Diseño del Blog <br>
                            Telefono: +591 60518682 <br>
                            Correo: cesarcondori605@gmail.com <br>
                        </p>
                        <button class="button">Contactar</button>
                    </div>
                </div>    
            </div>

            <br><br><br><br>

            <!-- <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div> -->
            
        </div>
    </div>

    <?php
        incluirTemplate('footer');
    ?>

    <!-- Importar swiper de js -->
    <script src="build/js/swiper-bundle.min.js"></script>
    <!-- Importar js -->
    <script src="build/js/ScriptCards.js"></script>
</body>
</html>