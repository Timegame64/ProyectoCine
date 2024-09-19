<?php
require '../../includes/config/database.php';
$db = conectarDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ID_usuario = $_POST['ID_usuario'];

    // Verificar existencia de ID_usuario
    $user_check_query = "SELECT * FROM usuarios WHERE ID_usuario = ?";
    $stmt_check = $db->prepare($user_check_query);
    $stmt_check->bind_param('i', $ID_usuario);
    $stmt_check->execute();
    $result = $stmt_check->get_result();

    if ($result->num_rows == 0) {
        echo "Error: El usuario con ID_usuario $ID_usuario no existe en la base de datos.";
        exit;
    }

    // El resto del código
    $metodo_pago = $_POST['metodo_pago'];
    $estado_compra = 'pendiente'; // Estado por defecto
    $items = json_decode($_POST['items'], true);

    $stmt = $db->prepare("INSERT INTO compras (ID_usuario, ID_proyeccion, nro_entradas_compradas, precio_total, metodo_pago, estado_compra) 
                        VALUES (?, ?, ?, ?, ?, ?)");

    foreach ($items as $item) {
        $ID_proyeccion = $item['ID_proyeccion'];
        $nro_entradas_compradas = $item['cantidad'];
        $precio_total = $item['precio'] * $nro_entradas_compradas;

        $stmt->bind_param('iiidss', $ID_usuario, $ID_proyeccion, $nro_entradas_compradas, $precio_total, $metodo_pago, $estado_compra);

        if (!$stmt->execute()) {
            echo "Error: No se pudo registrar la compra en la base de datos: " . $stmt->error;
            exit;
        }
    }
    header("Location: ../../Cartelera.php");
    exit;
} else {
    echo "Error: No se recibieron los datos esperados";
}
?>