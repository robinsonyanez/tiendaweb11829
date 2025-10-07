<?php 
function RegistrarProveedor($nom_Prov,$ruc_Prov,$cel_Prov,$cor_Prov,$dir_Prov)
{
    require_once("Conexion.php");

    $sql = "INSERT INTO proveedor (nom_proveedor, ruc_proveedor, cel_proveedor, email_proveedor, dir_proveedor, est_proveedor) 
            VALUES ('$nom_Prov','$ruc_Prov','$cel_Prov','$cor_Prov','$dir_Prov',1)";
    $rpta = mysqli_query($conex, $sql);

    mysqli_close($conex);

    return $rpta;
}
function ListarProveedor()
{
    //Abrir conexión
    require_once("Conexion.php");

    $sql="SELECT * FROM proveedor ";
    $res = mysqli_query($conex,$sql);

    $data = array();
    while($row = mysqli_fetch_array($res,MYSQLI_ASSOC))
    {
        $data[] = $row;
    }

    //Cerrar conexión
    mysqli_close($conex);

    return $data;
}
?>