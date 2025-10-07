<?php
include("Conexion.php");

if(isset($_POST["id"])) {
    $id = intval($_POST["id"]);

    $sql = "DELETE FROM proveedor WHERE id_proveedor = $id";
    $res = mysqli_query($conex, $sql);

    if($res){
        echo "Eliminado";
    } else {
        echo "Error";
    }
} else {
    echo "ID no recibido";
}
?>