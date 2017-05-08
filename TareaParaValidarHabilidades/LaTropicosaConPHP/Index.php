<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>La Tropicosa</title>
        <!-- load styles -->
        <link rel="stylesheet" type="text/css" href="styles/misEstilos.css" />
    </head>
    <body>
        <?php
        $conexion = mysql_connect('localhost', 'root', '', 'LaTropicosa');
        $database = mysql_select_db('LaTropicosa');
        
        $result = mysql_query("SELECT ID, titulo, artista, anio, disquera, precio FROM cassettes") or die(mysql_error());
            
            echo "<div class='element'><h1>La Topicosa</ h1></div>";
            echo '<table border="0" width="100%" class="container">';
            ?>
            <tr class="nombres">
            <td class="elementTitle">ID</td>
            <td class="elementTitle">Título</td>
            <td class="elementTitle">Artista</td>
            <td class="elementTitle">Año</td>
            <td class="elementTitle">Disquera</td>
            <td class="elementTitle">Precio</td>
            <td class="elementTitle"></td>
            <td class="elementTitle"></td>
            <td class="elementTitle"></td>            
            </tr>
            <?php
            while ($row = mysql_fetch_array($result)){
                echo "<tr>";
                echo "<td class='element'>".$row["ID"]."</td>";
                echo "<td class='element'>".$row["titulo"]."</td>";
                echo "<td class='element'>".$row["artista"]."</td>";
                echo "<td class='element'>".$row["anio"]."</td>";
                echo "<td class='element'>".$row["disquera"]."</td>";
                echo "<td class='element'>".$row["precio"]."</td>";
                ?>
                <td class="element">
                <form method='GET' action='Ver.php'>
                <input type='hidden' value='<?php echo $row['ID']; ?>' name="ID">
                <input type="submit" value='ver'></td>
                </form>
                <form method='GET' action='Editar.php'>
                <input type='hidden' value='<?php echo $row['ID']; ?>' name="ID"> 
                <td class="element"><input type='submit' value='editar'></td>
                </form>
                <form method='GET' action='EliminarVer.php'>
                <input type='hidden' value='<?php echo $row['ID']; ?>' name="ID"> 
                <td class="element"><input type='submit' value='eliminar'></td>
                </form>
                </tr>
            <?php 
            }
            echo "</table>";
            ?>
            <form action="Nuevo.php">
                <input type="submit" value="Nuevo">
            </form>
            
    </body>
</html>
