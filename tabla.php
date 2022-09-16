<html>
    <head>
        <title>Prueba funcional de PHP</title>
    </head>
    <body>
        <table>
            <caption>Esto es un título hecho por Raúl García en el repositorio de Ian</caption>
            <tr>
                <?php
                $fecha = date('m-d-Y');
                $hora = date("h:i:s a", time());
                echo "Hoy es $fecha y son las $hora";
                ?>
            <tr>
        </table>
    </body>
<html>