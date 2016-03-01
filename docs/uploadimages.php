<?php
session_start();
require '../clases/AutoCarga.php';
$usuario = new User();
$usuario->read();
$u = $_SESSION["email_usuario"];
$a = $_SESSION["alias_usuario"];

//Subida de la imagen de perfil//
$MAX_SIZE = 100000000000;
$tamano2 = $_FILES["archivo"]['size'];
$tipo2 = $_FILES["archivo"]['type'];
$archivo2 = $_FILES["archivo"]['name'];
//var_dump($_FILES);
$path = "../images/resources/" . $a . "/";
//echo $path;
if ($_FILES['archivo']['size'] <= $MAX_SIZE) {
    if ($_FILES['archivo']['name'] != NULL) {
            if ($_FILES['archivo']['type'] == "image/jpg"){
                if(!is_dir($path)){
                    mkdir($path, 0700);
                    $destino2 = $path . $_FILES['archivo']['name'] . ".jpg";
                    move_uploaded_file($_FILES['archivo']['tmp_name'], $destino2);
                    //echo "<span><br>El archivo <b>" . $archivo2 . "</b> se ha subido correctamente</span> </br>";
                }else{
                    //echo "el directorio ya existe";
                    $destino2 = $path . $_FILES['archivo']['name'] . ".jpeg";
                    move_uploaded_file($_FILES['archivo']['tmp_name'], $destino2);
                }
            }elseif ($_FILES['archivo']['type'] == "image/png") {
                if(!is_dir($path)){
                    mkdir($path, 0700);
                    $destino2 = $path . $_FILES['archivo']['name'] . ".png";
                    move_uploaded_file($_FILES['archivo']['tmp_name'], $destino2);
                    //echo "<span><br>El archivo <b>" . $archivo2 . "</b> se ha subido correctamente</span> </br>";
                }else{
                    //echo "el directorio ya existe";
                    $destino2 = $path . $_FILES['archivo']['name'] . ".jpeg";
                    move_uploaded_file($_FILES['archivo']['tmp_name'], $destino2);
                }
            }elseif ($_FILES['archivo']['type'] == "image/jpeg") {
                if(!is_dir($path)){
                    mkdir($path, 0700);
                    $destino2 = $path . $_FILES['archivo']['name'] . ".jpeg";
                    move_uploaded_file($_FILES['archivo']['tmp_name'], $destino2);
                    //echo "<span><br>El archivo <b>" . $archivo2 . "</b> se ha subido correctamente</span> </br>";
                }else{
                    //echo "el directorio ya existe";
                    $destino2 = $path . $_FILES['archivo']['name'] . ".jpeg";
                    move_uploaded_file($_FILES['archivo']['tmp_name'], $destino2);
                }
        }   
    }else{
            //echo "Error al subir el archivo " . $archivo2 . "<br><b>" . " El archivo no es una imagen" . "</b>";
        }
}else {
    //echo "Error al subir el archivo " . $archivo2 . "<br><b>" . " El archivo es demasiado pesado" . "</b>";
}

//echo $r;
//header("Location:galeria.php?email={$usuario->getEmail()}");
?>
<script>
javascript:history.go(-1);
</script>