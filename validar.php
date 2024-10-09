<?php
if (isset($_POST['usuario']) && $_POST['password']) {
    $a = $_POST['usuario'];
    $b = $_POST['password'];
    include 'conexion/conexion.php';
    $db=new Conect_MySql();
    $sql="select * from usuarios where usuario='".$a."' and password='".$b."'";
    $res = $db->execute($sql);
	while ($r=$res->fetch_array()) {
        $user_id=$r["id"];
		$t_user=$r["tipo_usuario"];
		break;
	}
    session_start();
	$_SESSION["user_id"]=$user_id;
    if($t_user=="1"){
        print "<script>window.location='dashboard.php?inicio=1';</script>";
    }
    if($t_user=="2"){
        print "<script>window.location='beneficiarios.php?inicio=1';</script>";
    }
    if($t_user=="3"){
        print "<script>window.location='donantes.php?inicio=1';</script>";
    }
    if($t_user=="4"){
        print "<script>window.location='voluntarios.php?inicio=1';</script>";
    }
    if($t_user=="5"){
        print "<script>window.location='coordinadores.php?inicio=1';</script>";
    }
    else{
        print "<script>window.location='login.php?ex=1';</script>";
    }
}
else{
    print "<script>window.location='login.php?ex=0';</script>";
}
	//
     