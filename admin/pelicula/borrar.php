<?php
require '../../includes/config/database.php';
$db = conectarDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_pelicula = $_POST['id_pelicula'];

    // Actualizar el estado de la película a "inactivo"
    $sql = "UPDATE peliculas SET estado_pelicula = 'inactivo' WHERE ID_pelicula = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("i", $id_pelicula);
    $result = $stmt->execute();

    if ($result) {
        echo "<script>alert('El estado de la película ha sido cambiado a inactivo.');</script>";
    } else {
        echo "<script>alert('Error al cambiar el estado de la película.');</script>";
    }

    // Redirigir de vuelta a la lista de películas
    header("Location: listadop.php");
    exit();
}
?>
