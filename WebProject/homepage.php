<?php

session_start();

if(isset($_SESSION['name'])){
    echo '

<html>
    <head>
        <title>HOME</title>
        <style>
        <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>S fuels-"On Road Fuel Demand":</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?
        family=Poppins:wght@100;200;300;400;600;7000&disaplay=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-
        awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <section class="header">
        <nav>
            <a href="index.php"><img src="Logo.jpg" height="100px" width="20px" >
            </a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="services.php">SERVICES</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class ="text-box">
            <h1> ON ROAD FUEL DEMAND - "S fuels":</h1>
            <P> We are an fuel delivery company.We are here to help you out of any stationary requirements of fuel.</P>
            <br><br>
        </div>
    </section>

<section class ="branches">
    <h1>LOCATIONS OF OUR BRANCHES: </h1>
    
        <div class="row">
            <div class="branches-col">
                <img src="vijaya.jpg">
                <div class="layer">
                    <h3>VIJAYAWADA</h3>
                </div>
            </div>
            <div class="branches-col">
                <img src="guntur.jpg">
                <div class="layer">
                    <h3>GUNTUR</h3>
                </div>
            </div>
            <div class="branches-col">
                <img src="hyderabad.jpg">
                <div class="layer">
                    <h3>HYDERABAD</h3>
                </div>
            </div>
            <div class="branches-col">
                <img src="chennai.jpg">
                <div class="layer">
                    <h3>CHENNAI</h3>
                </div>
            </div>
        </div>
    </section>

<section class="delivery">
    <h1>OUR DELIVERY OPTIONS:</h1>
    
    <div class="row">
        <div class="delivery-col">
            <img src="petrol.png">
        </div>
        
        <div class="delivery-col">
            <img src="petrolcan.jpg">
        </div>

        <div class="delivery-col">
            <img src="fuelfilling.jpg">
        </div>
    </div>
</section>

<section class="service">
    <h1>SERVICES WE OFFER:</h1>
    <div class ="row">
        <div class ="service-col">
            <h3>Petrol Delivery: </h3>
            <P>If there is any requirement of petrol in any remote areas or Large industrial sector.We are here to help you out.When you are in travelling and there is scarcity of petrol contact us. </P>
        </div>
        <div class ="service-col">
            <h3>Diesel Delivery: </h3>
            <P>If there is any requirements of diesel while travelling or sudden requirement of fuel.We are here to help you out..</P>
        </div>
        <div class ="service-col">
            <h3>Gas(LPG) Delivery: </h3>
            <P>If there is any requirement for Liquid petroleum gas,in vehicles such as Cars,Autos etc..we will sought out your problem.</P>
        </div>
        <div class ="service-col">
            <h3>Gas(CNG) Delivery: </h3>
            <P>We are also delivering the Compressed natural gas,for vehicles such as Autos. </P>
        </div>
    </div>
</section>

<section class ="reviews">
    <h1>CUSTOMER REVIEWS:</h1>

    <div class="row">
        <div class="reviews-col">
            <div>
                <p>I had a good experience with this company.It helped me when,I was in travelling and unfortunately,I am out of fuel and this flexibility helped me!   </p>
                <h3>SIVA</h3>
            </div>
        </div>

        <div class="reviews-col">
            <div>
                <p>You can trust 100% this company,I was an industrialist and I had been ordering fuel with ease from this S-fuels! </p>
                <h3>BOBBY</h3>
            </div>
        </div>

        <div class="reviews-col">
            <div>
                <p>This company had followed all the protocols and safety measurements regarding delivery of the products! </p>
                <h3>JACK</h3>
            </div>
        </div>
    </div>
</section>

<section class="cta">
    <h1>Order from anywhere,anytime...We are providing 24/7 service. </h1>
   
</section>

<section class="footer">
    <h4>About us</h4>
    <p>We are fuel delivery company.<br> We offer 24/7 services for Petrol,Diesel,Gas delivery!</p>
    <div class="icons">
    </div>
</section>


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
    echo "<script> location.href='loginpage.php'</script>";
}
?>