<?php 
header('Content-Type: application/json');
require_once("funciones_marca.php");
$rpta = ListarMarca();
echo json_encode($rpta);
?>