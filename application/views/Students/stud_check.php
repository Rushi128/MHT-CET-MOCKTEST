
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Completed</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@500&family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/css/Exam list.css">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap');

* {
    box-sizing: border-box;
}

body {
    min-height: 100vh;
    display: flex;
    font-family: 'Roboto', sans-serif;
}

.table_responsive {
    max-width: 900px;
    border: 1px solid #00bcd4;
    background-color: #efefef33;
    padding: 15px;
    overflow: auto;
    margin: auto;
    border-radius: 4px;
}

table {
    width: 100%;
    padding-top: 200px;
    font-size: 13px;
    color: #444;
    white-space: nowrap;
    border-collapse: collapse;
}

table>thead {
    background-color: #00bcd4;
    color: #fff;
}

table>thead th {
    padding: 15px;
}

table th,
table td {
    border: 1px solid #00000017;
    padding: 10px 15px;
}

table>tbody>tr>td>a>img {
    display: inline-block;
    width: 40px;
    height: 40px;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid #fff;
    box-shadow: 0 2px 6px #0003;
}


.action_btn {
    display: flex;
    justify-content: center;
    gap: 10px;
}

.action_btn>a {
    text-decoration: none;
    color: #444;
    background: #fff;
    border: 1px solid;
    display: inline-block;
    padding: 7px 20px;
    font-weight: bold;
    border-radius: 3px;
    transition: 0.3s ease-in-out;
}

.action_btn>a:nth-child(1) {
    border-color: #26a69a;
}

.action_btn>a:nth-child(2) {
    border-color: orange;
}

.action_btn>a:hover {
    box-shadow: 0 3px 8px #0003;
}


table>tbody>tr {
    background-color: #fff;
    transition: 0.3s ease-in-out;
}


table>tbody>tr:nth-child(even) {
    background-color: rgb(238, 238, 238);
}

table>tbody>tr:hover{
    filter: drop-shadow(0px 2px 6px #0002);
}
</style>

</head>
<body style="background-color: rgb(247, 244, 240);">

  <nav class="navbar navbar-expand-lg navbar-light  bg-dark px-4 border-bottom fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand fs-2" href="#" style="color: white;">STUDENT</a>
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
              <li><a class="dropdown-item" href="<?php echo base_url('Students_Dash'); ?>">Dashboard</a></li>              
              <li><hr class="dropdown-divider"></li>            
            </ul>
          </li>            
                       
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" style="color: white" data-bs-toggle="dropdown" aria-expanded="false">
             LOGOUT
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="<?php base_url('Students/studlogout'); ?>">Logout</a></li>          
              <li><hr class="dropdown-divider"></li>                            
            </ul>
          </li>         
        </ul>      
      </div>
    </div>
  </nav>



        
<div class="table_responsive">
        <link rel="stylesheet" href="Exam list.css">
    
        <table>
          <thead>
            <tr>
              <th style="font-size:20px">Id</th>
              <th style="font-size:20px">Exam Title</th>
              <th style="font-size:20px">Name</th>
              <th style="font-size:20px">Email</th>
              <th style="font-size:20px">Marks</th>              
            </tr>
          </thead>
      
          <tbody>
            
          <?php
            foreach($data as $row)
            {
            ?>
            <tr>
                <td> <?php  echo $row->stud_id;  ?></td>
                <td> <?php  echo $row->exam_title; //echo $res[''];  ?></td>
                <td> <?php  echo $row->stud_name; //echo $res[''];  ?></td>
                <td> <?php  echo $row->email; //echo $res[''];  ?></td>
                <td> <?php  echo $row->marks; //echo $res[''];  ?> </td>                
            </tr>  
            <?php     
            }
            ?>
    
          
          </tbody>
        </table>
      </div>
        <?php
        // echo "<br> Ur total score is ".$result;      
//         $q = mysqli_query($con,"UPDATE marks SET marks=$result WHERE email='$mail' and exam_title='$title'");
//         if($q)
//         {
//             $alert = "<script>alert('Your exam has been submitted');</script>";
//             echo $alert;
//         }
//     }
// }
?>
    
    


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js">
</script>
<script>
    AOS.init();
  </script>
</body>
</html>


