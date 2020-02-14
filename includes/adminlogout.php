<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
unset($_SESSION['admin']);
header('location:../superAdmin.php');
 ?>
