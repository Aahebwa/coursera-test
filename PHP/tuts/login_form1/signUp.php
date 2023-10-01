<?php 

    $errors = array('email'=>'', 'password'=>'', 'username'=>'');
    $email = $password = $username = '';

    if(isset($_POST['submit'])){
        
        //email verifiaction
        $email = htmlspecialchars($_POST['email']);
        if(empty($email)){
            $errors['email'] = 'Email Cannot be Empty!';
        }else{
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = 'Please Enter a Valid Email!';
            }else{
                // 'Success!';
            }
        }

        //username verifiaction
        $username = htmlspecialchars($_POST['username']);
        if(empty($username)){
            $errors['username'] = 'Username Cannot be Empty!';
        }else{
            if(!preg_match('/^[a-zA-Z\s]+$/', $username)){
                $errors['username'] = 'Please Enter a Valid Username!';
            }else{
                // 'Success!';
            }
        }

        //password verifiaction
        $password = htmlspecialchars($_POST['password']);
        if(empty($password)){
            $errors['password'] = 'Password Cannot be Empty!';
        }else{
            if(!preg_match('^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$^', $password)){
                $errors['password'] = 'Please Enter a Valid Password!';
            }else{
                // 'Success!';
            }
        }

        if(array_filter($errors)){
            //echo 'code has errors';
        }else{

            include('dbConnection.php');

            //sql request to insert user data
            $sql = "INSERT INTO login_form1(email, username, password) VALUES('$email', '$username', '$password')";

            //result from the connection and the sql
            $result = mysqli_query($conn, $sql);

            if($result){
                header('Location:home.php');
            }
        }
    }

?>

<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container">
            <form action="signUp.php" method="POST">

            <h4 class="formHeader">Sign Up</h4>

                <label for="email">Email:</label>
                <input type="email" name="email" class="inputField" value="<?php echo htmlspecialchars($email); ?>">
                <p class="error"><?php echo $errors['email']; ?></p>

                <label for="username">Username:</label>
                <input type="text" name="username"  class="inputField" value="<?php echo htmlspecialchars($username); ?>">
                <p class="error"><?php echo $errors['username']; ?></p>

                <label for="password">Password:</label>
                <input type="password" name="password" class="inputField" value="<?php echo htmlspecialchars($password); ?>">
                <p class="error"><?php echo $errors['password']; ?></p>

                <button type="submit" name="submit" class="submitBtn">Sign up</button>

                <a href="index.php" class="signup">Login</a>
            </form>
        </div>
    </body>
</html>