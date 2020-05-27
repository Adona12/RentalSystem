<?php
include_once 'config.php';
session_start();
if(!isset($_SESSION["USER_EMAIL"])){
  header("Location:../index.php");
}
else{
    if(isset($_POST['deleteCar'])){
        if(isset($_GET['id'])){
            $deletequery="DELETE FROM cars  WHERE id=?;";
            $deletestmt=mysqli_stmt_init($conn);
            mysqli_stmt_prepare($deletestmt,$deletequery);
            mysqli_stmt_bind_param($deletestmt,"i",$_GET['id']);
            mysqli_stmt_execute($deletestmt);
            header("Location:cars.php?status=successfull");
        }
    }
    else{
        header("Location:cars.php?status=unsuccessfull");
    }
}
?>