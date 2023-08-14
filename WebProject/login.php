<html>
    <head>
        <title>login</title>
    </head>
    <body>
        <?php

        $name = $_POST['name'];
        $password = $_POST['password'];

        session_start();

        if(isset($_SESSION['name'])){
            echo "<script> location.href='index.php'</script>";
        }

        else{

            $conn = new mysqli('localhost', 'root', '', 'registration');
            if($conn->connect_error){
                die('Connection Failed : '.$conn->connect_error);
            }

            $q1 = "SELECT Password FROM customers WHERE Name='$name'";
            $result = $conn->query($q1);
            
            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                if($row['Password'] === $password){
                    $_SESSION['name']=$name;
                    echo "<script> location.href='index.php'</script>";
                }
                else{
                    echo "<script> location.href='loginpage.php'</script>";
                }
            }
            else{
                echo 'Invalid Login Credentials : '.', '.$conn->error;
            }
            $conn->close();
        }
        ?>
    </body>
</html>
