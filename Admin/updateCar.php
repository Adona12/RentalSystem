<?php
include_once 'config.php';
session_start();
if(!isset($_SESSION["USER_EMAIL"])){
  header("Location:../index.php");
}
else{
    if(isset($_POST['updateCar'])){
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
                mysqli_stmt_bind_param($mine,"s",$_GET['plate']);
            mysqli_stmt_execute($mine);
            $count=0;
            $id=0;
            $driver=0;
            $result=mysqli_stmt_get_result($mine);
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                echo $row['id'];

                echo "         ";
                $driver=$row['driver'];
            }

        }



 $updatequery="UPDATE drivers SET available=?  WHERE id=?;";
            $updatestmt=mysqli_stmt_init($conn);
            echo $id;
            mysqli_stmt_prepare($updatestmt,$updatequery);
            mysqli_stmt_bind_param($updatestmt,"ii",$status,$driver);
            mysqli_stmt_execute($updatestmt);

            echo mysqli_error($conn);

            header("Location:cars.php#swipe-2?status=successfull");



        }
    }
    else{
        header("Location:cars.php?status=unsuccessfull");
    }
}

?>