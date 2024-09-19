<?php
require '../../includes/config/database.php';
$db = conectarDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nom'];
    $precio = $_POST['pr'];
    $genero = $_POST['gen'];
    // $horario = $_POST['hor'];

    // Verificar si se ha subido un archivo
    if (isset($_FILES['ima']) && $_FILES['ima']['error'] === UPLOAD_ERR_OK) {
        $nombreArchivo = $_FILES['ima']['name'];
        $rutaTemporal = $_FILES['ima']['tmp_name'];
        $rutaDestino = 'imagenes/' . basename($nombreArchivo);

        // Mover el archivo a la carpeta de destino
        if (move_uploaded_file($rutaTemporal, $rutaDestino)) {
            // Insertar los datos en la base de datos incluyendo el nombre del archivo
            $con_sql = "INSERT INTO peliculas (nombre_pelicula, precio_pelicula, genero_pelicula, /*horario_pelicula,*/ imagen_pelicula, estado_pelicula)
                        VALUES ('$nombre', '$precio', '$genero', /*'$horario',*/ '$nombreArchivo', 'activo')";
            $res = mysqli_query($db, $con_sql);

            if ($res) {
                echo "<script>alert('Se registró correctamente');</script>";
                header("Location: listadop.php");
                exit();
            } else {
                echo "<script>alert('Error al registrar en la base de datos');</script>";
            }
        } else {
            echo "<script>alert('Error al mover el archivo');</script>";
        }
    } else {
        echo "<script>alert('Error en la subida del archivo');</script>";
    }
}
?>
