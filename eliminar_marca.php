<?php
include("Conexion.php");

if(isset($_POST["id"])) {
    $id = intval($_POST["id"]);

    $sql = "DELETE FROM marca WHERE id_marca = $id";
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