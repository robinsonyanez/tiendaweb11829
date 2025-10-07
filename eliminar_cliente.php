<?php
include("Conexion.php");

if(isset($_POST["id"])) {
    $id = intval($_POST["id"]);

    $sql = "DELETE FROM cliente WHERE id_cliente = $id";
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