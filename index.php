<?php 
include "database.php";

$username = $password = "";
$usernameErr = $passwordErr = "";

if(empty($_POST["username"])) {
  $usernameErr = "Username is required";
}else{
  $username = $_POST["username"];
}

if(empty($_POST["password"])) {
  $passwordErr = "Password is required";
}else{
  $password = $_POST["password"];
}

if ($username && $password) {
  $check_user = mysqli_query($connections, "SELECT * FROM tbl_login WHERE username='$username'");
  $check_user_num = mysqli_num_rows($check_user);

  if($check_user_num > 0) {
    $usernameErr = "Username is already registered.";
  }else{
    echo "Pasok!";
  }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PHP LOGIN</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
  </head>

  <body>
  <form class="form-signin" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div class="text-center mb-4">
      <img class="mb-4" src="pwc.png" alt="" width="200" height="150">
    </div>

    <div class="form-label-group">
      <input type="text" id="username" name="username" class="form-control" placeholder="Username" value="<?php echo $username ?>" >
      <label for="username">Username</label>
      <span style="color:red"><?php echo $usernameErr ?></span>
    </div>

    <div class="form-label-group">
      <input type="password" id="password" name="password" class="form-control" placeholder="Password" value="<?php echo $password ?>" >
      <label for="password">Password</label>
      <span style="color:red"><?php echo $passwordErr ?></span>
    </div>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <hr>
    

  </form>


    <!-- Bootstrap core CSS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
    crossorigin="anonymous"></script>
  </body>
</html>
