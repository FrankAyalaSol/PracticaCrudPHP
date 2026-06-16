<?php

    if(!empty($_GET["id"])){
        include "model/connection.php";
        $id = $_GET["id"];
        $sql = $conexion->query("DELETE FROM persona WHERE idpersona='$id'");

        if($sql){
            echo "<div class='alert alert-success'>Persona eliminada correctamente</div>";
            header("Location: index.php");
            exit();

        }else{
            echo "<div class='alert alert-danger'>Error al eliminar persona</div>";
        }
    }
?>