<html>
    <head>
        <title>Registration Page</title>
        <style>
            body{
                color:rgb(20, 20, 20);
                display:grid;
                justify-content: center;
                align-items: center;
                background-color:white;
                background-image: url("Logo.jpg");
                background-repeat: no-repeat;
                background-size: 7%;
                background-position-x: 10px;
                background-position-y: 10px;
            }

            div{
                height: 450px;
                width: 380px;
                border: 1px solid black;
                
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

        <script>
            function validate(){
                var name = document.Myform.name.value;
                var aadhaarno =document.Myform.name.value;
                var email = document.Myform.email.value;
                var password = document.Myform.password.value;
                var password2 = document.Myform.password2.value;
                var address = document.Myform.address.value;
                var mobilenumber = document.Myform.mobilenumber.value;
                var re = /^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/;

                if(name==""){
                    alert("Name cannot be empty");
                }
                else if(aadhaarno.toString().length<12){
                    alert("Aadhaar number is incorrect");
                }

                else if(!re.test(email)){
                    alert("Invalid Email");
                }

                else if(password.length < 6){
                    alert("Invalid Password");
                }

                else if(password != password2){
                    alert("Both the password must be the same");
                }
                else if(address==""){
                    alert("Address should not be empty");
               }
                else if(mobilenumber.toString().length<10){
                    alert("Mobile number is incorrect");
                }
            }
        </script>
    </head>
    <body>
        <div>
            <h1 align="center">Registration Page</h1>
            <form name="Myform" action="connect.php" method="post">
                <table align="center" cellpadding="10">
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
                            <label for="aadhaarno"> AadhaarNumber: </label> : 
                        </td>
                        <td>
                            <input type="number" id="aadhaarno" name="aadhaarno">
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
                            <label for="password">Password : </label>
                        </td>
                        <td>
                            <input type="password" id="password" name="password">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password2">Confirm Password : </label>
                        </td>
                        <td>
                            <input type="password" id="password2" name="password2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="address">Address:</label>: 
                        </td>
                        <td>
                            <input type="text" id="address" name="address">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="mobilenumber"> MobileNumber: </label> : 
                        </td>
                        <td>
                            <input type="number" id="mobilenumber" name="mobilenumber">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input class="btn" type="submit" id="submit" name="submit" value="Register" onclick="validate()">
                        </td>
                        <td>
                            <button class="btn" formaction="login.html">Already have an account?</button>
                        </td>
                    </tr>  
                </table>
            </form>
        </div>
    </body>
</html>
