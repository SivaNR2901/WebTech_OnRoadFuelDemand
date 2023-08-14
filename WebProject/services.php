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
        <h1>AMOUNT WE CHARGE </h1>
    </section>

    <section class="service">
        <div class ="row">
            <div class ="service-col">
                <h3>PETROL:</h3>
                <P>We are delivering petrol to your door step with charges of "RS.105" per litre.</P>
            </div>
            <div class ="service-col">
                <h3>DIESEL:</h3>
                <P>We are offering discount of "RS.5" per litre and delivering diesel for "RS.95".</P>
            </div>
            <div class ="service-col">
                <h3>GAS(LPG):</h3>
                <P>We are providing LPG gas cylinder of 15kg with "RS.820". </P>
            </div>
            <div class ="service-col">
                <h3>GAS(CNG):</h3>
                <P>We are providing CNG gas of 1 kg for "RS.90". </P>
            </div>
        </div>
    </section>


    <section class="delivery">
        <h1 align ="center">Products:</h1>
        
        <div class="row">
            <div class="delivery-col">
                <img src="petrol.png" >
            </div>
            
            <div class="delivery-col">
                <img src="diesel.jpeg">
            </div>
    
            <div class="delivery-col">
                <img src="lpg.jpg">
            </div>
    
            <div class="delivery-col">
                <img src="cng.jpg">
            </div>
        </div>
    </section>

    <p align="center">We provide 24/7 service</p>
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
    </script>
    </body>
</html>
';
}
else{
    echo "<script>location.href='loginpage.php'</script>";
}
?>