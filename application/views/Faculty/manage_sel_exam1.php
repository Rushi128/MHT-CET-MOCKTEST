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
    <title>Manage Exam</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@500&family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">    

    <style type="text/css">
        .parents
        {            
            width: 80vw;
            height: 35vw;
            margin: auto;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            padding-top:100px;
        }
        .child
        {
            /* width: 200px; */
            height: 550px;
            background-color: white;
            /* box-shadow: 0 0 20px #bac3c3; */
            box-shadow: -30px 30px 20px rgba(0,0,0,0.3);
            flex: 1 1 200px;
            margin: 20px;
            border-radius: 25px;
        }
    </style>
</head>
<body style="background-color: rgb(247, 244, 240); ">
    <nav class="navbar navbar-expand-lg navbar-light  bg-dark px-4 border-bottom fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand fs-2" href="#" style="color: white;">FACULTY</a>
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
                  <li><a class="dropdown-item" href="<?php echo base_url('Faculty'); ?>">Dashboard</a></li>                
                  <li><hr class="dropdown-divider"></li>                
                </ul>
              </li>                        
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" style="color: white" data-bs-toggle="dropdown" aria-expanded="false">
                 EXAM
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="<?php echo base_url('FacultyAddExam'); ?>">ADD EXAM</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url('FacultyExamlist'); ?>">MANAGE EXAM</a></li>
                  <li><hr class="dropdown-divider"></li>
                  
                </ul>
              </li>                        
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" style="color: white" data-bs-toggle="dropdown" aria-expanded="false">
                 REPORTS
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="<?php echo base_url('FacultyResult'); ?>">EXAM RESULTS</a></li>              
                  <li><hr class="dropdown-divider"></li>                 
                </ul>
              </li>
            </ul>
          </div>        
        </div>
      </nav>
      
      <div class="parents">
          <!-- Update exam -->
        <?php

            // include("config.php");
            // $id = $_GET['exam_id'];        
            // if(isset($_POST['upd']))
            // {
                
            //     $sub = $_POST['subject'];
            //     $title = $_POST['ex_name'];
            //     $des = $_POST['desc'];

            //     $query = mysqli_query($con, "UPDATE exam SET exam_id=$id,subject='$sub',ex_title='$title',ex_description='$des' WHERE exam_id=$id");
            // }            
        ?>
        <div class="child" style="overflow:hidden;">
        <div style="background-color: aqua;padding-top: 5px;padding-bottom: 5px;text-align: center;"><h1 >Update Exam</h1></div>
            <div style="padding-left:5px;padding-right:5px">
                <form action="<?php echo base_url('FacultyUpdExam/'.$exam->exam_id) ?>" method="POST" enctype="multipart/form-data">
                    <label> <h3>Select Subject</h3></label> <br>
                    <select name="subject">
                        <option> Physics</option>
                        <option> Chemistry</option>
                        <option> Maths</option>
                    </select> <br> <br>
                    <label> <h3>Exam Title</h3> </label> <br>
                    <input type="text" name="ex_name" value="<?=  $exam->ex_title ?>" placeholder="Input Exam Title"> <br> <br>
                    <label> <h3>Exam Description</h3> </label> <br>
                    <input type="text" name="desc" value="<?=  $exam->ex_description ?>" placeholder="Input exam description" style="width: 100%;"> <br> <br> <br>
                    <input type="submit" name="upd" value="Update" class="btn" style="background-color: aqua;border-radius: 20px;display: block;margin: auto;"> <br>
                </form>
            </div>
        </div>
        <div class="child" style="overflow:hidden;overflow-y:scroll;">
            <?php                
                // include("config.php");
                // $id = $_GET['exam_id'];
                // $ex_title= mysqli_query($con, "SELECT ex_title FROM exam WHERE exam_id=$id");
                // while($res = mysqli_fetch_array($ex_title))
                // {
                //     $title=$res['ex_title'];
                // }
                // $querys = mysqli_query($con, "SELECT que_id,exam_question, option1, option2, option3, option4, correct_ans, marks FROM questions WHERE exam_title='$title'");
                // $row=mysqli_num_rows($querys);
                $i=1;
                 ?>
                 <div style="background-color: aqua;padding-top: 5px;padding-bottom: 5px;text-align: center;"><h1>Exam Questions<div style="float:right;width:auto;height:auto;background-color:red;padding-right:15px;border-radius:50%;text-align:center;"><h4 style="text-align:center;"><?php  echo $num;    ?></h4></div> </h1> <button class="btn" style="background-color:orange;border-radius:20px;"><a href="<?php echo base_url('FacultyAddQuestion/'.$exam->exam_id) ?>" style="color:white;">Add Questions</a></button></div>
                 <div>
                
                 <?php
                if($questions=="")
                {
                ?>
                <img src="assets/images/empty.png" style="width:300px;height:300px;padding-top:90px;">
                <?php
                }   
                else
                {             
                // while($result=mysqli_fetch_array($querys))
                // {
                //   $que_id = $result['que_id'];
                foreach($questions as $row)
                {
                ?>
                  <div> <?php echo $i.".)  ".$row->exam_question;  //echo $i.".)  ".$result['exam_question'];    ?> 
                <div style="float:right;">
                  <div style="width:25px;height:25px;background-color:orange;border-radius:15px;padding-left:8px;"><?php echo $row->marks; ?></div>
                  <a href="<?php echo base_url('FacultyUpdquest/'.$row->que_id) ?>"><img src="assets/images/edit.png" style="width:20px;height:20px;"></a>
                  <a href="<?php echo base_url('FacultyDelQuestion/'.$row->que_id) ?>"> <img src="assets/images/delete.jpg" style="width:20px;height:20px;"> </a>
                  
                </div> </div>
                <?php 
                    if($row->option1==$row->correct_ans)
                    { 
                ?>
                        <div style="padding-left:15px;color:red"> <?php echo "A)".$row->option1; //echo "A) ".$result['option1'];    ?> </div>
                <?php
                    }
                    else
                    {  
                ?>
                        <div style="padding-left:15px;"> <?php echo "A)".$row->option1;  //echo "A) ".$result['option1'];    ?> </div>
                <?php   
                    }
                    if($row->option2==$row->correct_ans)
                    {
                ?>
                        <div style="padding-left:15px;color:red"> <?php echo "B)".$row->option2; // echo "B) ".$result['option2'];    ?> </div>
                <?php
                    }
                    else
                    {
                ?>
                        <div style="padding-left:15px;"> <?php echo "B)".$row->option2;  //echo "B) ".$result['option2'];    ?> </div>
                <?php
                    }
                    if($row->option3==$row->correct_ans)
                    {
                ?>
                        <div style="padding-left:15px;color:red"> <?php echo "C)".$row->option3; // echo "C) ".$result['option3'];    ?> </div>
                <?php
                    }
                    else
                    {
                ?>
                        <div style="padding-left:15px;"> <?php echo "C)".$row->option3;// echo "C) ".$result['option3'];    ?> </div>
                <?php
                    }
                    if($row->option4==$row->correct_ans)
                    {
                ?>
                        <div style="padding-left:15px;color:red"> <?php echo "D)".$row->option4;// echo "D) ".$result['option4'];    ?> </div>
                <?php
                    }
                    else
                    {
                ?>
                        <div style="padding-left:15px;"> <?php echo "D)".$row->option4;//echo "D) ".$result['option4'];    ?> </div>
                        <?php
                     }                               
                 $i=$i+1;
                 }
               }
            ?>             
        </div>
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