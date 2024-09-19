<?php
require '../../includes/config/database.php';
$db = conectarDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_usuario = $_POST['id_usuario'];

    // Eliminar el usuario de la base de datos
    $sql = "DELETE FROM usuarios WHERE ID_usuario = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("i", $id_usuario);
    $result = $stmt->execute();

    if ($result) {
        echo "<script>alert('El usuario ha sido eliminado correctamente.');</script>";
    } else {
        echo "<script>alert('Error al eliminar el usuario.');</script>";
    }

    // Redirigir de vuelta a la lista de usuarios
    header("Location: listado.php");
    exit();
}
?>