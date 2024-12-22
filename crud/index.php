<?php
include("conn.php");

if(isset($_POST['submit'])){
$name=$_POST["name"];
$lastname=$_POST["lastname"];
$number=$_POST["number"];
$email=$_POST["email"];

$image = $_FILES['image']['name'];
      $tmp_name = $_FILES['image']['tmp_name'];
      move_uploaded_file($tmp_name,"uploads/".$image);


    $jay=mysqli_query($con,"SELECT * FROM `data` where  `email`= '$email'");
    $moj=mysqli_num_rows($jay);
    if($moj >=1)
    {
      echo "its email is allready enter please new email enter";
    }
    else
    {
    $data="INSERT INTO `data`(`name`,`lastname`,`number`,`email`,`image`)
                        VALUE('$name','$lastname','$number','$email','$image')";
                        
                        $data=mysqli_query($con, $data);
  
                         if($data){
                           header("location:list.php");
                         }
                         else{
                            echo "data not insert";
                         }
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
    <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
    </div>

   <div class="mt-3">
   <label>Last Name</label>
   <input type="text" name="lastname" class="form-control" placeholder="Enter Your Lastname" required> 
   </div>

  <div class="mt-3">
  <label>Nubmer</label>
  <input type="number" name="number" class="form-control" placeholder="Enter Your Phone Number" required>
  </div>

  <div class="mt-3">
  <label>Email</label>
  <input type="email" name="email" class="form-control" placeholder="Enter Your Email Addresh" required>
  </div>

  <div class="mt-3">
  <label>Image</label>
  <input type="file" name="image" class="form-control" required>
  </div> 

  <div class="mt-3">
  <input type="submit" value="submit" name="submit" class="btn btn-info" >
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>