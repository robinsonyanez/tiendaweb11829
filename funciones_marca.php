<?php 
function RegistrarMarca($nom_marca,$col_marca)
{
    require_once("Conexion.php");

    $sql = "INSERT INTO marca (nom_marca, marcacol, est_marca) 
            VALUES ('$nom_marca','$col_marca',1)";
    $rpta = mysqli_query($conex, $sql);

    mysqli_close($conex);

    return $rpta;
}
function ListarMarca()
{
    //Abrir conexión
    require_once("Conexion.php");

    $sql="SELECT * FROM marca ";
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