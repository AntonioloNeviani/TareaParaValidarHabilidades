<?php
$conexion = mysql_connect('localhost', 'root', '', 'LaTropicosa');
$database = mysql_select_db('LaTropicosa');

    $ID = $_GET['ID'];
    $borrar = mysql_query("DELETE FROM cassettes WHERE ID='$ID'");
    if ($borrar){
            header('Location:Index.php');		
    }else{
            echo "Error al guardar <br \>".mysql_error();
    }
$conexion->close();
?>
