<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Detalles</title>
        <!-- load styles -->
        <link rel="stylesheet" type="text/css" href="styles/misEstilos.css" />
    </head>
    <body>
        <?php
        $conexion = mysql_connect('localhost', 'root', '', 'LaTropicosa');
        $database = mysql_select_db('LaTropicosa');

            $ID = $_GET['ID'];
            $busqueda = mysql_query("SELECT * FROM cassettes WHERE ID=$ID"); 
            ?>
        <div class="elementTitle">
            <h1>Detalles</h1>
            <?php 
            while ($row = mysql_fetch_array($busqueda)){
            ?>
            <label for="ID">ID</label><br>
            <input type="text" name="ID" value="<?php echo $row['ID']; ?>" disabled> <br \>
            <label for="titulo"> titulo </label><br \>
            <input type="text" name="titulo" value="<?php echo $row['titulo']; ?>" disabled><br \>
            <label for="artista"> artista </label><br \>
            <input type="text" name="artista" value="<?php echo $row['artista']; ?>" disabled><br \>
            <label for="anio">anio</label><br \>
            <input type="text" name="anio" value="<?php echo $row['anio']; ?>" disabled><br \>	
            <label for="disquera">disquera</label><br \>
            <input type="text" name="disquera" value="<?php echo $row['disquera']; ?>" disabled><br \>	
            <label for="precio">precio</label><br \>
            <input type="text" name="precio" value="<?php echo $row['precio']; ?>" disabled><br \>	
            <br \>
            <?php 
            }
            ?>
            <a href="Index.php">Regresar</a>
        </div>
    </body>
</html>
