<html>
    <head>
        <title>Prueba funcional de PHP</title>
    </head>
    <body>
        <?php
        $fecha = date('m-d-Y');
        $hora = date("h:i:s a", time());
        echo "Hoy es $fecha y son las $hora";
        ?>
    </body>
<html>