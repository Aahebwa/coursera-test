<?php
    $password = $email = '';
    $errors = array('email'=>'', 'password'=>'');

    if(isset($_POST['submit'])){

       include('db_conn.php');

        //email validation
        if(empty($_POST['email'])){
            $errors['email'] = "Email cannot be empty";
        }else{
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = 'Please enter a valid email address';
            }
        }

        //password validation
        if(empty($_POST['password'])){
            $errors['password'] = "Password is empty";
        }else{
            $password = $_POST['password'];
            if(!preg_match('^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$^', $password)){
                $errors['password'] = 'Atleast 8 characters';
            }
        }

         if(array_filter($errors)){
             //echo the code has errors
         }else{

            $sql = "INSERT INTO validation1(email, password) VALUES('$email', '($password)'";
            
            //ADD INPUT TO THE DB
            if(mysqli_query($conn, $sql)){
                header('Location:home.php');
            } else{
                echo 'query error: '.mysqli_error($conn);
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
            <form action="" method="POST">
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

                <button class="login" type="submit" name="submit" value="submit">SIGN UP</button>
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