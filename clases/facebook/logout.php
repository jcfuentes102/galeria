<?php 
session_start();
session_unset();
    $_SESSION['FBID'] = NULL;
    $_SESSION['FULLNAME'] = NULL;
    $_SESSION['EMAIL'] =  NULL;
header("Location: ../../login.php");        // you can enter home page here ( Eg : header("Location: " ."https://www.krizna.com"); 
?>
