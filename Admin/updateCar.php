<?php
include_once 'config.php';
session_start();
if(!isset($_SESSION["USER_EMAIL"])){
  header("Location:../index.php");
}
else{
    if(isset($_POST['deleteCar'])){
        $status=1;
        if(isset($_GET['id'])){
            $deletequery="UPDATE cars SET status=?  WHERE id=?;";
            $deletestmt=mysqli_stmt_init($conn);
            mysqli_stmt_prepare($deletestmt,$deletequery);
            mysqli_stmt_bind_param($deletestmt,"ii",$status,$_GET['id']);
            mysqli_stmt_execute($deletestmt);
            $query="SELECT * FROM acceptedrequest Where carplate=?";
            $mine=mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($mine,$query)){
                echo "The statement failed";
            }else{
                mysqli_stmt_bind_param($mine,"s",$_GET['licencePlate']);
            mysqli_stmt_execute($mine);
            $count=0;
            $result=mysqli_stmt_get_result($mine);
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
            }
        }






            header("Location:cars.php#swipe-2?status=successfull");



        }
    }
    else{
        header("Location:cars.php?status=unsuccessfull");
    }
}

?>