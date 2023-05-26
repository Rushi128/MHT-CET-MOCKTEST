<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/contact.css">
    <title>Registration Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="form">
            <div class="contact-info">
                <h3 class="title">Let's get in touch</h3>
                <p class="text"> WELCOME TO MIT COLLEGE OF RAILWAY ENGINERRING AND RESEARCH  </p>
                <div class="info">
                    <div class="social-information"> <i class="fa fa-map-marker"></i>
                        <p>“Education’s purpose is to replace an empty mind with an open one.”</p>
                    </div>
                    <div class="social-information"> <i class="fa fa-envelope-o"></i>
                        <p></p>
                    </div>
                    <div class="social-information"> <i class="fa fa-mobile-phone"></i>
                        <p></p>
                    </div>
                </div>
                <!-- <div class="social-media">
                    <p>Connect with us :</p>
                    <div class="social-icons"> <a href="#"> <i class="fa fa-facebook-f"></i> </a> <a href="#"> <i class="fa fa-twitter"></i> </a> <a href="#"> <i class="fa fa-instagram"></i> </a> <a href="#"> <i class="fa fa-linkedin"></i> </a> </div>
                </div> -->
            </div>
            <div class="contact-info-form"> <span class="circle one"></span> <span class="circle two"></span>
                <form action="Students_insert" method="POST" autocomplete="off" enctype="multipart/form-data" name="frm" id="frm">
                    <h3 class="title">Register Here</h3>
                    <div class="social-input-containers"> 
                        <input type="text" name="name" class="input" placeholder="Enter name" /> 
                        <small><?php echo form_error('name'); ?></small>
                    </div>
                    <div class="social-input-containers"> 
                        <input type="email" name="email" class="input" placeholder="Email" /> 
                        <small><?php echo form_error('email'); ?></small>
                    </div>
                    <div class="social-input-containers"> 
                        <input type="tel" name="phone" class="input" placeholder="Phone" /> 
                        <small><?php echo form_error('phone'); ?></small>
                    </div>
                    <div class="social-input-containers">
                        <input type="text" name="state" class="input" placeholder="State" /> 
                        <small><?php echo form_error('state'); ?></small>
                    </div>
                    <div class="social-input-containers"> 
                        <input type="text" name="city" class="input" placeholder="City" /> 
                        <small><?php echo form_error('city'); ?></small>
                    </div>                    
                    <div class="social-input-containers"> 
                        <input type="text" name="cname" class="input" placeholder="College Name" /> 
                        <small><?php echo form_error('cname'); ?></small>
                    </div> 
                    <!--changes-->
                    <!--<div class="social-input-containers"> -->
                        <input type="radio" name="grp" value="PCM"  />PCM &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  
                        <input type="radio" name="grp" value="PCMB" />PCMB
                        <small><?php echo form_error('cname'); ?></small>
                    <!--</div> -->
                    <!--changes ends here-->
                    <div class="social-input-containers"> 
                        <input type="text" name="pass" class="input" placeholder="Password" /> 
                        <small><?php echo form_error('pass'); ?></small>
                    </div>
                    <div class="social-input-containers"> 
                        <input type="text" name="cpass" class="input" placeholder="Confirm Password" /> 
                        <small><?php echo form_error('cpass'); ?></small>
                    </div>
                   
                     <!-- <button type="button" name="submit"> Register</button> -->
                    <input type="submit" class="btn" name="submit" value="Register" style="border-radius:25px;">
                </form>
            </div>            
        </div>        
    </div>
    <div style=""><button class="btn" style="background-color:blue;border-radius:20px;display:block;margin:auto;"><a href="index.php" style="color:white">Back</a></button></div><br><br>

    



</body>
</html>

<?php
/*
include("config.php");
if(isset($_POST['register']))
{
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $phone = $_POST['phone'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $cname = $_POST['cname'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    if($pass==$cpass)
    {
        $q = mysqli_query($con, "SELECT * FROM registration WHERE email='$mail'");
        $emailcount = mysqli_num_rows($q);
        if($emailcount>0)
        {
            $alert = "<script>alert('Email already exists');</script>";
            echo $alert;
        }
        else
        {
            $query = mysqli_query($con,"INSERT INTO registration(stud_name, email, pass, col_name, mobile, city, state) VALUES ('$name','$mail','$pass','$cname','$phone','$city','$state')");
            if($query)
            {
                $alert = "<script>alert('Registered Successfully');</script>";
                echo $alert;
            }
        }
    }
    else
    {
        $alert = "<script>alert('Re-enter password correctly');</script>";
        echo $alert;
    }
}*/
?>
