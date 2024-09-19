<?php
require '../../includes/config/database.php';
$db = conectarDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_compra = $_POST['id_compra'];

    // Eliminar la compra de la base de datos
    $sql = "DELETE FROM compras WHERE ID_compra = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("i", $id_compra);
    $result = $stmt->execute();

    if ($result) {
        echo "<script>alert('La compra ha sido eliminada correctamente.');</script>";
    } else {
        echo "<script>alert('Error al eliminar la compra.');</script>";
    }

    // Redirigir de vuelta a la lista de compras
    header("Location: listado.php");
    exit();
}
?>