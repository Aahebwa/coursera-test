<?php

    session_start();

    $password = $email = '';
    $errors = array('email'=>'', 'password'=>'');

    if(isset($_POST['submit'])){
        //email validation
        if(empty($_POST['email'])){
            $errors['email'] = "Email cannot be empty";
        }else{
            $email = htmlspecialchars($_POST['email']);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = 'Please enter a valid email address';
            }
        }

        //password validation
        if(empty($_POST['password'])){
            $errors['password'] = "Password is empty";
        }else{
            $password = htmlspecialchars($_POST['password']);
            if(!preg_match('^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$^', $password)){
                $errors['password'] = 'Atleast 8 characters';
            }
        }

        // if(array_filter($errors)){
        //     //echo the code has errors
        // }else{
        //     header('Location:www.bing.com');
        // }

         if(isset($_POST['login'])){
        
            include('db_conn.php');
           
            //prepare the sql statement
            $sql = "SELECT * FROM validation1 WHERE email = '$email' AND password = '$password'";
            
            //generate the result from the connection and the sql
            $result = mysqli_query($conn, $sql);

            if($result){
                echo 'success';
            }else{
                echo 'false';
            }

            if(mysqli_num_rows($result) > 0){
                header('Location:home.php');
            }else{
                echo 'wrong Username or Password';
            }
         }    
                           
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <style>
        

    </style>
</head>
<body>
    <content>
<div class="main-container">
        <div class="container">
            <form action="form.php" method="POST">
                <img src="images/2.png" alt="">
                <h1>ADMIN</h1>
                
                <p>Email:</p>
                <input type="email" name="email" placeholder="Your Email" value="<?php echo htmlspecialchars($email) ?>">
                <p class="error"><?php echo $errors['email']; ?></p>

                <p>Password:</p>
                <input type="password" name="password" placeholder="Your Password" id="pass" value="<?php echo htmlspecialchars($password) ?>">
                <!-- <label for="show-password">
                    <input type="checkbox" id="show-password">show password
                </label> -->
                <p class="error"><?php echo $errors['password']; ?> </p>

                <button class="login" type="submit" name="login" value="">LOGIN</button>
                <a href="sign.php" class="sign-up">sign up</a>
            </form>
        </div>
</div>
    </content>

    <!-- <script>
         const password = document.getElementById('pass');
         const showPassword = document.getElementById('show-password');
            showPassword.addEventListener('change', function(){
                if(showPassword.checked){
                    password.type = "text";
                }else{
                    password.type = "password";
                }
            });
    </script> -->
</body>
</html>