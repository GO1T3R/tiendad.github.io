<?php

function get_services() {
    try {
        //importar el achivo de conexion
        require 'db.php';
        
         //Consultar SQL
         $sql ='SELECT * FROM Servicios;';;

         //Realizar consultas PHP
         $query = mysqli_query($db,$sql);

         return $query;


    } catch (\Throwable $th) {
        var_dump($th);
    }
}
get_services();

