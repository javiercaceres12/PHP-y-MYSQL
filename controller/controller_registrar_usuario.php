<?php
if (!empty($_POST["enter"])) {
    if (empty($_POST["Nombre"]) or empty($_POST["Apellido"]) or empty($_POST["Usuario"]) or empty($_POST["Contraseña"])) {
    echo ' <div class="error"> ¡Uno o varios de los campos estan vacios! ❌ </div> ';
    } else {
        $nombre = $_POST["Nombre"];
        $apellido = $_POST["Apellido"];
        $usuario = $_POST["Usuario"];
        $contraseña = $_POST["Contraseña"];
        $sql = $conexion->query(" insert into usuarios(nombre,apellido,usuario,contraseña)values('$nombre','$apellido','$usuario','$contraseña') ");
        if ($sql==1) {
            echo ' <div class="okey"> Usuario registrado correctamente ✅ <div> ';
        } else {
            echo ' <div class="error"> ¡Error al registrar! ❌ <div>';
        }
        
    }
    
}
?>