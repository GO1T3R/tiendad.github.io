<?php
//Crea las credenciales
$host = "localhost"; //host
$dbnombre = "esteticadb"; //nombre de la db
$usuario = "root"; //usuario
$contraseña = "";

$db = mysqli_connect($host, $usuario, $contraseña, $dbnombre);

//establecer coneccion 
if ( $db ) {
    echo"Conectado a la base de datos";

}
?>