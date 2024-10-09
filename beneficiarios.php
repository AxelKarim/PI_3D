<?php
    include 'conexion/conexion.php';
    $db=new Conect_MySql();
    session_start();
    
    $user_id=$_SESSION['user_id'];
    $sql="SELECT * from usuarios WHERE id='$user_id'";
    $res = $db->execute($sql);
    while ($r=$res->fetch_array()) {
        $usuario_name=$r['usuario'];
        $name=$r['nombres'];
        $apellido=$r['apellidos'];
        $correo=$r['correo'];
        $fecha_nacimiento=$r['fecha_na'];
        $genero=$r['genero'];
        $contraseña=$r['password'];
        $user_id=$r['id'];
    }
    /*if (isset($_POST['actualizar'])) {
        $sql = "UPDATE usuarios SET nombres='".$_POST['nombre']."', correo='".$_POST['email']."', usuario='".$_POST['usuario']."', fecha_na='".$_POST['fechanac']."',
        genero='".$_POST['genero']."', password='".$_POST['password']."' WHERE id='".$_POST['nombre']."'";
        $res = $db->execute($sql);
    }*/
    /*if (isset($_POST['actualizar'])) {
        $sql = "UPDATE usuarios SET nombres='".$_POST['nombre']."', apellidos='".$_POST['apellido']."', correo='".$_POST['email']."', fecha_na='".$_POST['fechanc']."', genero='".$_POST['genero']."', password='".$_POST['password']."', WHERE id='".$_POST['nombres']."'";
        $res = $db->execute($sql);
    }*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Beneficiario</title>
    <link rel="icon" href="img/lotus-icon.png" type="image/x-icon">
	<link rel="stylesheet" href="fontawesome/css/all.min.css"> 
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-xtra-blog.css" rel="stylesheet">

        <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700, 700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>
        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <!-- Counter - Alerts -->
                    <span class="badge badge-danger badge-counter">3+</span>
                </a>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-envelope fa-fw"></i>
                    <!-- Counter - Messages -->
                    <span class="badge badge-danger badge-counter">7</span>
                </a>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span ><?php echo $usuario_name?></span>
                    <img class="img-profile rounded-circle"
                        src="img/undraw_profile.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="beneficiarios.php">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Perfil
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Cerrar sesion
                    </a>
                </div>
            </li>

        </ul>

    </nav>
    <!-- End of Topbar -->
	<header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
                <div class="mb-3 mx-auto tm-site-logo"><img src="img/perfil.png.webp" alt="Logo" class="img-fluid" style="max-width: 100px;"></div>            
                <h1 class="text-center"><?php echo $usuario_name?></h1>
            </div>
            <nav class="tm-nav" id="tm-nav">            
                <ul>
                    <li class="tm-nav-item active"><a href="beneficiarios.php" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Informacion
                    </a></li>
                    <li class="tm-nav-item"><a href="post.php" class="tm-nav-link">
                        <i class="fas fa-pen"></i>
                        Programas inscritos
                    </a></li>
                    <li class="tm-nav-item"><a href="feedback.php" class="tm-nav-link"> 
                        <i class="far fa-comments"></i>
                        Enviar feedback
                    </a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container-fluid">
        <main class="tm-main">
            <h2>Informacion de la cuenta</h2>
            <form>
                        <div hidden class="fl-flex-label mb-4 px-2 col-12 col-md-6">
                            <input type="text" placeholder="ID" class="input input__text" name="txtid" value="<?php echo $user_id?>">
                        </div>
                        <div class="mb-3">
                            <label for="nombres" class="col-form-label">Nombres:</label>
                            <input type="text" class="form-control" id="nombres" placeholder="" name="nombre" value="<?php echo $name?>">
                        </div>
                        <div class="mb-3">
                            <label for="apellidos">Apellidos:</label>
                            <input type="text" class="form-control" id="apellidos" placeholder="" name="apellido" value="<?php echo $apellido?>">
                        </div>
                        <div class="mb-3">
                            <label for="correo">Correo electrónico:</label>
                            <input type="email" class="form-control" id="correo" placeholder="" name="email" value="<?php echo $correo?>">
                        </div>
                        <div class="mb-3">
                            <label for="usuario">Nombre de usuario:</label>
                            <input type="text" class="form-control" id="usuario" placeholder="" name="usuario" value="<?php echo $usuario_name?>">
                        </div>
                        <div class="mb-3">
                            <label for="fecha-nacimiento">Fecha de nacimiento:</label>
                            <input type="date" class="form-control" id="fecha-nacimiento" placeholder="" name="fechanac" value="<?php echo $fecha_nacimiento?>">
                        </div>
                        <div class="mb-3">
                            <label for="genero">Género:</label>
                            <input class="form-control" id="genero" placeholder="" name="genero" value="<?php echo $genero?>">
                        </div>
                        <div class="mb-3">
                            <label for="contrasena">Contraseña:</label>
                            <input type="password" class="form-control" placeholder="" name="password" value="<?php echo $contraseña?>">
                        </div>
                        <button type="submit" class="btn btn-warning edit" value="ok" name="actualizar">Modificar</button>
            </form>
        </main>
    </div>




            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Lotus 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Quieres irte?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">Si quires cerrar sesion solo presione el bonoton "Cerrar sesion".</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-danger" href="cerrar_sesion.php">Cerrar sesion</a>
                </div>
            </div>
        </div>
    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>


</body>
</html>