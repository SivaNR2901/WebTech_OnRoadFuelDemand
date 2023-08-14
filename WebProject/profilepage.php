<?php

session_start();

if(isset($_SESSION['name'])){
    $conn = new mysqli('localhost', 'root', '', 'registration');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    $name = $_SESSION['name'];

    $q1 = "SELECT *  FROM customers WHERE Name='$name'";
    $result = $conn->query($q1);
    
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $email= $row['email'];
        $mobilenumber=$row['mobilenumber'];
    }
    else{
        echo 'Error occured : '.', '.$conn->error;
    }
    $conn->close();
    echo '
    <html>
        <head>
            <title>PROFILE</title>
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
     height: 300px;
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
        </head>
        <body>
        <div>
            <h1 align="center">User Profile</h1>
            <table align="center" cellpadding="10">
            <form name="Myform" >
                    <tr>
                        <th align="left">NAME:</th>
                        <td>"'.$name.'"</td>
                    </tr>
                    <tr>
                        <th align="left">EMAIL:</th>
                        <td>"'.$email.'"</td>
                    </tr>
                    <tr>
                        <th align="left">MOBILE NUMBER:</th>
                        <td>"'.$mobilenumber.'"</td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
';
}
else{
    echo "<script>location.href='loginpage.php'</script>";
}
?>