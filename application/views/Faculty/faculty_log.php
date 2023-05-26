<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/stafflog.css">
  <title>Faculty Login Form</title>
  <style type="text/css">
    body {
    background: url('assets/images/staffbg.jpg') no-repeat center;
    background-size: cover;
    font-family: sans-serif;
  }
  </style>
</head>
<body style="background-color: antiquewhite;">
  <div class="login-wrapper">
    <form action="<?php echo base_url('Faculty_log') ?>" method="POST" class="form">
      <img src="home.jfif" alt="">
      <h2>Login</h2>
      <div class="input-group">
        <input type="text" name="loginUser" id="loginUser" required>
        <label for="loginUser">User Name</label>
      </div>
      <div class="input-group">
        <input type="password" name="loginPassword" id="loginPassword" required>
        <label for="loginPassword">Password</label>
      </div>
      <input type="submit" value="Login" name="log" class="submit-btn">
      <a href="#forgot-pw" class="forgot-pw">Forgot Password?</a>
    </form>

    <div id="forgot-pw">
      <form action="" class="form">
        <a href="#" class="close">&times;</a>
        <h2>Reset Password</h2>
        <div class="input-group">
          <input type="email" name="email" id="email" required>
          <label for="email">Email</label>
        </div>
        <input type="submit" value="Submit" class="submit-btn">
      </form>
    </div>
  </div>
  <div style="margin:auto;display:block;">
    <button class="btn" style="display:block;margin:auto;background-color:orange;border-radius:20px;width: 100px;height:40px;"><a href="index.php" style="color:white;"><h1>Back</h1></a></button><br>
  </div>
</body>
</html>

<?php
/*
session_start();
include("config.php");
if(isset($_POST['log']))
{
    $uname = $_POST['loginUser'];
    $pass = $_POST['loginPassword'];
    $query = mysqli_query($con, "SELECT `fac_id` FROM `faculty` WHERE `username`='$uname' and `password`='$pass'");
    $row = mysqli_num_rows($query);
    if($row==1)
    {
        $_SESSION['login_user']=$uname;
        header("location:fac_dash.php");
    }
    else
    {
        echo "Incorrect";
    }
}*/

?>