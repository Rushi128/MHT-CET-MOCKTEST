<?php

// session_start();
// if(!isset($_SESSION['login_user']))
// {
//   header("location.faculty_log.php");
// }
// else
// {
// include("config.php");
// $query = mysqli_query($con, "SELECT exam_id FROM `exam`;");
// $ex_rows = mysqli_num_rows($query);
// $q = mysqli_query($con,"SELECT stud_id FROM registration");
// $st_rows = mysqli_num_rows($q);

echo $_SESSION['username'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@500&family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
<style type="text/css">
  .div1
  {
    height: auto;background-color:blue;margin: 20px;flex: 1 1 200px;box-shadow: -30px 30px 20px rgba(0,0,0,0.3);
    color: #fff;
    padding-left: 10px;
    border-radius:10px;
  }
</style>
</head>
<body style="background-color: rgb(247, 244, 240);font-family: 'Roboto', sans-serif;">

  <nav class="navbar navbar-expand-lg navbar-light  bg-dark px-4 border-bottom fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand fs-2" href="#" style="color: white;">FACULTY</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5 text-center">                    
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" style="color: white" data-bs-toggle="dropdown" aria-expanded="false">
             DASHBOARD
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="Faculty">Dashboard</a></li>              
              <li><hr class="dropdown-divider"></li>            
            </ul>
          </li>            
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" style="color: white" data-bs-toggle="dropdown" aria-expanded="false">
             EXAM
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="FacultyAddExam">ADD EXAM</a></li>
              <li><a class="dropdown-item" href="FacultyExamlist">MANAGE EXAM</a></li>
              <li><hr class="dropdown-divider"></li>              
            </ul>
          </li>             
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" style="color: white" data-bs-toggle="dropdown" aria-expanded="false">
             REPORTS
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="FacultyResult">EXAM RESULTS</a></li>          
              <li><hr class="dropdown-divider"></li>                            
            </ul>
          </li>         
        </ul>      
      </div>
    </div>
  </nav>
  <div style="padding-top: 100px;padding-right: 10px;padding-left: 10px;"><h1> <img src="assets/images/manage.png" style="height:50px;width:50px;"> Dashboard
  
  <a class="btn" style="background-color:darkorange;border-radius: 25px;float: right;" href="<?php base_url('Faculty/faclogout'); ?>" style="color:white;">Logout</a></h1></div>
  <div style="padding-left: 100px;padding-right: 100px;;">
    <div style="margin: auto;display: flex;justify-content: space-around;">
    <?php      

    ?>
      <div class="div1" style="background-color: blueviolet;"><h3>Total Course <div style="float:right;padding-right:5px"><h1><?php echo "3"; ?></h1></div></h3></div>
      <div class="div1" style="background-color: aqua;"><h3>Total Exams <div style="float:right;padding-right:5px"><h1><?php echo $row;  ?></h1></div></h3></div>
      <div class="div1" style="background-color:red;"><h3>Total Students <div style="float:right;padding-right:5px"><h1><?php echo $num;  ?></h1></div></h3></div>
    </div>
  </div>
  <div style="text-align: center;padding-top: 100px;;">
    <img src="assets/images/dash.jpg" style="height: 300px;width: 300px;">
  </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js">
</script>
<script>
    AOS.init();
  </script>
</body>
</html>

<?php
// }
?>

