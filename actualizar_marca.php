<?php
include "Conexion.php"; // Asegúrate que esta conexión sea válida

if(isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['col'])) {

    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $col = $_POST['col'];

    $sql = "UPDATE marca SET 
                nom_marca = '$nom',
                marcacol = '$col'

            WHERE id_marca = $id";

    if(mysqli_query($conex, $sql)){
        echo "success";
    } else {
        echo "error";
    }

} else {
    echo "falta_parametros";
}
?>
