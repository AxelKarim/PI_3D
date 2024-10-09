<?php

if(!empty($_POST["modificar"])) {
    if(!empty($_POST["nombres"]) and !empty($_POST["apellidos"]) and !empty($_POST["correo"]) and !empty($_POST["usuario"]) and !empty($_POST["fecha-nacimiento"]) 
    and !empty($_POST["genero"]) and !empty($_POST["password"])) {
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellidos"];
        $correo=$_POST["correo"];
        $usuario=$_POST["usuario"];
        $fecha_nac=$_POST["fecha-nacimiento"];
        $genero=$_POST["genero"];
        $contraseña=$_POST["password"];
        $id=$_POST["txtid"];
        $sql=$conexion->query("UPDATE usuarios SET nombres='$nombre', apellidos='$apellido', usuario='$usuario', correo='$correo', fecha_nav='$fecha_nac',
        genero='$genero', password='contraseña' WHERE id=$id ");
    }
}


?>