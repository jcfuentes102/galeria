<?php
require '../clases/AutoCarga.php';
session_start();
if(isset($_SESSION["administrador_usuario"])){
$bd = new DataBase();
$gestor = new ManageUser($bd);
$email = Request::get("email");
$f = Request::get("f");
if($f===null){
    $r = $gestor->delete($email); 
}else{
    $r = $gestor->forzarDelete($email);
}

$bd->close();

if ($email===$_SESSION["email_usuario"]){
session_destroy();
}
header("Location:../login.php?op=delete&r=$r");
}else{
   header("Location:../login.php?m=300"); 
}