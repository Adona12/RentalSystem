<?php
session_start();
    include 'header.php';
  

?>
    

    
  
    <div class="wrapper">
    <div class="row">
    <?php
    include_once 'config.php';
$count=0;
    $query="SELECT * FROM advertisements";
    $mine=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($mine,$query)){
        echo "The statement failed";
    }else{
    
    mysqli_stmt_execute($mine);
    $result=mysqli_stmt_get_result($mine);
    while($row=mysqli_fetch_assoc($result)){
      $id=$row['id'];
$title= $row['title'];
        $adDescription = $row['adDescription'];
        $adImage=$row["adImage"];
       
      
      $count++;

       
    echo ' 
 
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img src="../images/carImages/'.$adImage.'">
          <span class="card-title">'.$title.'</span>
        </div>
        <div class="card-content">
        '.$adDescription.'
        </div>
        <div class="card-action">
        <form method="post" action="deletead.php?id='.$id.'&title='.$title.'">
        <button id="car-button" class=" btn  waves-light" type="submit" name="deletead">Remove 
        <i class="material-icons right">delete</i>
      </button>
           <form/>
        </div>
      </div>
    </div>
   

            
        ';
        
    }
  }
  if($count==0){
    echo '<div style="margin-top:300px" class="center">No Advertisments in database </div>';
  }
  echo ' <div class="fixed-action-btn">
  <a href="addAdvertisment.php" class="btn-floating btn-large blue">
    <i class="large material-icons">add</i>
  </a>
 
</div>';
  ?>
</div>
    </div>
    
</body>

<script src="jquery-3.4.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script src="../js/script.js"></script>
</body>

</html>