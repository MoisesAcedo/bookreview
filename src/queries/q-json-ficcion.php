<?php

//variable token
$token = "put your token get at api nytimes here";
//names hardcover-fiction or hardcover-nonfiction 
$peticion = "hardcover-fiction"; //this is a valid request but you can find more at api nytimes
$url="https://api.nytimes.com/svc/books/v3/lists/$peticion.json?api-key=$token";

 //Paso 1: inicio el proceso de conexión
 $conexionUrl = curl_init();

 //Paso 2: defino las opciones de conexión
 curl_setopt($conexionUrl, CURLOPT_HEADER, 0); // No devuelva la cabecera del mensaje
 curl_setopt($conexionUrl, CURLOPT_RETURNTRANSFER, 1); // Almacene la info en la variable
 curl_setopt($conexionUrl, CURLOPT_URL, $url); // abrir la url que quieras

 //Paso 3: Crear variable que almacene la respuesta
 $respuesta = curl_exec($conexionUrl);

 //Paso 4: cerrar conexion
 curl_close($conexionUrl);

 //En este paso $respuesta es un string que almacena toda la  
 //información del json como un string
 //echo "<p>$respuesta</p>";



 //Paso 5: Convierto el string que contiene JSON a un objeto de
 //PHP (así podré acceder a los valores).
 $ficcion = json_decode($respuesta);

 //var_dump($respuestaObjeto);
?>