<?php
$email = $title = $ingredients = "";
$errors = array('title'=>'', 'email'=>'', 'ingredients'=>'');

if(isset($_POST['submit'])){
    //title verification
    if(empty($_POST['title'])){
        $errors['title'] = "Title Is Missing";
    }else{
        $title = $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
            $errors['title'] = "Title is not valid";
        }
        }

    //email verification
    if(empty($_POST['email'])){
        $errors['email'] = "Email cannot be empty";
    }else{
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "Email is not a valid email";
        }
    }

    //ingredients verification
    if(empty($_POST['ingredients'])){
        $errors['ingredients'] = "ingredients are not provided";
    }else{
        $ingredients =  $_POST['ingredients'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
            $errors['ingredients'] = "There must be atleast one Ingredient";
        }
    }

    if(array_filter($errors)){
        //there are errors in the code
    }else{
        header('Location: index.php');
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        body{
            background: grey;
        }
        .content-container{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form{
            display: flex;
            flex-direction: column;
            padding: 10px;
            min-width: 520px;
            background: #fff;
            border-radius: 4px;
        }

        label{
            color: #cbb09c;
            font-size: 20px;
        }

        input{
            padding: 10px;
            border: none;
            border-bottom: 1px solid #000;
            margin: 20px 0;

        }

        input:focus{
            outline: none;
        }

        .btn{
            background: #cbb09c;
            border: 1px solid #cbb09c;
            border-radius: 3px;
            color: #fff;
            font-size: 20px;
            text-transform: uppercase;
            padding: 10px 20px;
            margin: 10px auto;
            max-width: 120px;
            text-align: center;
            transition: .3s ease-in-out;
        }

        .btn:hover{
            color: #cbb09c;
            background: #fff;
        }

        .error{
            color: red;
        }
    </style>
</head>
<body>
    <div class="content-container">
        <form action="add.php" method="POST">
            <label for="title">Title:</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars($title); ?>">
            <p class="error"><?php echo $errors['title']; ?></p>

            <label for="email">Email:</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
            <p class="error"><?php echo $errors['email']; ?></p>

            <label for="ingredients">Ingredients(comma separated):</label>
            <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients); ?>">
            <p class="error"><?php echo $errors['ingredients']; ?></p>

            <button class="btn" name="submit">submit</button>

        </form>
    </div>
    