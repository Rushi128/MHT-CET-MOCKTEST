
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Question</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@500&family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
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

    
    <div style="padding-top: 100px;"  >
  <div style="width: 400px;height: auto;box-shadow: -30px 30px 20px rgba(0,0,0,0.3);margin: auto;border-radius: 25px;  ">
  <div  style="width: 400px;height: auto;background-color:white; padding-top: px;border-radius: 25px; ">
    <div style="background-color: aqua; text-align: center; color: white;overflow: hidden;padding-top: 5px;padding-bottom: 5px;"><h1 >Add Question</h1></div>
    <div>
    <form action="<?php echo base_url('FacAddQue/'.$id) ?>" method='POST' enctype="multipart/form-data" class="form">
                    <!-- <div style="background-color: aqua;padding-top: 5px;padding-bottom: 5px;text-align: center;"><h1 >Add Question</h1></div> -->
                    <div style="padding-left: 5px;">
                    <label>Marks </label>
                    <input type="number" name="marks" style="width:50px;"> <br>
                    <label> <h3> Question </h3> </label> <br>
                    <input type="text" name="qname" placeholder="Enter question" class="textfield" style="width: 100%;"> <br> 
                    <label><b> Input words for choice </b> </label> <br>
                    <label>Choice A</label> <br> 
                    <input type="text" name="op1" placeholder="Option A" class="textfield"> <br> 
                    <label>Choice B</label> <br> 
                    <input type="text" name="op2" placeholder="Option B" class="textfield"> <br> 
                    <label>Choice C</label> <br> 
                    <input type="text" name="op3" placeholder="Option C" class="textfield"> <br> 
                    <label>Choice D</label> <br> 
                    <input type="text" name="op4" placeholder="Option D" class="textfield"> <br> 
                    <label>Correct Answer</label> <br> 
                    <input type="text" name="cans" placeholder="Correct Answer" class="textfield"> <br> <br>
                    <input type="submit" value="Add question" name="submit" class="btn" style="background-color: aqua;border-radius: 20px;display: block;margin: auto;"><br>
                </form>                
    </div>
  </div>
  </div>

</div>
<?php
// include("config.php");
// $ex_id=$_GET['exam_id'];
?>
<div style="width:500px;display:block;margin:auto;height:auto;padding-top:30px">
  <button style="display: block;margin: auto;background-color:orange;border-radius:20px;padding-left:20px;padding-right:20px;" class="btn"><a href="manage_sel_exam1.php?exam_id=<?php  //echo $ex_id; ?>">Back</a></button>
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

// include("config.php");
// $id = $_GET['exam_id'];
// if(isset($_POST['submit']))
// {
//     $id=$_GET['exam_id'];
//     $question = $_POST['qname'];
//     $opta = $_POST['op1'];
//     $optb = $_POST['op2'];
//     $optc = $_POST['op3'];
//     $optd = $_POST['op4'];
//     $cans = $_POST['cans'];
//     $marks = $_POST['marks'];

//     $ex_title= mysqli_query($con, "SELECT ex_title FROM exam WHERE exam_id=$id");
//     while($res = mysqli_fetch_array($ex_title))
//     {
//         $title=$res['ex_title'];
//     }

//     $query = mysqli_query($con, "INSERT INTO questions(exam_title, exam_question, option1, option2, option3, option4, correct_ans, marks, exam_status) VALUES ('$title','$question','$opta','$optb','$optc','$optd','$cans',$marks,'inactive')");
// }

?>