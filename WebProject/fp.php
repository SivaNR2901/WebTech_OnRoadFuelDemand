<html>
    <head>
        <title>connect</title>
    </head>
    <body>
        <?php

        $regno = $_POST['regno'];
        $password = $_POST['password'];
        $sqn = $_POST['sqn'];

        $conn = new mysqli('localhost', 'root', '', 'details');
        if($conn->connect_error){
            die('Connection Failed : '.$conn->connect_error);
        }

        $q1 = "UPDATE reg_info SET password = '$password' WHERE regno = '$regno'";
        $q2 = "SELECT security_qn FROM reg_info WHERE regno='$regno'";
        $result = $conn->query($q2);

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            if($row['security_qn'] === $sqn){
                if($conn->query($q1) === TRUE){
                    echo 'Password changed sucessfully';
                }
                else{
                    echo 'Error occured : '.$q1.', '.$conn->error;
                }
            }
            else{
                echo 'You have answered the sequrity question wrong';
            }
        }
        else{
            echo 'Error occured : '.', '.$conn->error;
        }
        

        $conn->close();

        ?>
    </body>
</html>
