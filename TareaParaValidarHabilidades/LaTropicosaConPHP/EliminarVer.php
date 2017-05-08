<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eliminar</title>
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
        <div class="element">
        <h1>¿Realmente desea Eliminar el sigiente libro?</h1>
        </div><div class="element">
        <form method="GET" action="Eliminar.php">
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
           <input type="submit" value="Eliminar">
        </form> 
        <form action="Index.php">
            <input type="submit" value="Cancelar">
        </form>
        </div>
            <?php 
            }
        mysql_close($conexion);
        ?>
    </body>
</html>
