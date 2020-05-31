<?php
include_once 'config.php';
session_start();
if(!isset($_SESSION["USER_EMAIL"])){
  header("Location:../index.php");
}
else{
    if(isset($_POST['deletead'])){
        if(isset($_GET['id'])){
            $deletequery="DELETE FROM advertisements  WHERE id=?;";
            $deletestmt=mysqli_stmt_init($conn);
            mysqli_stmt_prepare($deletestmt,$deletequery);
            mysqli_stmt_bind_param($deletestmt,"i",$_GET['id']);
            mysqli_stmt_execute($deletestmt);
            $file_pointer = '../images/carImages/'.$_GET['title'].'.jpg';  
   
            // Use unlink() function to delete a file  
            if (!unlink($file_pointer)) {  
                echo ("$file_pointer cannot be deleted due to an error");  
            }  
            else {  
                echo ("$file_pointer has been deleted");  
            }  
          header("Location:advertisement.php?status=successfull");
        }
    }
    else{
        header("Location:advertisement.php?status=unsuccessfull");
    }
}
?>