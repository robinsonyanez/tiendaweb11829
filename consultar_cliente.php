<?php 
header('Content-Type: application/json');
require_once("funciones_cliente.php");
$rpta = ListarCliente();
echo json_encode($rpta);
?>