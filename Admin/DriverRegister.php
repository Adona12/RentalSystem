<?php
include_once 'config.php';
session_start();
if(!isset($_SESSION["USER_EMAIL"])){
    header("Location:../index.php");
  }
if(isset($_POST['Register'])){
    $Fname=$_POST['fname'];
    $Lname=$_POST['lname'];
    $Email=$_POST['email'];
    $Phone=$_POST['phone'];


    $query="INSERT INTO drivers(fname,lname,email,phone) VALUES (?,?,?,?);";
    $stmt=mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$query);
    mysqli_stmt_bind_param($stmt,"ssss",$Fname,$Lname,$Email,$Phone);
    mysqli_stmt_execute($stmt);

    header("Location: AddDriver.php?status=successful");
       
}
?>