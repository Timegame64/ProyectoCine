<?php
require '../../includes/config/database.php';
$db = conectarDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_proyeccion = $_POST['id_proyeccion'];

    // Eliminar la proyección de la base de datos
    $sql = "DELETE FROM proyeccion WHERE ID_proyeccion = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("i", $id_proyeccion);
    $result = $stmt->execute();

    if ($result) {
        echo "<script>alert('La proyección ha sido eliminada correctamente.');</script>";
    } else {
        echo "<script>alert('Error al eliminar la proyección.');</script>";
    }

    // Redirigir de vuelta a la lista de proyecciones
    header("Location: listado.php");
    exit();
}
?>