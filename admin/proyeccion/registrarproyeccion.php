<?php
require '../../includes/config/database.php';
$db = conectarDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pelicula = $_POST['pelicula'];
    $fecha_hora = $_POST['fecha_hora'];
    $sala = $_POST['sala'];
    $precio = $_POST['precio'];

    $con_sql = "INSERT INTO proyeccion (ID_pelicula, fecha_hora_proyeccion, sala_cine, precio_entrada)
                VALUES ('$pelicula', '$fecha_hora', '$sala', '$precio')";
    $res = mysqli_query($db, $con_sql);

    if ($res) {
        echo "<script>alert('Proyección registrada correctamente');</script>";
        header("Location: listado.php");
        exit();
    } else {
        echo "<script>alert('Error al registrar en la base de datos');</script>";
    }
}
?>