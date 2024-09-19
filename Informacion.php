<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review-Cards</title>
    <!-- Importar Css -->
    <link rel="stylesheet" href="build/StyleSheet/CSS.css">
    <link rel="stylesheet" href="build/StyleSheet/InicioCSS.css">
    <!-- Importar swiper de css -->
    <link rel="stylesheet" href="build/StyleSheet/swiper-bundle.min.css">
    <link rel="stylesheet" href="build/StyleSheet/HeaderCSS.css"><!--estilo header-->
    <link rel="stylesheet" href="build/StyleSheet/FooterCSS.css"><!--estilo footer-->
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <?php incluirTemplate('header');   ?>

    <div class="slide-container swiper">
        <br><center><big><h1>Información</h1></big></center> <br>
        <h2>Descripcion:</h2>
        <big><p>Cine Galaxy es una experiencia cinematográfica de otro mundo, ubicado en el epicentro de la diversión y la cultura. Con 15 salas equipadas con la más avanzada tecnología de proyección y sonido, Cine Galaxy invita a los espectadores a sumergirse en historias y mundos lejanos. El diseño interior, inspirado en las maravillas del universo, complementa la magia de las películas, creando un ambiente único para disfrutar de los últimos estrenos.</p></big> <br>
        <h2>Servicios:</h2>
        <big><p>Proyecciones en 2D, 3D, 4DX y ScreenX. <br>
            Una amplia selección de snacks y bebidas, incluyendo opciones veganas y sin gluten. <br>
            Salas de cine privadas para eventos y celebraciones especiales. <br>
            Programa de membresía Galaxy con acceso a preestrenos y promociones exclusivas. <br>
            Lounge espacial para relajarse antes o después de la película. <br>
            </p></big>
        <br>
        <h2>Direccion:</h2>
        <big><p>Galería Cosmos, 456 Vía Láctea, Ciudad Futura. <br>
            Horarios: Abierto todos los días de 9:00 a 01:00 horas.</p></big> <br>
        <h2>Contacto:</h2>
        <big><p>Teléfono: +123 456 7890 <br>
            Email: info@cinegalaxy.com <br>
            Sitio web: www.cinegalaxy.com <br>
            </p></big> <br><br>

        <center><big><h1>Contactos</h1></big></center> <br>
        
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                <!--Primera Tarjeta-->
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="build/img/anonimoH.png" alt="persona1" class="card-img">
                        </div>
                    </div>
                
                    <div class="card-content">
                        <h2 class="name">Cesar Machicado</h2><br>
                        <p class="description">
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
                    <div class="image-content">
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
                    <div class="image-content">
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
                    <div class="image-content">
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
                
                <!--Quinta Tarjeta-->
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="build/img/anonimoH.png" alt="persona1" class="card-img">
                        </div>
                    </div>
                
                    <div class="card-content">
                        <h2 class="name">Cristian</h2><br>
                        <p class="description">
                            Estudiante de Informatica de la UMSA <br>
                            Materia: Programacion Web III <br>
                            Especialidad: Diseño de la Tienda Online <br>
                            Telefono: +591 75288799 <br>
                            Correo: cristian752@gmail.com <br>
                        </p>
                        <button class="button">Contactar</button>
                    </div>
                </div>
                
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
            <br><br>
        </div>
    </div>
</body>
<?php include 'includes/footer.php'; ?>

    <!-- Importar swiper de js -->
    <script src="build/js/swiper-bundle.min.js"></script>
    <!-- Importar js -->
    <script src="build/js/ScriptCards.js"></script>

</html>