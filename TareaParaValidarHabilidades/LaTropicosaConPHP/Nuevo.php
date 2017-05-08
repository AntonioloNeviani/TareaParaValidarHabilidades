<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nuevo</title>
        <!-- load styles -->
        <link rel="stylesheet" type="text/css" href="styles/misEstilos.css" />
    </head>
    <body>
        <div class='element'>
        <form method="POST" action="Guardar.php">
        <h1>Ingresar Nuevo</h1>
        <label for="ID" >ID</label><br \>
        <input type="text" name="ID"><br \>
        <label for="titulo"> T&iacute;tulo </label><br \>
        <input type="text" name="titulo"><br \>
        <label for="artista">artista</label><br \>
        <input type="text" name="artista"><br \>
        <label for="anio">anio</label><br \>
        <input type="text" name="anio"><br \>
        <label for="disquera">disquera</label><br \>
        <input type="text" name="disquera"><br \>
        <label for="precio">precio</label><br \>
        <input type="text" name="precio"><br \>
        <br \>
        <input type="submit" value="Guardar">
        <a href="Index.php">Regresar</a>
        </form>
        </div>
    </body>
</html>
