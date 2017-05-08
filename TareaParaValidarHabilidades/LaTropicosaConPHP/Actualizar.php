<?php
$conexion = mysql_connect('localhost', 'root', '', 'LaTropicosa');
$database = mysql_select_db('LaTropicosa');

$ID = $_POST['ID'];
$titulo = $_POST['titulo'];
$artista = $_POST['artista'];
$anio = $_POST['anio'];
$disquera = $_POST['disquera'];
$precio = $_POST['precio'];
$insertar = mysql_query("UPDATE cassettes SET ID='$ID', titulo='$titulo', artista='$artista', anio='$anio', disquera='$disquera', precio='$precio' WHERE ID='$ID'");
if ($insertar){
        header('Location:Index.php');
}else{
        echo "Error al guardar <br \>".mysql_error();
}
?>
