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
              <li><a class="dropdown-item" href="fac_dash.php">Dashboard</a></li>              
              <li><hr class="dropdown-divider"></li>            
            </ul>
          </li>            
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" style="color: white" data-bs-toggle="dropdown" aria-expanded="false">
             EXAM
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="add_exam.php">ADD EXAM</a></li>
              <li><a class="dropdown-item" href="manage_sel_exam.php">MANAGE EXAM</a></li>
              <li><hr class="dropdown-divider"></li>              
            </ul>
          </li>             
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" style="color: white" data-bs-toggle="dropdown" aria-expanded="false">
             REPORTS
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="fac_result.php">EXAM RESULTS</a></li>          
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
        <form action="" method='POST' enctype="multipart/form-data" class="form">
            <!-- <div style="background-color: aqua;padding-top: 5px;padding-bottom: 5px;text-align: center;"><h1 >Add Question</h1></div> -->
            <div style="padding-left: 5px;">
            <label>Marks </label>
            <input type="number" name="marks" style="width:50px;"> <br>
            <label> <h3> Question </h3> </label> <br>
            <!-- <input type="text" name="qname" placeholder="Enter question" class="textfield" style="width: 100%;"> <br>  -->
            <input type="file" name="qname">
            <label><b> Input words for choice </b> </label> <br>
            <label>Choice A</label> <br> 
            <!-- <input type="text" name="op1" placeholder="Option A" class="textfield"> <br>  -->
            <input type="file" name="iop1"> <br>
            <label>Choice B</label> <br> 
            <!-- <input type="text" name="op2" placeholder="Option B" class="textfield"> <br>  -->
            <input type="file" name="iop2"> <br>
            <label>Choice C</label> <br> 
            <!-- <input type="text" name="op3" placeholder="Option C" class="textfield"> <br>  -->
            <input type="file" name="iop3"> <br>
            <label>Choice D</label> <br> 
            <!-- <input type="text" name="op4" placeholder="Option D" class="textfield"> <br>  -->
            <input type="file" name="iop4"> <br>
            <label>Correct Answer</label> <br> 
            <!-- <input type="text" name="cans" placeholder="Correct Answer" class="textfield"> <br> <br> -->
            <input type="file" name="icans"> <br>
            <input type="submit" value="Add question" name="submit" class="btn" style="background-color: aqua;border-radius: 20px;display: block;margin: auto;"><br>
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
</body>
</html>

<?php

include("config.php");
$id = $_GET['exam_id'];
if(isset($_POST['submit']))
{
    $que = $_FILES['qname'];
    $op1 = $_FILES['iop1'];
    $op2 = $_FILES['iop2'];
    $op3 = $_FILES['iop3'];
    $op4 = $_FILES['iop4'];
    $icans = $_FILES['icans'];

    // print_r($que);
    // print_r($op1);
    // print_r($op2);
    // print_r($op3);
    // print_r($op4);
    // print_r($icans);

    $quename = $que['name'];
    $op1name = $op1['name'];
    $op2name = $op2['name'];
    $op3name = $op3['name'];
    $op4name = $op4['name'];
    $icansname = $icans['name'];

    $quetemp = $que['tmp_name'];
    $op1temp = $op1['tmp_name'];
    $op2temp = $op2['tmp_name'];
    $op3temp = $op3['tmp_name'];
    $op4temp = $op4['tmp_name'];
    $icanstemp = $icans['tmp_name'];

    $queext = explode('.',$quename);
    $op1ext = explode('.',$op1name);
    $op2ext = explode('.',$op2name);
    $op3ext = explode('.',$op3name);
    $op4ext = explode('.',$op4name);
    $icansext = explode('.',$icansname);

    $quecheck = strtolower(end($queext));
    $op1check = strtolower(end($op1ext));
    $op2check = strtolower(end($op2ext));
    $op3check = strtolower(end($op3ext));
    $op4check = strtolower(end($op4ext));
    $icanscheck = strtolower(end($icansext));

    $fileextstored = array('jpg','png','jpeg');

    /*if(in_array($quecheck,$fileextstored) && in_array($op1check,$fileextstored) && in_array($op2check,$fileextstored) && in_array($op3check,$fileextstored) && in_array($op4check,$fileextstored) && in_array($icanscheck,$fileextstored))
    {
      if(!file_exists('upload/'.$quename))
      {
        move_uploaded_file($quetemp,'upload/'.$quename);
        $finalque = $quename;        
      }
      else
      {
        $quename = str_replace('.','-',basename($quename,$queext));
        $newquename = $quename.time().".".$queext;
        move_uploaded_file($quetemp,'upload/'.$newquename);
        $finalque = $newquename;
      }
      //do same as above for options and correct answers
      //op1
      if(!file_exists('upload/'.$op1name))
      {
        move_uploaded_file($op1temp,'upload/'.$op1name);
        $finalop1 = $op1name;        
      }
      else
      {
        $op1name = str_replace('.','-',basename($op1name,$op1ext));
        $newop1name = $op1name.time().".".$op1ext;
        move_uploaded_file($op1temp,'upload/'.$newop1name);
        $finalop1 = $newop1name;
      }
      //op2
      if(!file_exists('upload/'.$op2name))
      {
        move_uploaded_file($op2temp,'upload/'.$op2name);
        $finalop2 = $op2name;        
      }
      else
      {
        $op2name = str_replace('.','-',basename($op2name,$op2ext));
        $newop2name = $op2name.time().".".$op2ext;
        move_uploaded_file($op2temp,'upload/'.$newop2name);
        $finalop2 = $newop2name;
      }
      //op3
      if(!file_exists('upload/'.$op3name))
      {
        move_uploaded_file($op3temp,'upload/'.$op3name);
        $finalop3 = $op3name;        
      }
      else
      {
        $op3name = str_replace('.','-',basename($op3name,$op3ext));
        $newop3name = $op3name.time().".".$op3ext;
        move_uploaded_file($op3temp,'upload/'.$newop3name);
        $finalop3 = $newop3name;
      }
      //op4
      if(!file_exists('upload/'.$op4name))
      {
        move_uploaded_file($op4temp,'upload/'.$op4name);
        $finalop4 = $op4name;        
      }
      else
      {
        $op4name = str_replace('.','-',basename($op4name,$op4ext));
        $newop4name = $op4name.time().".".$op4ext;
        move_uploaded_file($op4temp,'upload/'.$newop4name);
        $finalop4 = $newop4name;
      }
      //icans
      if(!file_exists('upload/'.$icansname))
      {
        move_uploaded_file($icanstemp,'upload/'.$icansname);
        $finalicans = $icansname;        
      }
      else
      {
        $icansname = str_replace('.','-',basename($icansname,$icansext));
        $newicansname = $icansname.time().".".$icansext;
        move_uploaded_file($icanstemp,'upload/'.$newicansname);
        $finalicans = $newicansname;
      }*/
      if(in_array($quecheck,$fileextstored) && in_array($op1check,$fileextstored) && in_array($op2check,$fileextstored) && in_array($op3check,$fileextstored) && in_array($op4check,$fileextstored) && in_array($icanscheck,$fileextstored))
      {
        // $destination = 'upload/'.$filename;
        // move_uploaded_file($filetemp,$destination);
        $destque = 'upload/'.$quename;
        move_uploaded_file($quetemp,$destque);
        $destop1 = 'upload/'.$op1name;
        move_uploaded_file($op1temp,$destop1);
        $destop2 = 'upload/'.$op2name;
        move_uploaded_file($op2temp,$destop2);
        $destop3 = 'upload/'.$op3name;
        move_uploaded_file($op3temp,$destop3);
        $destop4 = 'upload/'.$op4name;
        move_uploaded_file($op4temp,$destop4);
        $desticans = 'upload/'.$icansname;
        move_uploaded_file($icanstemp,$desticans);
      }
      $query = mysqli_query($con,"INSERT INTO mulimg(ques, op1, op2, op3, op4, cans, type) VALUES ('$destque','$destop1','$destop2','$destop3','$destop4','$desticans','image')");
      $alert = "<script> alert('Inserted'); </script>";
      echo $alert;
    
}

?>

