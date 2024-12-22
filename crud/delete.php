<?php
include("conn.php");
$id= $_GET['id'];
$deletedata="DELETE FROM `data` WHERE id=$id";
$delete=mysqli_query($con, $deletedata);
if($delete){
   header("location:list.php");
}
else{
    echo "Data not delete";
}
?>