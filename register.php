<?php

include 'conexion/conexion.php';
$db=new Conect_MySql();
if (isset($_POST['registrar'])) {
    $sql = "INSERT INTO usuarios (`nombres`, `apellidos`, `usuario`, `correo`, `fecha_na`, `genero`, `password`, `tipo_usuario`) VALUES ('".$_POST['nombre']."', '".$_POST['apellido']."', '".$_POST['usuario']."', '".$_POST['email']."', '".date('Y-m-d',strtotime($_POST['fechanac']))."', '".$_POST['genero']."', '".$_POST['password']."', '2')";
    $res = $db->execute($sql);
    print "<script>window.location='login.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Registro</title>
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-success">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Crea tu cuenta</h1>
                            </div>
                            <form method="POST" class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="Names" placeholder="Nombres" name="nombre">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="LastNames"
                                            placeholder="Apellidos" name="apellido">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="Email"
                                        placeholder="Correo electronico" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="User"
                                        placeholder="Nombre de usuario" name="usuario">
                                </div>
                                <div class="form-group">
                                    <input type="date" name="fechanac" class="form-control form-control-user" id="fecha" placeholder="Fecha de nacimiento">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="genero">
                                        <option></option>
                                        <option>Masculino</option>
                                        <option>Femenino</option>
                                        <option>Indiferente</option>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="Password" placeholder="Contraseña" name="password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="RepeatPassword" placeholder="Repetir contraseña" name="password2">
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary btn-user btn-block" name="registrar" value="Registrar cuenta">
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.php">¿Has olvidado tu contraseña?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">¿Ya tienes cuenta? ¡Inicia sesion!</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>