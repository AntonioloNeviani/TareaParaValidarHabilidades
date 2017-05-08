<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Editar</title>
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
        <form method="POST" action="Actualizar.php">
        <div class="element">
        <h2>Editar</h2>
        </div><div class="element">
        <?php 
        while ($row = mysql_fetch_array($busqueda)){
        ?>
            <label for="ID" > ID </label><br \>
      	    <input type="hidden" name="ID" value="<?php echo $row['ID']; ?>">
      	    <input type="text" name="ID" value="<?php echo $row['ID']; ?>" disabled> <br \>
            <label for="titulo"> titulo </label><br \>
            <input type="text" name="titulo" value="<?php echo $row['titulo']; ?>"><br \>
            <label for="artista"> artista </label><br \>
            <input type="text" name="artista" value="<?php echo $row['artista']; ?>"><br \>
            <label for="anio">anio</label><br \>
            <input type="text" name="anio" value="<?php echo $row['anio']; ?>"><br \>	
            <label for="disquera">disquera</label><br \>
            <input type="text" name="disquera" value="<?php echo $row['disquera']; ?>"><br \>	
            <label for="precio">precio</label><br \>
            <input type="text" name="precio" value="<?php echo $row['precio']; ?>"><br \>	
            <br \>
        <?php 
            }
        ?>
        <input type="submit" value="Guardar">
        <a href="Index.php">Regresar</a>
        </form>
        </div>
    </body>
</html>
