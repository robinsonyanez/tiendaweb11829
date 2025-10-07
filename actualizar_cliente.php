<?php
include "Conexion.php"; // Asegúrate que esta conexión sea válida

if(isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['ap'])&& isset($_POST['am'])&& isset($_POST['dni'])&& isset($_POST['cor'])&& isset($_POST['cel'])&& isset($_POST['dir'])&& isset($_POST['user'])&& isset($_POST['pass'])) {

    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $ap = $_POST['ap'];
    $am = $_POST['am'];
    $dni = $_POST['dni'];
    $cor = $_POST['cor'];
    $cel = $_POST['cel'];
    $dir = $_POST['dir'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "UPDATE cliente SET 
                nom_cliente = '$nom',
                ap_cliente = ' $ap',
                am_cliente = ' $am',
                ndoc_cliente = '$dni',
                email_cliente = '$cor',
                cel_cliente = '$cel',
                dir_cliente = '$dir',
                user_cliente = '$user',
                pass_cliente = '$pass'

            WHERE id_cliente = $id";

    if(mysqli_query($conex, $sql)){
        echo "success";
    } else {
        echo "error";
    }

} else {
    echo "falta_parametros";
}
?>
