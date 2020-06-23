<?php

$consulta = "SELECT *
FROM libros
WHERE destacado = 1
";

$resultado = $conexion->query($consulta);

?>