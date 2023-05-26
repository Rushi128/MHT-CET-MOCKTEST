<?php
// session_start();
// if(!isset($_SESSION['login_user_stud']))
// {
//   header("location.stud_log.php");
// }
// else
// {
//   $umail = $_SESSION['login_user_stud'];   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@500&family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/stud_dash.css">

</head>
<body style="background-color: rgb(247, 244, 240); ">
    <nav class="navbar navbar-expand-lg navbar-light  bg-dark px-4 border-bottom fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand fs-2" href="#" style="color: white;">STUDENT</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="background-color: aliceblue;box-shadow: 0 0 20px #bac3c3;"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5 text-center">                            
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" style="color: white" data-bs-toggle="dropdown" aria-expanded="false">
                 DASHBOARD
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="Students_Dash">Dashboard</a></li>                
                  <li><hr class="dropdown-divider"></li>                
                </ul>
              </li>                        
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" style="color: white" data-bs-toggle="dropdown" aria-expanded="false">
                 RESULTS
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="Students_Result">RESULTS</a></li>                  
                  <li><hr class="dropdown-divider"></li>                  
                </ul>
              </li>                        
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" style="color: white" data-bs-toggle="dropdown" aria-expanded="false">
                 LOGOUT
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="<?php base_url('Students/studlogout'); ?>">LOGOUT</a></li>              
                  <li><hr class="dropdown-divider"></li>                 
                </ul>
              </li>
            </ul>
          </div>        
        </div>
      </nav>      

      <?php
            // include("config.php");
            // $query = mysqli_query($con, "SELECT * FROM exam WHERE exam_status='active'");
            // $count = mysqli_num_rows($query);
            // if($count==0)
            // {
            // ?> 
            <!--<div style="margin:auto;"><h3>No exams have been uploaded yet</h3><div style="margin:auto;height:100px;width:100px;"><img src="Images/empty.png" style="height:150px;width:170px;"></div></div>-->
                
            // <?php
            // }
            // else
            // {
        ?>
      <div class="table_responsive">
        <link rel="stylesheet" href="Exam list.css">
        
        <table>
          <thead>
            <tr>
              <th style="font-size:20px">Exam Id</th>
              <th style="font-size:20px">Exam Title</th>
              <th style="font-size:20px">Subject</th>
              <th style="font-size:20px">Description</th>
              <th>Action</th>
            </tr>
          </thead>
      
          <tbody>
            <?php
            foreach($data as $row)
            {
            ?>
            <tr>
                <td> <?php echo $row->exam_id;  ?></td>
                <td> <?php echo $row->ex_title;// echo $res[''];  ?></td>
                <td> <?php echo $row->subject;// echo $res[''];  ?></td>
                <td> <?php echo $row->ex_description;// echo $res[''];  ?></td>
                <td> <button class="btn" style="background-color:green;"><a href="<?php echo base_url('Students_Verify/'.$row->exam_id) ?>" style="color:white;"> Start Exam </a> </button></td>
            </tr>  
            <?php     
            }
          //}          
            ?>
    
          
          </tbody>
        </table>
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
//}
?>