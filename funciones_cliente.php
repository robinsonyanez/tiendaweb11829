<?php 
function RegistrarCliente($nom_Cli,$ap_Cli,$am_Cli,$dni_Cli,$cor_Cli,$cel_Cli,$dir_Cli,$user_Cli,$pass_Cli)
{
    require_once("Conexion.php");

    $sql = "INSERT INTO cliente (nom_cliente, ap_cliente, am_cliente, ndoc_cliente, email_cliente, cel_cliente, dir_cliente, fn_cliente, user_cliente, pass_cliente, est_cliente) 
            VALUES ('$nom_Cli','$ap_Cli','$am_Cli','$dni_Cli','$cor_Cli','$cel_Cli','$dir_Cli',NULL,'$user_Cli','$pass_Cli',1)";
    $rpta = mysqli_query($conex, $sql);

    mysqli_close($conex);

    return $rpta;
}
function ListarCliente()
{
    //Abrir conexión
    require_once("Conexion.php");

    $sql="SELECT * FROM cliente ";
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