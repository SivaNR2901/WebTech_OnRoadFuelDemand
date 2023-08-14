<?php

session_start();

if(isset($_SESSION['name'])){
    echo'
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>S fuels-"On road fuel demand":</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?
        family=Poppins:wght@100;200;300;400;600;7000&disaplay=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-
        awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <section class="sub-header">
        <nav>
            <a href="index.php"><img src="logo.jpg" height="100px" width="20px">
            </a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="services.php">SERVICES</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="profilepage.php">USER PROFILE</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>ABOUT US</h1>
    </section>
    <section class="about-us">
        <div class="row">
            <div class="about-col">
                <h1>We are an fuel delivery company.We are here to help you out if there are any stationary requirements of fuel.If there is any on road fuel demand we are here to help you out!! </h1>
                <p>If you are in any sought of requirements of the fuel whenever you are travelling to places where there is scarcity of fuel within your car or bike breakdown range,we are here to help you. </p>
                <img  src="oiltanker.png">
            </div>
            <div class="about-col">
                <img src="delivery.png">
            </div>
        </div>
    </section>

<section class="footer">
    <div class="icons">
    </div>
</section>
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-100px";
        }
    </script>
<section class="footer">
    <h4>About us</h4>
    <p>We are fuel delivery company.<br> We offer 24/7 services for Petrol,Diesel,Gas delivery!</p>
    <div class="icons">
    </div>
</section>
</body>
</html>
';
}
else{
    echo "<script>location.href='loginpage.php'</script>";
}
?>
