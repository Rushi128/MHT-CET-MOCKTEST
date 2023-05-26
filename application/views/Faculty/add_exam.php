<?php
// session_start();
// if(!isset($_SESSION['login_user']))
// {
//   header("location.faculty_log.php");
// }
// else
// {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Exam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@500&family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">

<script>
  
</script>

</head>
<body style="background-color: rgb(247, 244, 240);">

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

<div style="padding-top: 100px;"  >
  <div style="width: 400px;height: auto;box-shadow: -30px 30px 20px rgba(0,0,0,0.3);margin: auto;border-radius: 25px;  ">
  <div  style="width: 400px;height: auto;background-color:white; padding-top: px;border-radius: 25px; ">
    <div style="background-color: aqua; text-align: center; color: white;overflow: hidden;"><h1 >Add exam</h1></div>
    <div style="padding-left:5px;">
      <form action="FacAddEx" method="POST" enctype="multipart/form-data">
        <label> <h3>Select Subject</h3></label> <br>
        <select name="subject">
            <option> Physics</option>
            <option> Chemistry</option>
            <option> Maths</option>
        </select> <br> <br>
        <label> <h3>Exam Title</h3> </label> <br>
        <input type="text" name="ex_name" placeholder="Input Exam Title"> <br>
        <small><?php echo form_error('ex_name'); ?></small>
        <br>
        <label> <h3>Exam Description</h3> </label> <br>
        <input type="text" name="desc" placeholder="Input exam description" style="width: 100%;"> <br> 
        <small><?php echo form_error('desc'); ?></small>
        <br> <br>
        <input type="submit" name="add" value="Add Exam" class="btn" style="background-color: aqua;border-radius: 20px;display: block;margin: auto;"> <br>
    </form>
    </div>
  </div>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js">
</script>
<script>
    AOS.init();
  </script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
    swal({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success",
  button: "Aww yiss!",
});
  </script>
</body>
</html>
<?php
//}
?>
<?php

// include("config.php");
// if(isset($_POST['add']))
// {
//     $sub = $_POST['subject'];
//     $title = $_POST['ex_name'];
//     $desc = $_POST['desc'];

//     $query = mysqli_query($con, "INSERT INTO `exam`(subject, ex_title, ex_description, exam_status) VALUES ('$sub','$title','$desc','inactive')");

//     if($query)
//     {
//       $alert = "<script>alert('Inserted');</script>";
//       echo $alert;
//     }
//     else
//     {
//         echo "Not inserted";
//     }
// }

?>