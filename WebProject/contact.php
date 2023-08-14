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
        <script>
            function validate(){
                var Name = document.Myform.name.value;
                var PhNo = document.Myform.phnumber.value;
                var Email = document.Myform.email.value;
                var Address = document.Myform.address.value;
                var Items = document.Myform.items.value;
                var Qitems = document.Myform.qitems.value;
                var Paid= document.Myform.paid.value;
                var re = /^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/;

                if(name==""){
                    alert("Name cannot be empty");
                }
                else if(phnumber.toString().length<10){
                    alert("Phone number is incorrect");
                }

                else if(!re.test(email)){
                    alert("Invalid Email");
                }

                else if(address==""){
                    alert("Address should not be empty");
                }

                else if(items==""){
                    alert("No items selected");
                }
                else if(qitems==""){
                    alert("Quantity of items is not selected");
               }
            }
        </script>
        <style>
        .div1{
            color:rgb(20, 20, 20);
            display:grid;
            justify-content: center;
            align-items: center;
            background-position-x: 10px;
            background-position-y: 10px;
        }

        .div2{
            height: 500px;
            width: 500px;
            border: 1px solid black;
            color: rgb(20, 20, 20);
            background-color: rgb(251, 251, 255);
        }

        .btn {
            color:rgb(250, 75, 75);
            padding: 2px 10px;
            border: 1.5px solid rgb(250, 74, 74);
            background-color: transparent;
        }

        .btn:hover {
            background-color: rgb(32, 21, 21);
            color:rgb(240, 240, 253);
            border: 1.5px solid rgb(17, 17, 23);
        }
        </style>
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
        <h1>MAKE A BOOKING!!</h1>
    </section>
    <section class="div1">
        <div class="div2">
            <form name="Myform" action="connect1.php" method="post">
                <table align="center" cellspacing="40" cellpadding="30">
                    <tr>
                        <td>
                            <label for="name">Name : </label>
                        </td>
                        <td>
                            <input type="text" id="name" name="name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="phnumber"> Phone Number: </label> 
                        </td>
                        <td>
                            <input type="number" id="phnumber" name="phnumber">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="email">Email : </label>
                        </td>
                        <td>
                            <input type="text" id="email" name="email">
                        </td>
                    </tr>
                    <tr>
                    <td>
                            <label for="address">Address:</label> 
                        </td>
                        <td>
                            <input type="text" id="address" name="address">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="items">Items needed : </label>
                        </td>
                        <td>
                            <input type="text" id="items" name="items">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="qitems">Quantity Of Items needed:</label>
                        </td>
                        <td>
                            <input type="text" id="qitems" name="qitems">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="paid"> Amount Paid: </label> : 
                        </td>
                        <td>
                            <input type="number" id="paid" name="paid">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input class="btn" type="submit" id="submit" name="submit" value="Order Now" onclick="validate()">
                        </td>
                    </tr>  
                </table>
            </form>
    <p align="center">Follow us on:</p>
            <section class="delivery">
    <div class="row">
        <div class="delivery-col">
            <img src="facebook.png">
        </div>
        
        <div class="delivery-col">
            <img src="twitter.png">
        </div>

        <div class="delivery-col">
            <img src="instagram.png">
        </div>
        <div class="delivery-col">
        <img src="whatsapp.png">
      </div>
    </div>
</section>
        </div>
</section>
</html>
';
}
else{
    echo "<script>location.href='loginpage.php'</script>";
}
?>