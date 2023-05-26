<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Student Login Form</title>
  <style>
    body {
    background: url('assets/images/std.webp') no-repeat center;
    background-size: cover;
    font-family: sans-serif;
  }
  </style>
</head>
<body style="background-color: antiquewhite;">
  <div class="login-wrapper">
    <form action="<?php echo base_url('Students_log') ?>" method="POST" class="form">
      <img src="Images/studbg.jpg" alt="">
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
      <form action="" method="POST" class="form">
        <a href="#" class="close">&times;</a>
        <h2>Reset Password</h2>
        <div class="input-group">
          <input type="email" name="femail" id="email" required>
          <label for="femail">Email</label>
        </div>
        <div class="input-group">
          <input type="password" name="passw" id="email" required>
          <label for="passw">New Password</label>
        </div>
        <div class="input-group">
          <input type="password" name="cpassw" id="email" required>
          <label for="cpassw">Re-enter password</label>
        </div>
        <input type="submit" name="flog" value="Submit" class="submit-btn">
      </form>
    </div>    
  </div>
  
  <div style="margin:auto;display:block;">
    <button class="btn" style="display:block;margin:auto;background-color:orange;border-radius:20px;width: 100px;height:40px;"><a href="index.php" style="color:white;"><h1>Back</h1></a></button><br>
  </div>
</body>
</html>

<?php

// session_start();
// include("config.php");
// if(isset($_POST['log']))
// {
//     $uname = $_POST['loginUser'];
//     $pass = $_POST['loginPassword'];
//     $query = mysqli_query($con, "SELECT stud_id FROM registration WHERE email='$uname' and pass='$pass'");
//     $row = mysqli_num_rows($query);
//     if($row==1)
//     {
//         $_SESSION['login_user_stud']=$uname;
//         header("location:stud_dash.php");
//     }
//     else
//     {
//         echo "Incorrect";
//     }
// }
// if(isset($_POST['flog']))
// {
//     $email = $_POST['femail'];
//     $pass = $_POST['passw'];
//     $cpass = $_POST['cpassw'];
//     $query = mysqli_query($con,"SELECT stud_id FROM registration WHERE email='$email'");
//     $row = mysqli_num_rows($query);
//     if($row==1)
//     {
//       if($pass==$cpass)
//       {
//         $query = mysqli_query($con,"UPDATE registration SET pass='$pass' WHERE email='$email'");
//         $alert = "<script>alert('Your password updated successfully');</script>";
//         echo $alert;        
//       }
//       else
//       {
//         $alert = "<script>alert('Please re-enter the password correctly');</script>";
//         echo $alert;
//       }
//     }
//     else
//     {
//       $alert = "<script>alert('Please enter the correct email');</script>";
//       echo $alert;
//     }
// }

?>