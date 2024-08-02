<?php
require 'db/functions.php';

$query=get_services();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estética</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    <div class="contenedor-estetica">
        <div class="imagen"></div>
        <div class="app">
            <header class="header">
                <h1>Estética y Barbería</h1>
            </header>

            <div class="seccion">
                <h2>Servicios</h2>
                <p class="text-center">Elige el servicio deseado</p>
                <div id="servicios" class="listado-servicios">
                    <?php
                    while($servicio = mysqli_fetch_assoc($query)){?>
                        <div class="servicio">
                            <p class="nombre-servicio"><?php echo $servicio['nombre'];?></p>
                            <p class="precio-servicio"><?php echo $servicio['precio'];?></p>
                        </div>
                    <?php }?>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>
