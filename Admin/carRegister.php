<?php
include_once 'config.php';
session_start();
if(!isset($_SESSION["USER_EMAIL"])){
    header("Location:../index.php");
  }
if(isset($_POST['Registercar'])){
    $carPlate=$_POST['carPlate'];
    $cartype=$_POST['cartype'];
    $description=$_POST['description'];
    
    $price=$_POST['price'];
    $engine=$_POST['engine'];
    $fuel=$_POST['fuel'];
    $transmission=$_POST['transmission'];
    $cartype=$_POST['cartype'];
    $dprice=$_POST['dprice'];
    
    $pricedo=$_POST['pricedo'];
    $dpricedo=$_POST['dpricedo'];
   
    $year=$_POST['year'];

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
            $fileNameNew = $carPlate.".".$fileActualExt;
            $fileDestination = '../images/carImages/' . $fileNameNew;
    
    $query="INSERT INTO cars(licencePlate,cartype,cdescription,carImage,price,dprice,pricedo,dpricedo,transmission,fuel,engine,byear) VALUES (?,?,?,?,?,?,?,?,?,?,?,?);";
    $stmt=mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$query);
    mysqli_stmt_bind_param($stmt,"ssssiiiissss",$carPlate,$cartype,$description,$fileNameNew,$price,$dprice,$pricedo,$dpricedo,$transmission,$fuel,$engine,$year);
    mysqli_stmt_execute($stmt);
    move_uploaded_file($fileTempName, $fileDestination);
header("Location: AddCar.php?status=successful");
        }else{
            header("Location: AddCar.php?status=image_size_too_big");
        }
    }
    else{
            header("Location: AddCar.php?status=file_error");
        }
    }else{
            header("Location: AddCar.php?status=file_type_not_allowed");
        }
}
?>