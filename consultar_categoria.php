<?php
// Recibir el ID desde Android
$id_categoria = $_POST['id_categoria'];

// Llamar a la función
require_once("funciones_categoria.php");
$nombre = BuscarCategoria($id_categoria);

// Responder al Android
echo json_encode(["nom_categoria" => $nombre]);
?>
