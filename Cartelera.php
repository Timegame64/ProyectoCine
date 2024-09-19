<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="build/js/app.js" async></script>
    <link rel="stylesheet" href="build/StyleSheet/HeaderCSS.css">
    <link rel="stylesheet" href="build/StyleSheet/FooterCSS.css">
    <link rel="stylesheet" href="build/StyleSheet/CarteleraCSS.css">
</head>

<body id="cartelera">

    <?php
    session_start();
    require 'includes/funciones.php';
    incluirTemplate('header');
    ?>

    <br><br><br><br><br>

    <section class="contenedorC" style="background-color: transparent;">
        <!-- Contenedor de elementos -->
        <div class="contenedor-items">
            <?php
            require 'includes/config/database.php';
            $db = conectarDB();
            $query = "SELECT p.ID_pelicula, p.nombre_pelicula, p.genero_pelicula, p.imagen_pelicula, pr.ID_proyeccion, pr.fecha_hora_proyeccion, pr.precio_entrada 
                        FROM proyeccion pr
                        INNER JOIN peliculas p ON pr.ID_pelicula = p.ID_pelicula";
            $resultado = mysqli_query($db, $query);

            if ($resultado) {
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    ?>
                    <div class="item" id="agh" style="width: 220px; height: 100%;  padding: 25px;">
                        <span class="titulo-item"><?php echo $fila['nombre_pelicula']; ?></span>
                        <img src="admin/pelicula/imagenes/<?php echo $fila['imagen_pelicula']; ?>" alt="<?php echo $fila['nombre_pelicula']; ?>" class="img-item">
                        <p>Genero: <?php echo $fila['genero_pelicula']; ?></p>
                        <p>Fecha y Hora: <?php echo $fila['fecha_hora_proyeccion']; ?></p>
                        <p class="precio-item">Precio Entradas: <?php echo $fila['precio_entrada']; ?></p>
                        <button class="boton-item" data-id-proyeccion="<?php echo $fila['ID_proyeccion']; ?>" style="background-color: blue;">Comprar</button>
                    </div>
                    <?php
                }
            } else {
                echo "Error al obtener las proyecciones.";
            }
            ?>
        </div>
        <!-- Carrito de Compras -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tickets</h2>
            </div>
            <div class="carrito-items"></div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        $0.00
                    </span>
                </div>
                <!-- Formulario con la acción correcta -->
                <form method="post" action="admin/compras/registrarcompra.php">
                    <?php
                    if (isset($_SESSION['user_id'])) {
                        $ID_usuario = $_SESSION['user_id'];
                        echo '<input type="hidden" name="ID_usuario" value="' . $ID_usuario . '">';
                    } else {
                        // Si el usuario no está autenticado, redirigir al inicio de sesión
                        //header('Location: admin/usuarios/acceso.php');
                        exit;
                    }
                    ?>
                    <input type="hidden" name="metodo_pago" value="tarjeta">
                    <input type="hidden" name="items" id="itemsInput">
                    <button type="button" class="btn-pagar btn btn-dark" onclick="crearYEnviarFormulario()">Comprar <i class="fa-solid fa-bag-shopping"></i> </button>
                </form>
            </div>
        </div>
    </section>

    <br><br><br><br><br>

    <?php
    incluirTemplate('footer');
    ?>

    <script>
        function crearYEnviarFormulario() {
            var carritoItems = document.getElementsByClassName('carrito-item');
            var items = [];

            for (var i = 0; i < carritoItems.length; i++) {
                var item = carritoItems[i];
                var titulo = item.getElementsByClassName('carrito-item-titulo')[0].innerText;
                var precio = parseFloat(item.getElementsByClassName('carrito-item-precio')[0].innerText.replace('$', ''));
                var cantidad = parseInt(item.getElementsByClassName('carrito-item-cantidad')[0].value);
                var ID_proyeccion = item.getAttribute('data-id-proyeccion');

                items.push({ titulo: titulo, precio: precio, cantidad: cantidad, ID_proyeccion: ID_proyeccion });
            }

            document.getElementById('itemsInput').value = JSON.stringify(items);
            document.querySelector('form').submit();
        }

        // Event listener para añadir items al carrito
        document.querySelectorAll('.boton-item').forEach(button => {
            button.addEventListener('click', event => {
                var item = event.target.closest('.item');
                var titulo = item.querySelector('.titulo-item').innerText;
                var precio = parseFloat(item.querySelector('.precio-item').innerText.replace('Precio Entradas: $', ''));
                var ID_proyeccion = event.target.getAttribute('data-id-proyeccion');

                var carritoItems = document.querySelector('.carrito-items');
                var carritoItem = document.createElement('div');
                carritoItem.classList.add('carrito-item');
                carritoItem.setAttribute('data-id-proyeccion', ID_proyeccion);
                carritoItem.innerHTML = `
                    <span class="carrito-item-titulo">${titulo}</span>
                    <span class="carrito-item-precio">$${precio}</span>
                    <input type="number" class="carrito-item-cantidad" value="1" min="1">
                    <button class="btn-remove">Eliminar</button>
                `;
                carritoItems.appendChild(carritoItem);

                actualizarTotal();

                carritoItem.querySelector('.btn-remove').addEventListener('click', event => {
                    carritoItem.remove();
                    actualizarTotal();
                });

                carritoItem.querySelector('.carrito-item-cantidad').addEventListener('change', actualizarTotal);
            });
        });

        function actualizarTotal() {
            var total = 0;
            var carritoItems = document.getElementsByClassName('carrito-item');

            for (var i = 0; i < carritoItems.length; i++) {
                var item = carritoItems[i];
                var precio = parseFloat(item.getElementsByClassName('carrito-item-precio')[0].innerText.replace('$', ''));
                var cantidad = parseInt(item.getElementsByClassName('carrito-item-cantidad')[0].value);
                total += precio * cantidad;
            }

            document.querySelector('.carrito-precio-total').innerText = '$' + total.toFixed(2);
        }<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="build/js/app.js" async></script>
    <link rel="stylesheet" href="build/StyleSheet/HeaderCSS.css">
    <link rel="stylesheet" href="build/StyleSheet/FooterCSS.css">
    <link rel="stylesheet" href="build/StyleSheet/CarteleraCSS.css">
</head>

<body id="cartelera">

    <?php
    session_start();
    require 'includes/funciones.php';
    incluirTemplate('header');
    ?>

    <br><br><br><br><br>

    <section class="contenedorC" style="background-color: transparent;">
        <!-- Contenedor de elementos -->
        <div class="contenedor-items">
            <?php
            require 'includes/config/database.php';
            $db = conectarDB();
            $query = "SELECT p.ID_pelicula, p.nombre_pelicula, p.genero_pelicula, p.imagen_pelicula, pr.ID_proyeccion, pr.fecha_hora_proyeccion, pr.precio_entrada 
                        FROM proyeccion pr
                        INNER JOIN peliculas p ON pr.ID_pelicula = p.ID_pelicula";
            $resultado = mysqli_query($db, $query);

            if ($resultado) {
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    ?>
                    <div class="item" id="agh" style="width: 220px; height: 100%;  padding: 25px;">
                        <span class="titulo-item"><?php echo $fila['nombre_pelicula']; ?></span>
                        <img src="admin/pelicula/imagenes/<?php echo $fila['imagen_pelicula']; ?>" alt="<?php echo $fila['nombre_pelicula']; ?>" class="img-item">
                        <p>Genero: <?php echo $fila['genero_pelicula']; ?></p>
                        <p>Fecha y Hora: <?php echo $fila['fecha_hora_proyeccion']; ?></p>
                        <p class="precio-item">Precio Entradas: <?php echo $fila['precio_entrada']; ?></p>
                        <button class="boton-item" data-id-proyeccion="<?php echo $fila['ID_proyeccion']; ?>" style="background-color: blue;">Comprar</button>
                    </div>
                    <?php
                }
            } else {
                echo "Error al obtener las proyecciones.";
            }
            ?>
        </div>
        <!-- Carrito de Compras -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tickets</h2>
            </div>
            <div class="carrito-items"></div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        $0.00
                    </span>
                </div>
                <!-- Formulario con la acción correcta -->
                <form method="post" action="admin/compras/registrarcompra.php">
                    <?php
                    if (isset($_SESSION['user_id'])) {
                        $ID_usuario = $_SESSION['user_id'];
                        echo '<input type="hidden" name="ID_usuario" value="' . $ID_usuario . '">';
                    } else {
                        // Si el usuario no está autenticado, redirigir al inicio de sesión
                        header('Location: admin/usuarios/acceso.php');
                        exit;
                    }
                    ?>
                    <input type="hidden" name="metodo_pago" value="tarjeta">
                    <input type="hidden" name="items" id="itemsInput">
                    <button type="button" class="btn-pagar btn btn-dark" onclick="crearYEnviarFormulario()">Comprar <i class="fa-solid fa-bag-shopping"></i> </button>
                </form>
            </div>
        </div>
    </section>

    <br><br><br><br><br>

    <?php
    incluirTemplate('footer');
    ?>

    <script>
        function crearYEnviarFormulario() {
            var carritoItems = document.getElementsByClassName('carrito-item');
            var items = [];

            for (var i = 0; i < carritoItems.length; i++) {
                var item = carritoItems[i];
                var titulo = item.getElementsByClassName('carrito-item-titulo')[0].innerText;
                var precio = parseFloat(item.getElementsByClassName('carrito-item-precio')[0].innerText.replace('$', ''));
                var cantidad = parseInt(item.getElementsByClassName('carrito-item-cantidad')[0].value);
                var ID_proyeccion = item.getAttribute('data-id-proyeccion');

                items.push({ titulo: titulo, precio: precio, cantidad: cantidad, ID_proyeccion: ID_proyeccion });
            }

            document.getElementById('itemsInput').value = JSON.stringify(items);
            document.querySelector('form').submit();
        }

        // Event listener para añadir items al carrito
        document.querySelectorAll('.boton-item').forEach(button => {
            button.addEventListener('click', event => {
                var item = event.target.closest('.item');
                var titulo = item.querySelector('.titulo-item').innerText;
                var precio = parseFloat(item.querySelector('.precio-item').innerText.replace('Precio Entradas: $', ''));
                var ID_proyeccion = event.target.getAttribute('data-id-proyeccion');

                var carritoItems = document.querySelector('.carrito-items');
                var carritoItem = document.createElement('div');
                carritoItem.classList.add('carrito-item');
                carritoItem.setAttribute('data-id-proyeccion', ID_proyeccion);
                carritoItem.innerHTML = `
                    <span class="carrito-item-titulo">${titulo}</span>
                    <span class="carrito-item-precio">$${precio}</span>
                    <input type="number" class="carrito-item-cantidad" value="1" min="1">
                    <button class="btn-remove">Eliminar</button>
                `;
                carritoItems.appendChild(carritoItem);

                actualizarTotal();

                carritoItem.querySelector('.btn-remove').addEventListener('click', event => {
                    carritoItem.remove();
                    actualizarTotal();
                });

                carritoItem.querySelector('.carrito-item-cantidad').addEventListener('change', actualizarTotal);
            });
        });

        function actualizarTotal() {
            var total = 0;
            var carritoItems = document.getElementsByClassName('carrito-item');

            for (var i = 0; i < carritoItems.length; i++) {
                var item = carritoItems[i];
                var precio = parseFloat(item.getElementsByClassName('carrito-item-precio')[0].innerText.replace('$', ''));
                var cantidad = parseInt(item.getElementsByClassName('carrito-item-cantidad')[0].value);
                total += precio * cantidad;
            }

            document.querySelector('.carrito-precio-total').innerText = '$' + total.toFixed(2);
        }
    </script>
</body>

</html>