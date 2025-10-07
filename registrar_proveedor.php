<?php 
// Recibir los datos desde Android
$nom_Prov = $_POST['nom_Prov'];
$ruc_Prov = $_POST['ruc_Prov'];
$cel_Prov = $_POST['cel_Prov'];
$cor_Prov = $_POST['cor_Prov'];
$dir_Prov = $_POST['dir_Prov'];

// Registrar datos en la BD
require_once("funciones_proveedor.php");
$rpta = RegistrarProveedor($nom_Prov,$ruc_Prov,$cel_Prov,$cor_Prov,$dir_Prov);

// Responder al Android
if ($rpta) {
    echo "Ok";
} else {
    echo "Error";
}
?>