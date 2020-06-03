<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/notifications.css">
</head>
<?php


include 'header.php';



?>

<ul class="collection">


<?php

$query='SELECT * FROM request WHERE status=0 AND email="'.$_SESSION['USER_EMAIL'].'";';
$mine=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($mine,$query)){
    echo "The statement failed";
}else{

mysqli_stmt_execute($mine);

$result=mysqli_stmt_get_result($mine);
while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $user= $row['fname'];
    $email= $row['email'];
    $cartype= $row['cartype'];
    echo ' <li class="collection-item"> <h5>Your request to rent Vehicle '.$cartype.' has been declined</h5> </li>';
}
}
?>
     
    </ul>





    
</body>
<?php


include 'footer.php';



?>
</html>