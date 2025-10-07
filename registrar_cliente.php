<?php 
// Recibir los datos desde Android
$nom_Cli = $_POST['nom_Cli'];
$ap_Cli = $_POST['ap_Cli'];
$am_Cli = $_POST['am_Cli'];
$dni_Cli = $_POST['dni_Cli'];
$cor_Cli = $_POST['cor_Cli'];
$cel_Cli = $_POST['cel_Cli'];
$dir_Cli = $_POST['dir_Cli'];
$user_Cli = $_POST['user_Cli'];
$pass_Cli = $_POST['pass_Cli'];

// Registrar datos en la BD
require_once("funciones_cliente.php");
$rpta = RegistrarCliente($nom_Cli,$ap_Cli,$am_Cli,$dni_Cli,$cor_Cli,$cel_Cli,$dir_Cli,$user_Cli,$pass_Cli);

// Responder al Android
if ($rpta) {
    echo "Ok";
} else {
    echo "Error";
}
?>