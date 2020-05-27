<?php
include_once 'config.php';
session_start();
if(!isset($_SESSION["USER_EMAIL"])){
    header("Location:../index.php");
  }

if(isset($_POST['Registerad'])){
    $title=$_POST['title'];
    $describe=$_POST['describe'];
 

$file = $_FILES['file'];
$fileName = $file['name'];
$fileTempName = $file['tmp_name'];
$fileSize = $file['size'];
$fileError = $file['error'];
$fileType = $file['type'];
$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));
$allowed = array('jpg', 'jpeg', 'png');
if(in_array($fileActualExt, $allowed)){
    if($fileError === 0){
        if($fileSize < 1000000000000){
            $fileNameNew = $title.".".$fileActualExt;
            $fileDestination = '../images/Ads/' . $fileNameNew;
    
    $query="INSERT INTO advertisements(title,adDescription,adImage) VALUES (?,?,?);";
    $stmt=mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$query);
    mysqli_stmt_bind_param($stmt,"sss",$title,$describe,$fileNameNew);
    mysqli_stmt_execute($stmt);
    move_uploaded_file($fileTempName, $fileDestination);
    header("Location: advertisment.php?status=successful");
        }else{
            header("Location: advertisment.php?status=image_size_too_big");
        }
    }
    else{
            header("Location:advertisment.php?status=file_error");
        }
    }else{
            header("Location:advertisment.php?status=file_type_not_allowed");
        }
}
?>