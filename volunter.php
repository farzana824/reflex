<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Front page</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <section class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="contact">
                                <p><span class="phone"><a href="#">Phone: +1023546789</a></span><span class="email"><a href="#">Email: testdomain@gmail.com</a></span></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="join-us">
                                <p><a href="#">JOIN US NOW</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <a href="#">
                                <div class="main-logo">
                                    <img src="img/logo.jpg" alt="">
                                    </div>
                            </a>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="menu">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
                                    <li><a href="project.php">PROJECT</a></li>
                                </li>
                                 <li><a href="work.php">OUR WORK</a></li>
                                    <li><a href="volunter.php">VOLUNTERS</a></li>
                                   
                             <li><a href="contact.php">CONTACT</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>volunteer registration</h3>

<div class="container" style="margin:2px 193px 14px 102px;">
  <form action="volunter.php"  method ="post" style="margin:11px 162px -33px 171px">
    <label for="form_firstname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="form_lastname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="form_email">Email</label>
    <input type="text" id="email" name="email" placeholder="Enter Your Email..">

    <label for="form_country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
      <option value="usa">Bangladesh</option>
      <option value="usa">India</option>
    </select>
    <label for="form_gender">Gender</label>
    <select id="gender" name="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="commongender">Common Gender</option>

    <label for="form_interest">why interested</label>
    <textarea id="interest" name="interest" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" name="ok" value="Submit">
  </form>
</div>



       
<?php

$fname="";
$lname="";
$email="";

$country="";
$gender="";
$interest="";


$db = mysqli_connect('localhost','root','','project');

if(isset($_POST['ok'])){

$fname = mysqli_real_escape_string($db,$_POST['firstname']);
$lname= mysqli_real_escape_string($db,$_POST['lastname']);
$email= mysqli_real_escape_string($db,$_POST['email']);

$country= mysqli_real_escape_string($db,$_POST['country']);
$gender= mysqli_real_escape_string($db,$_POST['gender']);
$interest= mysqli_real_escape_string($db,$_POST['interest']);

if(empty($name)){ echo "username is required";}

$f ="INSERT INTO db1 (firstname,lastname, email,country,gender,interest ) VALUES ('$fname','$lname','$email','$country','$gender','$interest')";
mysqli_query($db,$f);
}


?>





</body>
</html>
<footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="footer-charity-text">
                            <h2>HELP CHARITY</h2>
                            <p> Any amount helps and the contribution you make today will build a better future for many, tomorrow. Help us to support the most vulnerable</p>
                            <hr>
                            <p><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-4 col-sm-5">
                                <div class="footer-text one">
                                    <h3>RECENT POST</h3>
                                    <ul>
                                        <li><a href="#"><i class="material-icons">keyboard_arrow_right</i> Consectetur Adipisicing Elit</a></li>
                                        <li><a href="#"><i class="material-icons">keyboard_arrow_right</i> Consectetur Adipisicing </a></li>
                                        <li><a href="#"><i class="material-icons">keyboard_arrow_right</i> Consectetur Adipisicing Elit</a></li>
                                        <li><a href="#"><i class="material-icons">keyboard_arrow_right</i> Consectetur Adipisicing</a></li>
                                        <li><a href="#"><i class="material-icons">keyboard_arrow_right</i> Consectetur Adipisicing Elit</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-3">
                                <div class="footer-text two">
                                    <h3>USEFUL LINKS</h3>
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Project</a></li>
                                        <li><a href="#">Our work</a></li>
                                        <li><a href="#">volunter</a></li>
                                        <li><a href="#">contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="footer-text one">
                                    <h3>CONTACT US</h3>
                                    <ul>
                                        <li><a href="#"><i class="material-icons">location_on</i>1 Street, dhanmondhi, Bangladesh</a></li>
                                        <li><a href="#"><i class="material-icons">email</i>reflex@gmail.com</a></li>
                                        <li><a href="#"><i class="material-icons">call</i>+123456789</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </footer>
    </div>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/animationCounter.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/active.js"></script>

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>