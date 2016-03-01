<?php
session_start();
if(isset($_SESSION["administrador_usuario"])){
require '../clases/AutoCarga.php';
$bd = new DataBase();
$gestor = new ManageUser($bd);
$usuario = new User();
$usuario->read();
$email = Request::post("emailinput");
$clave = Request::post("claveinput");
$alias = Request::post("aliasinput");
$fechaalta = Request::post("inputfechaalta");
$activo = Request::post("activoinput");
$administrador = Request::post("inputadministrador");
$personal = Request::post("inputpersonal");
$imagen = Request::post("inputimagen");
$css = Request::post("inputcss");

$usuario2 = new User($email, $clave, $alias, $fechaalta, $activo, $administrador, $personal, $imagen, $css);
$r = $gestor->set($usuario2);

if ($_SESSION["email_usuario"]==$email){
        $_SESSION["email_usuario"] = $email;
	    $_SESSION["clave_usuario"] = $clave;
	    $_SESSION["alias_usuario"] = $alias;
	    $_SESSION["fechaalta_usuario"] = $fechaalta;
	    $_SESSION["activo_usuario"] = $activo;
	    $_SESSION["administrador_usuario"] = $administrador;
	    $_SESSION["personal_usuario"] = $personal;
	    $_SESSION["imagen_usuario"] = $imagen;
	    $_SESSION["css_usuario"] = $css;
}
$bd->close();
if($_SESSION["email_usuario"]!=$email){
header("Location:listausuario.php?op=edit&r=$r");
}else{
    header("Location:user.php?op=edit&r=$r");
}
}else{
   header("Location:../login.php?m=300"); 
}