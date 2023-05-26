<?php
// session_start();
// if(!isset($_SESSION['login_user_stud']))
// {
//   header("location.stud_log.php");
// }
// else
// {
//     include("config.php");
//         $ex_id = $_GET['exam_id'];
//         $mail = $_GET['email'];
        
//         $ex_title= mysqli_query($con, "SELECT ex_title FROM exam WHERE exam_id=$ex_id");
//         while($res = mysqli_fetch_array($ex_title))
//         {
//             $title=$res['ex_title'];
//         }
//         $querys = mysqli_query($con, "SELECT que_id,exam_question, option1, option2, option3, option4, correct_ans, marks FROM questions WHERE exam_title='$title'");
//         $row=mysqli_num_rows($querys);
//         $i=1;
//         $n=1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@500&family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <style type="text/css">
        #div1
        {
            height:550px;
            width:80%;
            overflow:hidden;
            overflow-y:scroll;
            background-color:white;
            margin:auto;
            box-shadow: -30px 30px 20px rgba(0,0,0,0.3);
            border-radius:30px;
            padding-left:5px;
        }
    </style>
    <script type="text/javascript">
        var id = 0;
        var sec=0, min=0, hr=0;
        function printmsg()
        {
            document.getElementById('hh2').innerHTML = hr + ":" + min + ":" + sec;
            document.getElementById('hh2').innerHTML = hr + ":" + min + ":" + sec;
            sec++;                        
            if(sec==15)
            {
                min++;
                sec = 0;
                //stop();                                    
            }
            if(min==60)
            {
                hr++;
                min = 0;                
            }
            if(hr==1)
            {
                stop();
            }
        }
        function start()
        {
            id = window.setInterval(printmsg,1000);
        }
        function stop()
        {
            window.clearInterval(id);   
            window.location.href="stud_check.php?exam_title=<?php echo $title; ?>&email=<?php echo $mail; ?>&timer=<?php echo "exceed"; ?>";          
        }
    </script>
</head>
<body style="background-color: rgb(247, 244, 240);" onload="start()">
<nav class="navbar navbar-expand-lg navbar-light  bg-dark px-4 border-bottom fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand fs-2" href="#" style="color: white;">EXAM</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="background-color: aliceblue;box-shadow: 0 0 20px #bac3c3;"></span>
          </button>
              
        </div>
      </nav>
        <div style="padding-top:100px;background-color:orange;width:120px;float:right;padding-right:10px;border-radius:25px">
            <h2 id="hh2" style="text-align:center;"> Timer </h2>
            <!-- Display the countdown timer in an element -->
            <p id="timer"></p>
        </div>

    <div style="padding-top:100px;"><div style="height:auto;width:auto;background-color:red;margin:auto;text-align:center;padding-left:50px;padding-right:50px;"> <h2><b>Click submit within time, otherwise your exam won't be submitted and you will be out of the exam, all questions are compulsory</b></h2> </div></div>

    <div>
        <div id="div1">
            <div style="height:50px;width:100%;background-color:black;"><h1 style="color:white;padding-left:15px;">Questions </h1></div>
        <?php

        // include("config.php");
        // $ex_id = $_GET['exam_id'];
        // $mail = $_GET['email'];
        
        // $ex_title= mysqli_query($con, "SELECT ex_title FROM exam WHERE exam_id=$ex_id");
        // while($res = mysqli_fetch_array($ex_title))
        // {
        //     $title=$res['ex_title'];
        // }
        // $querys = mysqli_query($con, "SELECT que_id,exam_question, option1, option2, option3, option4, correct_ans, marks FROM questions WHERE exam_title='$title'");
        // $row=mysqli_num_rows($querys);
        // $i=1;
        // $n=1;
        //main code
        // while($result = mysqli_fetch_array($querys))
        // {
        $i = 1;
        $n = 1;
        foreach($exam as $row)
        {
        ?> 
        <form action="<?php echo base_url('Students_Check/'.$row->exam_id) ?>" method="POST" enctype="multipart/form-data">
            <div> <?php echo $i.".)  ".$row->exam_question;    ?> </div>
            <input type="radio" name="grp[<?php echo $i; ?>]" value="<?php echo $row->option1; ?>"> <?php echo $row->option1; ?> </input><br>
            <input type="radio" name="grp[<?php echo $i; ?>]" value="<?php echo $row->option2; ?>"> <?php echo $row->option2; ?> </input><br>
        <?php 
            if($row->option3!="")
            {
        ?>  
            <input type="radio" name="grp[<?php echo $i; ?>]" value="<?php echo $row->option3; ?>"> <?php echo $row->option3; ?> </input><br>
            <input type="radio" name="grp[<?php echo $i; ?>]" value="<?php echo $row->option4; ?>"> <?php echo $row->option4; ?> </input><br><br>
        <?php
            }
            else
            {
        ?> <br>
        <?php
            }            
            $i = $i + 1;
            $n = $n + 1;
        }
        ?>
        
        </div>
        <div><br>
        <input type="submit" name="sub" value="Submit" class="btn" style="display:block;margin:auto;background-color:green;color:white;border-radius:20px;"></div>
        </form>
    </div>
    
    <script>
// Set the date we're counting down to
//var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

var endDateTime = new Date();
endDateTime = new Date(endDateTime.setHours(endDateTime.getHours() + 1));


// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  //var now = new Date().getTime();
  
  var startDateTime= new Date().getTime();
  
  

  // Find the distance between now and the count down date
  var countDownTime = endDateTime - startDateTime;

  // Time calculations for days, hours, minutes and seconds
  
  var hours = Math.floor((countDownTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((countDownTime % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((countDownTime % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("timer").innerHTML =  hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (countDownTime < 0) {
    clearInterval(x);
    document.getElementById("timer").innerHTML = "Time Up..!";
    window.location.href = "students_Dash";
  }
}, 1000);
</script>
    
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