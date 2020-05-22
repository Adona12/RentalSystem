<?php
include_once 'config.php';
if(isset($_POST['order'])){
    $Driver=false;
    $Company=$_POST['company'];
    $CompanyId=$_POST['id'];
    $CarType=$_POST['company'];
    $Driverradio=$_POST['driver'];
    $Days=$_POST['day'];
 
    if($Driverradio=="on"){
$Driver=true;
    }

    $query="INSERT INTO request(userId,company,companyId,carType,driver,numberOfDays) VALUES (1,?,?,?,?,?);";
    $stmt=mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$query);
    mysqli_stmt_bind_param($stmt,"sssss",$Company,$CompanyId,$CarType,$Driver,$Days);
    mysqli_stmt_execute($stmt);
    
   header("Location: makeRequest.html?status=successful");
}
?>