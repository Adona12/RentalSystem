<?php
include_once 'config.php';
if(isset($_POST['decline'])){
if(isset($_GET['id'])){
$id=$_GET['id'];
$stat=0;
$query="UPDATE request SET status=? WHERE id=?;";
    $stmt=mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$query);
    mysqli_stmt_bind_param($stmt,"ii",$stat,$id);
    mysqli_stmt_execute($stmt);
    
    header("Location: order.php?status=successful");
}else{
    echo $_GET['id'];
}
}
else if(isset($_POST['accept'])){

}
?>