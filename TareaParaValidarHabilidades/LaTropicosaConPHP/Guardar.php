<?php
$conexion = mysql_connect('localhost', 'root', '', 'LaTropicosa');
$database = mysql_select_db('LaTropicosa');


$ID = $_GET['ID'];
$titulo = $_POST['titulo'];
$artista = $_POST['artista'];
$anio = $_POST['anio'];
$disquera = $_POST['disquera'];
$precio = $_POST['precio'];
$insertar = mysql_query("INSERT INTO cassettes (ID, titulo, artista, anio, disquera, precio) VALUES ('$ID','$titulo','$artista','$anio','$disquera','$precio')");
if ($insertar){
    header('Location:Index.php');
}else{
        echo "Error al guardar <br \>".mysql_error();
}
$conexion->close();
?>
