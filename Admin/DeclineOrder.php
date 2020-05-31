<?php
include_once 'config.php';

if(isset($_POST['decline'])){

$id=$_GET['id'];
$stat=0;
$query="UPDATE request SET status=? WHERE id=?;";
    $stmt=mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$query);
    mysqli_stmt_bind_param($stmt,"ii",$stat,$id);
    mysqli_stmt_execute($stmt);
    
    header("Location: order.php?status=successful");
}
 else if(isset($_POST['accept']) || isset($_POST['acceptd']) ){
    $status=0;
   
    $query="SELECT * FROM request WHERE id=".$_GET['id']."";
  
    $mine=mysqli_stmt_init($conn);
    
    if(!mysqli_stmt_prepare($mine,$query)){
        echo "The statement failed";
    }else{
    
    mysqli_stmt_execute($mine);
    $result=mysqli_stmt_get_result($mine);
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $user= $row['fname'];
        $userln= $row['lname'];
        $email= $row['email'];
        $company = $row['organization'];
        $organizationEmail= $row['organizationemail'];
        $pickdate= $row['pickdate'];
        $picklocation= $row['picklocation'];
        $dropdate= $row['dropdate'];
        $droplocation= $row['droplocation'];
        $dob= $row['dob'];
        $cartype= $row['cartype'];
        $phone= $row['phone'];
        $referal= $row['referal'];
        $driver= $row['driver'];
        
    echo "here";
      
        $passport= $row['passport'];
    }
}
$car="B77218";
$drive=0;
if(isset($_POST['acceptd'])){
    $drive=$_POST['driver'];
    }
    $acceptquery="INSERT INTO acceptedrequest ( fname, lname, dob, phone, email, organization, organizationemail, referal, passport, pickdate, dropdate, picklocation, droplocation, cartype, driver,carplate) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?);";
   $stmt=mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt,$acceptquery)){
    echo "The statement failed";
   }
    echo "second here";
 
  
  
    mysqli_stmt_bind_param($stmt,"ssssssssssssssii",$user,$userln,$dob,$phone,$email,$company,$organizationEmail,$referal,$passport,$pickdate,$dropdate,$picklocation,$droplocation,$cartype, $drive,$car);
  
   echo  $drive;
   mysqli_stmt_execute($stmt);
   echo mysqli_error($conn);

//    $deletequery="DELETE FROM request  WHERE id=?;";
//     $deletestmt=mysqli_stmt_init($conn);
//     mysqli_stmt_prepare($deletestmt,$deletequery);
//     mysqli_stmt_bind_param($deletestmt,"i",$_GET['id']);
//     mysqli_stmt_execute($deletestmt);
$status=0;
    $updatequery="UPDATE drivers SET available=? WHERE id=?;";
    $updatestmt=mysqli_stmt_init($conn);
    mysqli_stmt_prepare($updatestmt,$updatequery);
    mysqli_stmt_bind_param($updatestmt,"ii",$status, $drive);
    mysqli_stmt_execute($updatestmt);


 
    
  // header("Location: order.php?status=successful");
  
}
?>