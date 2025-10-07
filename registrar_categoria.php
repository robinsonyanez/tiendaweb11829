<?php 
// Recibir los datos desde Android
$nom_categoria = $_POST['nom_cat'];

// Registrar datos en la BD
require_once("funciones_categoria.php");
$rpta = RegistrarCategoria($nom_categoria);

// Responder al Android
if ($rpta) {
    echo "Ok";
} else {
    echo "Error";
}
?>