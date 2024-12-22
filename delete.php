<?php
// include("conn.php");
// $id= $_GET['id'];
// $deletedata="DELETE FROM `data` WHERE id=$id";
// $delete=mysqli_query($con, $deletedata);
// if($delete){
//    header("location:list.php");
// }
// else{
//     echo "Data not delete";
// }
?>


<?php
include("conn.php");
$deleteId= $_GET['id'];
$query = "SELECT * FROM data WHERE id = ".(int)$deleteId;
$result = mysqli_query($con, $query);
$abort = false;

while($row = mysqli_fetch_assoc($result)) {
        $temp = explode(',',$row['image'] );
        foreach($temp as $image){
                $images[]="/crud/uploads/".trim( str_replace( array('[',']') ,"" ,$image ) );
        }
        foreach($images as $file) {
                if(!unlink($_SERVER['DOCUMENT_ROOT'].$file)){
                   $abort = true; 
                }
            }
       if(!$abort){
           if(mysqli_query($con, "DELETE FROM data WHERE id = ".(int)$deleteId)){
             header("location:list.php");
          }
       }
    }
?>