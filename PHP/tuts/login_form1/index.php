<?php 

    $errors = array('email'=>'', 'password'=>'', 'username'=>'');
    $email = $password = $username = '';

    if(isset($_POST['submit'])){
        
        //email verifiaction
        // $email = $_POST['email'];
        // if(empty($email)){
        //     $errors['email'] = 'Email Cannot be Empty!';
        // }else{
        //     if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        //         $errors['email'] = 'Please Enter a Valid Email!';
        //     }else{
        //         // 'Success!';
        //     }
        // }

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
             //code has errors
         }else{

            include("dbConnection.php");
            $sql = "SELECT username, password FROM login_form1 WHERE username = $username AND password = $password";

            $result = mysqli_query($conn, $sql);

            
            //header('Location:home.php');
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
            <form action="index.php" method="POST">

                <h4 class="formHeader">Login</h4>

                <label for="username">Username:</label>
                <input type="text" name="username"  class="inputField" value="<?php echo htmlspecialchars($username); ?>">
                <p class="error"><?php echo $errors['username']; ?></p>

                <label for="password">Password:</label>
                <input type="password" name="password" class="inputField" value="<?php echo htmlspecialchars($password); ?>">
                <p class="error"><?php echo $errors['password']; ?></p>

                <button type="submit" name="submit" class="submitBtn">Login</button>

                <a href="signUp.php" class="signup">sign up</a>
            </form>
        </div>
    </body>
</html>