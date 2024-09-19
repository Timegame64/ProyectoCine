<?php
require '../../includes/config/database.php';
$db = conectarDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_empleado = $_POST['id_empleado'];

    // Actualizar el estado del empleado a "inactivo"
    $sql = "UPDATE empleados SET estado_empleado = 'inactivo' WHERE ID_empleado = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("i", $id_empleado);
    $result = $stmt->execute();

    if ($result) {
        echo "<script>alert('El estado del empleado ha sido cambiado a inactivo.');</script>";
    } else {
        echo "<script>alert('Error al cambiar el estado del empleado.');</script>";
    }

    // Redirigir de vuelta a la lista de empleados
    header("Location: listado.php");
    exit();
}
?>