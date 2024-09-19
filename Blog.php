<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review-Cards</title>
    <!-- Importar Css -->
    <link rel="stylesheet" href="build/StyleSheet/Blog.css">
    <link rel="stylesheet" href="build/StyleSheet/HeaderCSS.css">
    <link rel="stylesheet" href="build/StyleSheet/FooterCSS.css">
    <link rel="stylesheet" href="build/StyleSheet/Bswiper-bundle.min.css">
    <link rel="stylesheet" href="build/StyleSheet/swiper-bundle.min.css">
</head>
<body>

    <?php
        require 'includes/funciones.php';
        incluirTemplate('header');
    ?>

        <div class="container" style="background-color: transparent;">
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">                   
                        <!--Primera Targeta-->
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="build/img/casafantasma.jpg" alt="persona1" class="card-img">
                                </div>
                            </div>
                        
                            <div class="card-content">
                                <h2 class="name">Cazafantasmas: Imperio helado</h2><br>
                                <p class="description">
                                    La familia Spengler regresa al lugar donde empezó todo, al icónico parque de bomberos de Nueva York, para formar equipo con los Cazafantasmas originales. Esta vez, la amenaza es una mortal tormenta de hielo. Los nuevos Cazafantasmas junto a los veteranos deberán salvar al mundo de una segunda Edad de Hielo. <br> <br>
                                    Dirigida: por Gil Kenan <br>
                                    Reparto: Paul Rudd, Carrie Coon, Finn Wolfhard
                                    Título original:  Ghostbusters : Frozen Empire
                                    
                                </p>
                                
                            </div>
                        </div>


                        <!--Segunda Tarjeta-->
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="build/img/kungfu.jpg" alt="persona1" class="card-img">
                                </div>
                            </div>
                        
                            <div class="card-content">
                                <h2 class="name">Kung Fu Panda 4</h2><br>
                                <p class="description">
                                    Cuarta entrega de la franquicia Kung Fu Panda en la que Po, el panda experto en artes marciales, deberá proteger el Valle de la Paz de las garras de una malvada y poderosa hechicera, La Camaleona. En esta nueva aventura conocerá a Zhen, una astuta y rápida ladrona, cuyas habilidades resultarán de gran ayuda. <br> <br>
                                    Dirigida:  por Mike Mitchell (V) <br>
                                    Reparto Jack Black, Awkwafina, Viola Davis
                                </p>
                                
                            </div>
                        </div>
                        <!--Tercera Tarjeta-->
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="build/img/kong.webp" alt="persona1" class="card-img">
                                </div>
                            </div>
                        
                            <div class="card-content">
                                <h2 class="name">Godzilla y Kong: El nuevo imperio</h2><br>
                                <p class="description">
                                    Tras su último y explosivo enfrentamiento, el todopoderoso Kong y el temible Godzilla, dos de los monstruos que ahora dominan el mundo, se reencuentran para un feroz combate contra una colosal pero desconocida amenaza que se oculta en el planeta. <br> <br> 
                                    Dirigida por Adam Wingard <br>
                                    Reparto Rebecca Hall, Brian Tyree Henry, Dan Stevens <br>
                                    Título original Godzilla x Kong: The New Empire
                                </p>
                               
                            </div>
                        </div>
                        <!--Cuarta Tarjeta-->
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="build/img/imaginary.webp" alt="persona1" class="card-img">
                                </div>
                            </div>
                        
                            <div class="card-content">
                                <h2 class="name">Imaginary</h2><br>
                                <p class="description">
                                    Cuando la pequeña Alice comienza a mantener un extraño apego hacia un oso de peluche de aspecto adorable llamado Chauncey, poco a poco, sus juegos irán volviéndose más siniestros y peligrosos. Muy pronto su madre se dará cuenta de que Chauncey es mucho más que un inofensivo oso de peluche y esconde algo terrorífico. <br> <br>
                                    Dirigida por : Jeff Wadlow <br>
                                    Reparto : DeWanda Wise, Tom Payne (II), Taegen Burns
                                </p>
                               
                            </div>
                        </div>
                        <!--Quinta Tarjeta-->
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="build/img/oppen.jpg" alt="persona1" class="card-img">
                                </div>
                            </div>
                        
                            <div class="card-content">
                                <h2 class="name">Oppenheimer</h2><br>
                                <p class="description">
                                    Compré una cama con almacenamiento integrado y estoy fascinada. La atención personalizada hizo que todo fuera muy fácil. ¡Gracias por hacer mi sueño de decoración realidad! <br> <br>
                                    Dirigida por : Christopher Nolan <br>
                                    Reparto : Cillian Murphy, Emily Blunt, Matt Damon
                                </p>
                               
                            </div>
                        </div>
                        <!--Sexta Tarjeta-->
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="build/img/days.jpg" alt="persona1" class="card-img">
                                </div>
                            </div>
                        
                            <div class="card-content">
                                <h2 class="name">Perfect Days</h2><br>
                                <p class="description">
                                    Compré una cómoda para el cuarto de mi hijo y estoy muy feliz con la compra. El mueble es robusto y tiene un diseño adorable. Además, la entrega fue puntual. ¡Volveré por más muebles para el hogar! <br> <br>
                                    Dirigida por : Wim Wenders <br>
                                    Reparto : Reina Ueda, Koji Yakusho, Tokio Emoto
                                </p>
                               
                            </div>
                        </div>
                        <!--Septima Tarjeta-->
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="build/img/maes.jpg" alt="persona1" class="card-img">
                                </div>
                            </div>
                        
                            <div class="card-content">
                                <h2 class="name">El maestro que prometió el mar</h2><br>
                                <p class="description">
                                    Excelente calidad y atención al cliente. Compré una mesa de estudio y estoy impresionado con la artesanía. La madera utilizada es duradera y el diseño es moderno. ¡Definitivamente recomendaré esta carpintería! <br> <br>
                                    Dirigida por : Patricia Font <br>
                                    Reparto : Enric Auquer, Laia Costa, Luisa Gavasa
                                </p>
                                
                            </div>
                        </div>
                        <!--Octava Tarjeta-->
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="build/img/acua.jpg" alt="persona1" class="card-img">
                                </div>
                            </div>
                        
                            <div class="card-content">
                                <h2 class="name">Aquaman y el reino perdido</h2><br>
                                <p class="description">
                                    Mi experiencia en la carpintería fue fenomenal. Compré una mesa de comedor extensible y estoy impresionado por la funcionalidad y la calidad. El personal fue amable y servicial en todo momento. <br> <br>
                                    Dirigida por : James Wan <br>
                                    Reparto : Jason Momoa, Patrick Wilson, Amber Heard <br>
                                    Título original : Aquaman and the Lost Kingdom
                                </p>
                               
                            </div>
                        </div>
                        <!--Novena Tarjeta-->
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="build/img/inter.jpg" alt="persona1" class="card-img">
                                </div>
                            </div>
                        
                            <div class="card-content">
                                <h2 class="name">Interstellar</h2><br>
                                <p class="description">
                                    La carpintería hizo un trabajo excepcional en la construcción de mis estanterías personalizadas. La atención al detalle y la habilidad artesanal son evidentes. ¡Recomendaré este lugar a mis amigos y familiares! <br> <br>
                                    Fecha de re-estreno 24 de julio de 2020 <br>
                                    Dirigida por : Christopher Nolan <br>
                                    Reparto : Matthew McConaughey, Anne Hathaway, Michael Caine

                                </p>
                              
                            </div>
                        </div>
                    </div>
                    <br><br>
                </div>
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>          
</div>



            
</div>
    
        
    
</div>




    <?php
        incluirTemplate('footer');
    ?>

</body>
    <!-- Importar swiper de js -->
    <script src="build/js/Bswiper-bundle.min.js"></script>
    <!-- Importar js -->
    <script src="build/js/BScriptCards.js"></script>
</html>