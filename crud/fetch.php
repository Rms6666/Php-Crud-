<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "crud");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM data 
  WHERE name LIKE '%".$search."%'
  OR lastname LIKE '%".$search."%' 
  OR number LIKE '%".$search."%' 
  OR email LIKE '%".$search."%' 
 ";
}
else
{
 $query = "
  SELECT * FROM data ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Name</th>
     <th>lastname</th>
     <th>number</th>
     <th>email</th>
     <th>Images</th>
      <th>Delete</th>
      <th>Update</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["name"].'</td>
    <td>'.$row["lastname"].'</td>
    <td>'.$row["number"].'</td>
    <td>'.$row["email"].'</td>
    <td><img src="uploads/'.$row["image"].'" style="height:100px;width:100px;"></td>
    <td><a class="btn btn-danger" href="delete.php?id='.$row['id'].'">delete</a></td>
    <td><a  class="btn btn-success" href="update.php?id='.$row['id'].'">Update</a></td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>