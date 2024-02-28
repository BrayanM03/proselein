<?php

include '../conexion/database.php';
$tipo = $_POST['tipo']; 
$stmt = $con->prepare("SELECT * FROM catalogo_productos WHERE tipo = ?"); //1 Producto | 2 servicio
$stmt->bind_param('s', $tipo);
$stmt->execute();
$resultado = $stmt->get_result();
$stmt->free_result();
$stmt->close();

foreach ($resultado as $elemento){
    $data[] = $elemento;
}
$resp=array('estatus'=>true, 'data'=> $data);
echo json_encode($resp);

?>