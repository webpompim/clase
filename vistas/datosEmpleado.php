<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table border="1">
            <tr>
                <td>Codigo</td>
                <td>Nombre</td>
            </tr>
            <?php
            foreach ($datos as $dato){
                echo "<tr><td>".$dato['codempleado']."</td>";
                echo "<td>".$dato['nombre']."</td></tr>";
            }
               ?>
        </table>
        
    </body>
</html>
