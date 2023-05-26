<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIT Barshi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="index.css"> -->

    <link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Charm:wght@700&family=Noto+Serif:ital,wght@0,700;1,700&family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
	
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
#nav
{
    height: 20%;
    width: 100%;
    background-color: red;
    color: white;
    padding-top: 7px;
    padding-bottom: 7px;
    padding-left: 15px;
}
#image
{
    height: 45px;
    width: 45px; 
    float: left; 
    border-radius: 25px;
}
#cardimage
{
    width: 100%;
    height: 200px;
}
#but
{
    border-radius: 20px;
    background-color: green;
}
#but:hover
{
	background-color: black;
	color: blanchedalmond;
	
}
.card-title:hover
{
	padding-left: 10px;
	color: red;
	/* font-size: 25px; */
}
.card-text:hover
{
	padding-left: 10px;
	color: skyblue;
	/* font-size: 18px; */
}
.card:hover
{
	border: 2px solid black;
}

.row{
	display: flex;
	margin: auto;
}

/* footer */
.footer{
	/* background-color: #24262b; */
    background-color: black;
    padding: 70px 0;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
	font-size: 18px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #e91e63;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}

.container{
	max-width: 1170px;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}

/* footer responsive */

/*responsive*/
@media(max-width: 767px){
    .footer-col{
      width: 50%;
      margin-bottom: 30px;
  }
  }
  @media(max-width: 574px){
    .footer-col{
      width: 100%;
  }
  }

    </style>
</head>
<!--for text-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,700;1,700&family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">

<?php //echo base_url() ?>

<body>
    <div id="nav"> 
        <h1 style="text-align: center;font-family: 'Noto Serif', serif;"> <img src="assets/images/logo.png" id="image"> MIT College of Railway Engineering and Research Barshi </h1> 
    </div>
    <img src="assets/images/home.jpg" style="width: 100%;"><hr>
    <h1 style="text-align: center;font-family: 'Noto Serif', serif;"> Welcome to the exam portal</h1>  <hr>
    <!--Cards-->

      <div class="card-group" style="padding-right: 5px;padding-left: 5px;border-color: black;border-radius: 15px;">
        <div class="card" id="img">
        <img src="assets/images/registration.jpg" class="card-img-top" alt="..." id="cardimage"> 
          <div class="card-body">
            <h5 class="card-title">Student Registration</h5>
            <p class="card-text">Registration Page for students</p>
            <a href="Students_Register" class="btn btn-primary" id="but">Register</a>
          </div>
        </div>
        <div class="card" id="img" >
          <img src="assets/images/studlogin.jpg" class="card-img-top" alt="..." id="cardimage">
          <div class="card-body">
            <h5 class="card-title">Student Login</h5>
            <p class="card-text">Login page for students</p>
            <a href="Students" class="btn btn-primary" id="but">Login</a>
          </div>
        </div>
        <div class="card" id="img">
          <img src="assets/images/staff.webp" class="card-img-top" alt="..." id="cardimage">
          <div class="card-body">
            <h5 class="card-title">Faculty Login</h5>
            <p class="card-text">Login page for Faculty</p>
            <a href="Fac" class="btn btn-primary"  id="but">Login</a>
          </div>
        </div>
      </div>
      <br>
      <hr>
      <div>
          <h1 style="text-align: center;font-family: 'Noto Serif', serif;"> This website is created by : </h1>
          <hr>
          <h2 style="text-align: center;font-family: 'Charm', cursive;"> Rushikesh Thorat </h2>
          <h2 style="text-align: center;font-family: 'Charm', cursive;"> Rajesh Kota </h2>
          <h2 style="text-align: center;font-family: 'Charm', cursive;"> Siddharth Pamnath </h2>
          <h2 style="text-align: center;font-family: 'Charm', cursive;"> Anup Pathak </h2>
      </div>
      <hr>
      <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="footer-col">
              <h4>ABOUT US</h4>
              <ul>
                <li><a href="https://www.mitcorer.edu.in/">ADDMISSIONS</a></li>
                <li><a href="https://www.mitcorer.edu.in/">ACADEMICS</a></li>
                <li><a href="https://www.mitcorer.edu.in/">PLACEMENT</a></li>
                <li><a href="https://www.mitcorer.edu.in/">RAILWAY MODEL ROOM</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>OUR LOCATION</h4>
              <ul>
                <li><a href="https://www.mitcorer.edu.in/">MAEER’s MIT College of Railway Engineering and
                    Research At Post Jamgaon, Tal. Barshi, Dist. Solapur, Maharashtra</a></li>
                <li><a href="#">info.mitcorer@mitpune.edu.in</a></li>
                <li><a href="#">principal.mitcorer@mitpune.edu.in</a></li>
                <li><a href="#">tel:+91 8459974437</a></li>
                <li><a href="#">tel:+91 8459967882</a></li>
                <li><a href="#">tel:+91 8329340161</a></li>
                <li><a href="#">tel:+91 9552682736</a></li>
              </ul>
            </div>
            <div class="footer-col">
    
            </div>
            <div class="footer-col">
              <h4>follow us</h4>
              <div class="social-links">
                <a href="https://www.facebook.com/mitcorer/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/mitcorer"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/mitcorer_barshi/"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/company/mitcorer/?viewAsMember=true"><i
                    class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
