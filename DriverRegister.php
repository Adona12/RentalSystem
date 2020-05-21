<?php
include_once 'config.php';
if(isset($_POST['Register'])){
    $Fname=$_POST['fname'];
    $Lname=$_POST['lname'];
    $Email=$_POST['email'];
if(!empty($Fname))
    $query="INSERT INTO drivers(fname,lname,email) VALUES (?,?,?);";
    $stmt=mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$query);
    mysqli_stmt_bind_param($stmt,"sss",$Fname,$Lname,$Email);
    mysqli_stmt_execute($stmt);
    
    header("Location: AddDriver.php?status=successful");
}
?>