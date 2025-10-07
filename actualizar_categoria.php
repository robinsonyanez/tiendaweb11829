<?php
// Recibir datos desde Android
$id = $_POST['id_categoria'];
$nombre = $_POST['nom_categoria'];

// Llamar a la función
require_once("funciones_categoria.php");
$rpta = ActualizarCategoria($id, $nombre);

// Responder al Android
echo $rpta ? "Ok" : "Error";
?>