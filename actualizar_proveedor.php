<?php
include "Conexion.php"; // Asegúrate que esta conexión sea válida

if(isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['ruc']) && isset($_POST['cel']) && isset($_POST['cor']) && isset($_POST['dir'])) {

    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $ruc = $_POST['ruc'];
    $cel = $_POST['cel'];
    $cor = $_POST['cor'];
    $dir = $_POST['dir'];

    $sql = "UPDATE proveedor SET 
                nom_proveedor = '$nom',
                ruc_proveedor = '$ruc',
                cel_proveedor = '$cel',
                email_proveedor = '$cor',
                dir_proveedor = '$dir'

            WHERE id_proveedor = $id";

    if(mysqli_query($conex, $sql)){
        echo "success";
    } else {
        echo "error";
    }

} else {
    echo "falta_parametros";
}
?>
