<?php 
header('Content-Type: application/json');
require_once("funciones_proveedor.php");
$rpta = ListarProveedor();
echo json_encode($rpta);
?>