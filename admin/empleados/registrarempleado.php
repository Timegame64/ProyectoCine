<?php
require '../../includes/config/database.php';
$db = conectarDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n = $_POST['nom'];
    $ap = $_POST['ap'];
    $c = $_POST['car'];
    $t = $_POST['tel'];
    
    // Verificar si se ha subido un archivo
    if (isset($_FILES['ima']) && $_FILES['ima']['error'] === UPLOAD_ERR_OK) {
        $nombreArchivo = $_FILES['ima']['name'];
        $rutaTemporal = $_FILES['ima']['tmp_name'];
        $rutaDestino = 'imagenes/' . basename($nombreArchivo);

        // Mover el archivo a la carpeta de destino
        if (move_uploaded_file($rutaTemporal, $rutaDestino)) {
            // Insertar los datos en la base de datos incluyendo el nombre del archivo
            $con_sql = "INSERT INTO empleados (nombre_empleado, apellidos_empleado, cargo_empleado, telefono_empleado, imagen_empleado, estado_empleado)
                        VALUES ('$n', '$ap', '$c', '$t', '$nombreArchivo', 'activo')";
            $res = mysqli_query($db, $con_sql);

            if ($res) {
                echo "<script>alert('Se registró correctamente');</script>";
                header("Location: listado.php");
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