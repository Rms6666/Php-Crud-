<?php
 session_start();

// if(isset($_SESSION['loggedInStatus'])){
//     header('Location: index.php');
//     exit();
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form in php mysql with session</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="mt-4 card card-body shadow">

                    <h4>Login</h4>
                    <hr>

                    <?php
                    if(isset($_SESSION['errors']) && count($_SESSION['errors']) > 0){
                        foreach($_SESSION['errors'] as $error){
                            ?>
                            <div class="alert alert-warning"><?= $error; ?></div>
                            <?php
                        }
                        unset($_SESSION['errors']);
                    }

                    if(isset($_SESSION['message'])){
                        echo '<div class="alert alert-success">'.$_SESSION['message'].'</div>';
                        unset($_SESSION['message']);
                    }
                    ?>

                    <form method="POST">
                        <div class="mb-3">
                            <label>Email Id</label>
                            <input type="email" name="email" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="loginBtn" class="btn btn-primary w-100">Login Now</button>
                        </div>
                        <div class="text-center">
                            <a href="index.php">Go to Home Page</a>
                            <br/>
                            <br/>
                            <a href="index.php">Click here to Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php
//session_start();

require_once 'conn.php';

if(isset($_POST['loginBtn'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $errors = [];

    if($email == '' OR $password == ''){
        array_push($errors, "All fields are mandatory");
    }

    if($email != '' && !filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($errors, "Email is not valid");
    }
    
    if(count($errors) > 0) {
        $_SESSION['errors'] = $errors;
        header('Location: login.php');
        exit();
    }

    $userQuery = "SELECT * FROM `data` WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $userQuery);

    if($result && mysqli_num_rows($result) == 1) {
        // Valid credentials
        $_SESSION['loggedInStatus'] = true;
        $_SESSION['message'] = "Logged In Successfully!";
        header('Location: list.php');
        exit();
    } else {
        // Invalid credentials
        array_push($errors, "Invalid Email or Password!");
        $_SESSION['errors'] = $errors;
        header('Location: login.php');
        exit();
    }
}
?>

