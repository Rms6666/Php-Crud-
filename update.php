<?php
session_start();

if(!isset($_SESSION['loggedInStatus']) || $_SESSION['loggedInStatus'] !== true) {
    header('Location: login.php');
    exit();
}
?>
<?php
include("conn.php");
$id=$_GET['id'];

    $id = $_GET['id'];
        $query = "SELECT d.*, c.country as countrys, s.state as states, t.city as citys
        FROM `data` d
        left JOIN `country` c ON d.country = c.cid
        left JOIN `state` s ON d.state = s.id
        left JOIN `city` t ON d.city = t.id
       WHERE d.id='$id'";

  $select = mysqli_query($con, $query);
  $row = mysqli_fetch_array($select);	

 
  if(isset($_POST['submit'])){
    $name=$_POST["name"];
    $lastname=$_POST["lastname"];
    $number=$_POST["number"];
    $email=$_POST["email"];
    $country=$_POST["country"];
    $state=$_POST["state"];
    $city=$_POST["city"];
    $gender=$_POST["gender"];
    $hobby = $_POST['hobby'];
    $one = implode(",", $hobby);

    if($_FILES['image']['name'] == "")
    { $image = $row['image']; }
    else { $image = $_FILES['image']['name']; }
    $tmp_name = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp_name,"uploads/".$image);
 
      $que = "UPDATE `data` SET  `name`='$name', 
                                 `lastname`='$lastname', 
                                 `number`='$number', 
                                 `email`='$email',
                                 `country`='$country',
                                 `state`='$state',
                                 `city`='$city',
                                 `hobby`='$one',
                                 `gender`='$gender'
                                 WHERE `id`='$id'";
  
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


  <div>
  <div class="mt-2">
 <label>Select Your Hobby</label>
 <?php $exbrand = $row['hobby']; 
$explodebrand = explode(",", $exbrand); ?>
  <div class="form-check">
  <input class="form-check-input" name="hobby[]" type="checkbox" value="travel"<?php if (in_array("travel",$explodebrand)) { echo "checked='checked'";} ?> id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    traveling
  </label>
</div>
  </div>

  <div class="mt-2">
<div class="form-check">
  <input class="form-check-input" name="hobby[]" type="checkbox" value="coding"<?php if (in_array("coding",$explodebrand)) { echo "checked='checked'";} ?> id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Coding
  </label>
</div>
  </div>

  <div class="mt-2">
<div class="form-check">
  <input class="form-check-input" name="hobby[]" type="checkbox" value="game"<?php if (in_array("game",$explodebrand)) { echo "checked='checked'";} ?> id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Game
  </label>
</div>
  </div>

  <div class="mt-4">
  <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" value="male"<?php if ($row['gender'] == 'male') {echo "checked='checked'";} ?> id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
   Male
  </label>
</div>
  </div>
     </div>

  <div class="mt-2">
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" value="female"<?php if ($row['gender'] == 'female') {echo "checked='checked'";} ?> id="flexRadioDefault2">
  <label class="form-check-label" for="flexRadioDefault2">
   Female
  </label>
</div>
  </div>

  <div class="mt-3">
  <select name="country" id="country" class="form-control">
        <?php
        $query_countries = "SELECT * FROM `country`";
        $result_countries = mysqli_query($con, $query_countries);

        while($country_row = mysqli_fetch_assoc($result_countries)) {
            $selected = ($country_row['cid'] == $row['country']) ? 'selected' : '';
            echo "<option value='" . $country_row['cid'] . "' $selected>" . $country_row['country'] . "</option>";
        }
        ?>
    </select>
</div>

<div class="mt-3">
  <select name="state" id="state" class="form-control">
        <?php
        $query_countries = "SELECT * FROM `state`";
        $result_countries = mysqli_query($con, $query_countries);

        while($country_row = mysqli_fetch_assoc($result_countries)) {
            $selected = ($country_row['id'] == $row['state']) ? 'selected' : '';
            echo "<option value='" . $country_row['id'] . "' $selected>" . $country_row['state'] . "</option>";
        }
        ?>
    </select>
</div>


<div class="mt-3">
  <select name="city" id="city" class="form-control">
        <?php
        $query_countries = "SELECT * FROM `city`";
        $result_countries = mysqli_query($con, $query_countries);

        while($country_row = mysqli_fetch_assoc($result_countries)) {
            $selected = ($country_row['id'] == $row['city']) ? 'selected' : '';
            echo "<option value='" . $country_row['id'] . "' $selected>" . $country_row['city'] . "</option>";
        }
        ?>
    </select>
</div>

  <div class="mt-3">
  <input type="submit" value="submit" name="submit" class="btn btn-info" >
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