<?php
session_start();
if(!isset($_SESSION["USER_EMAIL"])){
    header("Location:index.php");
    
  }else{
    session_unset();
    session_destroy();
    header("Location:index.php");
  }


?>