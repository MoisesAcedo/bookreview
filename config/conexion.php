<?php

//variables que almacenan los valores de nuestra base de datos
$servidor = "localhost";
$usuario = "root"; //sólo utilizar en xampp
$clave = ""; //sólo utilizar en xampp
$nombreBd = "bookreview";

//realizo la conexión
$conexion = new mysqli($servidor,$usuario,$clave,$nombreBd);

//si hay un error hago un echo
if($conexion->connect_error){
    echo "<h3>ERROR: no se ha podido conectar a la base de datos.</h3>";
}



?>