<?php
include_once '../Admin/config.php';

    $Driver=false;
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $id=$_POST['id'];
    $passport=$_POST['passport'];
    $pickuptime=$_POST['pickuptime'];
    $cartype=$_POST['cartype'];
    
    $pickupdate=$_POST['pickupdate'];
    $pickup=$_POST['pickup'];
    $dropofftime=$_POST['dropofftime'];
    $dropoffdate=$_POST['dropoffdate'];
    $dropoff=$_POST['dropoff'];
    $organization=$_POST['organization'];
    $referralemail=$_POST['referralemail'];
    $driveroption=$_POST['driveroption'];
 
    if($driveroption==1){
$Driver=true;
    }

    $query="INSERT INTO request(fname,lname,dob,phone,email,organization,organizationemail,referal,passport,picktime,droptime,pickdate,dropdate,picklocation,droplocation,cartype,driver) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
    $stmt=mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$query);
    mysqli_stmt_bind_param($stmt,"sssssssssssssssss",$fullname,$fullname,$email,$tel,$email,$organization,$referralemail,$referralemail,$passport,$pickuptime,$dropofftime,$pickupdate,$dropoffdate,$pickup,$dropoff,$cartype,$Driver);
    mysqli_stmt_execute($stmt);
    
 //  header("Location: makeRequest.html?status=successful");

?>