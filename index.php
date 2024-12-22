<?php
include("conn.php");
session_start();

if(isset($_POST['submit'])){
$name=$_POST["name"];
$lastname=$_POST["lastname"];
$number=$_POST["number"];
$email=$_POST["email"];
$password=$_POST["password"];
// $password=md5($Password);
$country=$_POST["country"];
$state=$_POST["state"];
$city=$_POST["city"];
$gender=$_POST["gender"];
$hobby=$_POST["hobby"];
$one=implode(",",$hobby);


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
    $data="INSERT INTO `data`(`name`,`lastname`,`number`,`email`,`image`,`country`,`state`,`city`,`hobby`,`gender`,`password`)
                        VALUE('$name','$lastname','$number','$email','$image','$country','$state','$city','$one','$gender','$password')";
                        
                        $data=mysqli_query($con, $data);
  
                         if($data){
                           header("location:login.php");

                           if(session_start());{
                            header("location:list.php");
                           }
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
  <label>Password</label>
  <input type="password" name="password" class="form-control" placeholder="Enter Your Password" required>
  </div>

  <div class="mt-3">
  <label>Image</label>
  <input type="file" name="image" class="form-control" required>
  </div> 

  <div class="mt-3">
  <select class="form-select" name="country" id="country" aria-label="Default select example">
  <option selected>Select Your Country</option>
  <?php 
    include 'conn.php';
     $query="SELECT * FROM `country`";
     $query1=mysqli_query($con,$query);
     while($country=mysqli_fetch_array($query1)){
  ?>
  <option value="<?php echo $country['cid']; ?>"><?php echo $country['country']; ?></option>
  <?php } ?>
</select>
</div>

<div class="mt-3">
<select name="state" class="form-control" id="state">
</select>
</div> 


<div class="mt-3">
<select name="city" class="form-control" id="city">
</select>
</div> 

  <div>
  <div class="mt-2">
 <label>Select Your Hobby</label>
  <div class="form-check">
  <input class="form-check-input" name="hobby[]" type="checkbox" value="travel" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    traveling
  </label>
</div>
  </div>

  <div class="mt-2">
<div class="form-check">
  <input class="form-check-input" name="hobby[]" type="checkbox" value="coding" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
    Coding
  </label>
</div>
  </div>

  <div class="mt-2">
<div class="form-check">
  <input class="form-check-input" name="hobby[]" type="checkbox" value="game" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Game
  </label>
</div>
  </div>

  <div class="mt-4">
  <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
   Male
  </label>
</div>
  </div>
     </div>

  <div class="mt-2">
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
   Female
  </label>
</div>
  </div>

  <div class="mt-3">
  <input type="submit" value="submit" name="submit" class="btn btn-info">
  <a href="login.php" class="btn ntn-secondary">All ready Ragister </a>
  </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>

<script src="jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#country').on('change',function(){
      var countryID = $(this).val();
      if(countryID){
        $.ajax({
          type: 'POST',
          url: 'ajaxdt.php',
          data: 'country_id='+countryID,
          success:function(html){
            $('#state').html(html);
          }
        });
      }else{
        $('#state').html('<option value="">------------Choose Country First----------------<</option>');
      }
    });
  });
  </script>


  <script type="text/javascript">
  $(document).ready(function(){
    $('#state').on('change',function(){
      var stateID = $(this).val();
      if(stateID){
        $.ajax({
          type: 'POST',
          url:'ajaxdt.php',
          data: 'state_id='+stateID,
          success:function(html){
            $('#city').html(html);
          }
        });
      }else{
        $('#city').html('<option  value="">---------------------Choose State First----------------------<</option>');
      }
    });
  });

</script>