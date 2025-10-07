<?php
function RegistrarCategoria($nom_categoria)
{
    require_once("Conexion.php");

    $sql = "INSERT INTO categoria (nom_categoria, est_categoria)
            VALUES ('$nom_categoria', 1)";
    $rpta = mysqli_query($conex, $sql);

    mysqli_close($conex);

    return $rpta;
}
function ListarCategoria() 
{
    require_once("Conexion.php");

    $result = mysqli_query($conex, "SELECT * FROM categoria");
    $categorias = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $categorias[] = $row;
    }
    mysqli_close($conex);
    return $categorias;
}
function BuscarCategoria($id_categoria) 
{
    require_once("Conexion.php");

    $id = intval($id_categoria);

    if ($id > 0) {
        $result = mysqli_query($conex, "SELECT nom_categoria FROM categoria WHERE id_categoria = $id");
        $row = mysqli_fetch_assoc($result);
        mysqli_close($conex);
        return $row['nom_categoria'] ?? "";
    } else {
        mysqli_close($conex);
        return "";
    }
}

function ActualizarCategoria($id_categoria, $nom_categoria) {
    require_once("Conexion.php");

    $id = intval($id_categoria);

    if($id > 0 && !empty($nom_categoria)) {
        // Escapar caracteres especiales para seguridad
        $nombre = mysqli_real_escape_string($conex, $nom_categoria);

        $sql = "UPDATE categoria SET nom_categoria='$nombre' WHERE id_categoria=$id";
        $rpta = mysqli_query($conex, $sql);

        mysqli_close($conex);
        return $rpta; // true si se actualizó, false si hubo error
    } else {
        mysqli_close($conex);
        return false;
    }
}
?>
