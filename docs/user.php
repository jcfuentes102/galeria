<?php
session_start(); 
require '../clases/AutoCarga.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Profile</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico" />
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="651943431283-tb9q600cd4v5b8dotsqkdv1gvcmnmab6.apps.googleusercontent.com">
    <link rel="stylesheet" type="text/css" href="../css/estilosAltaNavidad.css">
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="../js/scripts.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
    
</head> 
<body>
    <div id="cont">
                <div id="header"><span class="title"><b>A</b>rt of <b>A</b>rchitecture</span>
            <span class="enlaces">
                <a href="#"><b class="selected">Profile</b></a>
                <a href="about.html">About Us</a>
                <a href="exposiciones.php">Expositions</a>
                <a href="david.html">David</a>
                <a href="../index.php">Home</a>
        </span>
        </div><?php echo "<div class='imgcontent imgcontentposicion' style='background-image:url(" .  $_SESSION["imagen_usuario"] .  ")'></div>";?>
<div id="wrapper">
      
       <h1 class="enlace"><?php echo $_SESSION["alias_usuario"];?></h1>
       <h5 class="enlace">User since: <?php echo $_SESSION["fechaalta_usuario"];?></h5><br><br>
        <form id="formedit" action="phpedit.php" method="POST" class="enlace">
            Email: <input  type="email" name="emailinput" class="input2 username" value="<?php echo $_SESSION["email_usuario"];?>" /><br /><br />
            Pass : <input  type="password" name="claveinput" class="input2 password" value="<?php echo $_SESSION["clave_usuario"];?>" /><br /><br />
            Nick : <input  type="text" name="aliasinput" class="input2 username" value="<?php echo $_SESSION["alias_usuario"];?>" /><br /><br />
            
<!--Controlador checkeds-->
                <?php 
                if($_SESSION["activo_usuario"]=="1"){
                    $checkactivo1 = 'checked';
                    $checkactivo0 = 'unchecked';
                }else{
                    $checkactivo1 = 'unchecked';
                    $checkactivo0 = 'checked';
                }
                if($_SESSION["administrador_usuario"]=="1"){
                    $checkadmin1 = 'checked';
                    $checkadmin0 = 'unchecked';
                }else{
                    $checkadmin1 = 'unchecked';
                    $checkadmin0 = 'checked';
                }
                if($_SESSION["personal_usuario"]=="1"){
                    $checkstaff1 = 'checked';
                    $checkstaff0 = 'unchecked';
                }else{
                    $checkstaff1 = 'unchecked';
                    $checkstaff0 = 'checked';
                }
                if($_SESSION["css_usuario"]=="Classic"){
                    $checkcssClassic = 'checked';
                }else{
                    $checkcssClassic = 'unchecked';
                }
                if($_SESSION["css_usuario"]=="Modern"){
                    $checkcssModern = 'checked';
                }else{
                    $checkcssModern = 'unchecked';
                }
                if($_SESSION["css_usuario"]=="Contrast"){
                    $checkcssContrast = 'checked';
                }else{
                    $checkcssContrast = 'unchecked';
                }
                ?>
                
            Active:
            <input  type="radio" name="activoinput" value="1" <?php echo $checkactivo1 ?>/>Sí
            <input  type="radio" name="activoinput" value="0" <?php echo $checkactivo0 ?>/>No<br/><br/>
            
            <?php if($_SESSION["administrador_usuario"]=="1"){
                           echo "Administrador:";
                           echo "<input  type='radio' name='inputadministrador' value='1'" . $checkadmin1 . ">Sí";
                           echo "<input  type='radio' name='inputadministrador' value='0'" . $checkadmin0 . ">No";
                           echo "<br/><br/>";
            }else{
                echo "<input  type='radio' name='inputadministrador' hidden value='0'" . $checkadmin0 . ">";
            }
                ?>
            
            <?php if($_SESSION["personal_usuario"]=="1" or $_SESSION["administrador_usuario"]=="1"){
                           echo "Personal:";
                           echo "<input  type='radio' name='inputpersonal' value='1' <?php echo $checkstaff1 ?>Sí";
                           echo "<input  type='radio' name='inputpersonal' value='0' <?php echo $checkstaff0 ?>No";
                           echo "<br/><br/>";
            }else{
                echo "<input  type='radio' name='inputpersonal' value='0' hidden <?php echo $checkstaff0 ?>";
            }?>
            Theme:
                <input  type='radio' name='inputcss' value='Classic' <?php echo $checkcssClassic ?>/>Classic
                <input  type='radio' name='inputcss' value='Modern' <?php echo $checkcssModern ?>/>Modern
                <input  type='radio' name='inputcss' value='Contrast' <?php echo $checkcssContrast ?>/>Contrast
                                                <br><br><br><br><br><br><br/><br/>
            <input type="date" name="inputfechaalta" value="<?php echo $_SESSION["fechaalta_usuario"]; ?>" hidden/>
            <input type="text" name="inputimagen" value="<?php echo $_SESSION["imagen_usuario"]; ?>" hidden/>
</div>
<div id="enlacesedit">
            <div class="fileUpload btn btn-warning">
                <span>Change Image</span>
                <input name="archivo" type="file" placeholder="imagen" class="input username upload" value="" onfocus="this.value=''" />
            </div>
            <button type="submit" class="btn btn-success">Save Changes</button>
            <?php echo "<a href='galeria.php?email={$_SESSION['email_usuario']}'><button type='button' class='btn btn-primary'>Gallery</button></a> ";?>
            <?php echo "<a class='enlace borrar' id='borrar' style='padding:10px;' href='phpdelete.php?email={$_SESSION['email_usuario']}'><button type='button' class='btn btn-danger'>Delete profile</button></a> ";?>
            <input type="text" hidden name="pkCode" value="<?php echo $_SESSION["email_usuario"];?>" />
        </form>
        <?php if($_SESSION["personal_usuario"]==="1" or $_SESSION["administrador_usuario"]==="1"){
           echo "<a href='listausuario.php'<button type='button' class='btn btn-primary'>Admin user list</button></a>";
       }?>
       <a href="../login.php"<button type="button" class="btn btn-danger">Cancel</button></a>
       
</div>
    </div>
    </body>
</html>