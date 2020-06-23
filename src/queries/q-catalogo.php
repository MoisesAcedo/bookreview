<?php



if (empty($_GET['filtro'])) {
    //echo 'vacio';
    $consulta = "SELECT * FROM libros";
}else{

if ($_GET['filtro'] == "az") {

    $consulta = "SELECT * FROM libros ORDER BY titulo ASC";
}
if ($_GET['filtro'] == "za") {

    $consulta = "SELECT * FROM libros ORDER BY titulo DESC";
}
if ($_GET['filtro'] == "mayor") {

    $consulta = "SELECT * FROM libros ORDER BY nota DESC";
}
if ($_GET['filtro'] == "menor") {
    $consulta = "SELECT * FROM libros ORDER BY nota ASC";
}
}


$resultado = $conexion->query($consulta);
?>