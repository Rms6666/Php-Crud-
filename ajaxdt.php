<?php
include 'conn.php';

if(isset($_POST["country_id"]) && !empty($_POST["country_id"])){

    $query=mysqli_query($con, "SELECT * FROM  `state` WHERE  `sid`='".$_POST['country_id']."' ORDER BY state ASC");

    $rowCount=mysqli_num_rows($query);

    if($rowCount >0){
        echo'<option value="">----------------------------------------------------------------------------------Choose State----------------------------------------------------------------------------------------</option>';
      while($row=mysqli_fetch_array($query)){
        echo '<option  value="'.$row['id'].'">'.$row['state'].'</option>';
      }    
    }else{
        echo '<option value="">state not Available</option>';
    }
}

if(isset($_POST["state_id"]) && !empty($_POST["state_id"])){

  $que=mysqli_query($con, "SELECT * FROM `city` WHERE `cityid`='".$_POST['state_id']."' ORDER BY city ASC");

  $rowCalculate=mysqli_num_rows($que);

  if($rowCalculate > 0){
    echo'<option value="">-------------------------------------------------------------------------------------Choose City------------------------------------------------------------------------------------------</option>';
   while($row=mysqli_fetch_array($que)){
    echo'<option value="'.$row['id'].'">'.$row['city'].'</option>';
   }  
}else{
    echo '<option value="">city not Available</option>';
}
}

?>