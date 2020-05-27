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

$file = $_FILES['file'];
$fileName = $file['name'];
$fileTempName = $file['tmp_name'];
$fileSize = $file['size'];
$fileError = $file['error'];
$fileType = $file['type'];
$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));
$allowed = array('jpg', 'jpeg', 'png', 'pdf');
if(in_array($fileActualExt, $allowed)){
    if($fileError === 0){
        if($fileSize < 1000000000000){
            $fileNameNew = $Email.".".$fileActualExt;
            $fileDestination = '../images/' . $fileNameNew;
            echo $fileDestination;
    $query="INSERT INTO drivers(fname,lname,email,phone,driverimage) VALUES (?,?,?,?,?);";
    $stmt=mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$query);
    mysqli_stmt_bind_param($stmt,"sssss",$Fname,$Lname,$Email,$Phone,$fileNameNew);
    mysqli_stmt_execute($stmt);
    move_uploaded_file($fileTempName, $fileDestination);
    header("Location: AddDriver.php?status=successful");
        }else{
            header("Location: AddDriver.php?status=image_size_too_big");
        }
    }
    else{
            header("Location: AddDriver.php?status=file_error");
        }
    }else{
            header("Location: AddDriver.php?status=file_type_not_allowed");
        }
}
?>