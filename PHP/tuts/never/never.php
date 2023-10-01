<?php

    if(isset($_POST['submit'])){

        $conn = mysqli_connect('localhost', 'Timothy', 'Aahebwa#23', 'tibu');
        if(!$conn){
            echo 'failed';
        }
        
        $email = $_POST['email'];
        $password = $_POST['password'];


        $sql = "SELECT * FROM `validation1` WHERE email='$email' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){

            header('Location:home.php');
        }else{

            echo 'No Such Account';
        }


    }

?>

<html>
    <head>
        <title>never</title>
    </head>

    <body>
        <form action="never.php" method="POST">
            <input type="email" placeholder="enter your email" value="" name="email">
            <input type="password" placeholder="enter your password" value="" name="password">
            <input type="submit" value="submit" name="submit">
        </form>
    </body>
</html>