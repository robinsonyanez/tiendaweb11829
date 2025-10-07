<?php 
header('Content-Type: application/json');
require_once("funciones_categoria.php");
$rpta = ListarCategoria();
echo json_encode($rpta);
?>