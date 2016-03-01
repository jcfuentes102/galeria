<?php 
require '../clases/AutoCarga.php';
$bd = new DataBase();
$gestor = new ManageUser($bd);
$usuarios = $gestor->getList();
$op = Request::get("op");
$r = Request::get("r");
$uc = Request::get("uc");
$a = Request::get("a");

?>
<!doctype html>
<html lang="es">
<head>
    <title>PROFILE</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico" />
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="651943431283-tb9q600cd4v5b8dotsqkdv1gvcmnmab6.apps.googleusercontent.com">
    <link rel="stylesheet" type="text/css" href="../css/estilosAltaNavidad.css">
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
     <script type="text/javascript">
$(document).ready(function(){
$('body').hide();
$('body').fadeIn(2000);
});
</script>
</head> 
<body>
    <div id="cont">
        <div id="header"><span class="title"><b>A</b>rt of <b>A</b>rchitecture</span>
            <span class="enlaces">
                <a href="../login.php">Login</a>
                <a href="about.php">About Us</a>
                <a href="quentin.php">Quentin</a>
                <a href="david.php">David</a>
                <a href="../index.php">Home</a>
        </span>
        </div>
<!--END WRAPPER-->

<!--GRADIENT--><div class="gradient"></div><!--END GRADIENT-->
<br>
       <?php
       echo "<h1 class='enlace'>El usuario:   <strong style='font-size:1.5em;'>" . $a . "</strong>    ha sido activado correctamente, Inicie sesion haciendo <a class='enlace'href='../login.php'>Click Aqui!</a></h1>";
?>
     <div id="footer">
          <a href="contact.html">Contact</a>
          <a href="about.html">About</a>
          <a href="#">Advertise</a>
          <a href="#">Guest Posting</a>
          <a href="#">License</a>
          <a href="#">Shop</a>
          <a href="#">Jobs</a>
          <a href="#">Subscribe</a>
        </div>

    </div>
</body>
</html>
<?php
$bd->close();