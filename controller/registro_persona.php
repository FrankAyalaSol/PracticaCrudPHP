<?php

if (!empty($_POST["btnregistrar"])) {

    if (
        empty($_POST["nombre"]) ||
        empty($_POST["apellido"]) ||
        empty($_POST["dni"]) ||
        empty($_POST["fecha"]) ||
        empty($_POST["correo"])
    ) {

        echo "<div class='alert alert-danger'>Todos los campos son obligatorios</div>";

    } else {

        include "model/connection.php";

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];

        $sql = $conexion->query("INSERT INTO persona(nombre, apellido, dni, fecha_nac, correo)
                                VALUES ('$nombre', '$apellido', '$dni', '$fecha', '$correo')");

        if ($sql) {
            echo "<div class='alert alert-success'>Persona registrada correctamente</div>";
            header("Location: index.php");
            exit();

        } else {
            echo "<div class='alert alert-danger'>Error al registrar persona</div>";
        }
    }
}

?>

<script>
    history.replaceState(null, null, "index.php");
</script>