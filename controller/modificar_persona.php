<?php
if(!empty($_POST["btnmodificar"])){

    if(
        empty($_POST["nombre"]) ||
        empty($_POST["apellido"]) ||
        empty($_POST["dni"]) ||
        empty($_POST["fecha"]) ||
        empty($_POST["correo"])
    ){

        echo "<div class='alert alert-danger'>Todos los campos son obligatorios</div>";

    }else{

        include "model/connection.php";

        $id = $_GET['id'] ?? null;
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];

        $sql = $conexion->query("UPDATE persona SET nombre='$nombre', apellido='$apellido', dni='$dni', fecha_nac='$fecha', correo='$correo' WHERE idpersona='$id'");

        if($sql){
            echo "<div class='alert alert-success'>Persona modificada correctamente</div>";
            header("Location: index.php");
            exit();

        }else{
            echo "<div class='alert alert-danger'>Error al modificar persona</div>";
        }
    }
}

?>