<?php
include_once '../Admin/config.php';
session_start();

if(isset($_POST['Registeruser'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
 
    $email=$_POST['email'];
    $password=$_POST['password'];



    
    $query="INSERT INTO users(fname,lname,email,passoword) VALUES (?,?,?,?);";
    $stmt=mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$query);
    mysqli_stmt_bind_param($stmt,"ssss",$fname,$lname,$email,$password);
    mysqli_stmt_execute($stmt);
    $_SESSION['USER_EMAIL']=$email;
    $_SESSION['Fname']=$fname;
    $_SESSION['Lname']=$lname;
header("Location:homepage.php");

}else{
    header("Location:../sign-up.php?status=unsuccessful"); 
}
?>