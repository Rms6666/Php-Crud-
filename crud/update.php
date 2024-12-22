<?php
include("conn.php");
$id=$_GET['id'];

  $id = $_GET['id'];
  $query = "SELECT * FROM `data` WHERE id= '$id'";
  $select = mysqli_query($con, $query);
  $row = mysqli_fetch_array($select);	

  if(isset($_POST['submit'])){
    $name=$_POST["name"];
    $lastname=$_POST["lastname"];
    $number=$_POST["number"];
    $email=$_POST["email"];

    if($_FILES['image']['name'] == "")
    { $image = $row['image']; }
    else { $image = $_FILES['image']['name']; }
    $tmp_name = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp_name,"uploads/".$image);
 
      $que = "UPDATE `data` SET  `name`='$name', 
                                 `lastname`='$lastname', 
                                 `number`='$number', 
                                 `email`='$email',
                                 `image`='$image' WHERE `id`='$id'";
  
  $results= mysqli_query($con, $que);
  if($results){
    header("location:list.php");
  }
  else{
    echo"Data not update";
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Inset</title>
  </head>
  <body>
    <form class="container mt-5" method="post" enctype="multipart/form-data">
        <h4>Crud Form </h4>
    <div class="mt-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control" value="<?php echo $row["name"];?>" >
    </div>

   <div class="mt-3">
   <label>Last Name</label>
   <input type="text" name="lastname" class="form-control" value="<?php echo $row["lastname"];?>"> 
   </div>

  <div class="mt-3">
  <label>Nubmer</label>
  <input type="number" name="number" class="form-control" value="<?php echo $row["number"];?>" >
  </div>

  <div class="mt-3">
  <label>Email</label>
  <input type="email" name="email" class="form-control" value="<?php echo $row["email"];?>" >
  </div>

  <div class="mt-3">
  <label>Image</label>
  <input type="file" name="image" class="form-control" value="<?php echo $row["email"];?>">
  <img src="uploads/<?php echo $row['image'];?>" style="height:100px;width:100px;">
  </div> 

  <div class="mt-3">
  <input type="submit" value="submit" name="submit" class="btn btn-info" >
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>