<?php 
// Recibir los datos desde Android
$nom_marca = $_POST['nom_Marca'];
$col_marca = $_POST['col_Marca'];

// Registrar datos en la BD
require_once("funciones_marca.php");
$rpta = RegistrarMarca($nom_marca,$col_marca);

// Responder al Android
if ($rpta) {
    echo "Ok";
} else {
    echo "Error";
}
?>