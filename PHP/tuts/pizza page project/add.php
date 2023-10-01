<?php
    // if(isset($_GET['submit'])) {
    //     echo $_GET['email'];
    //     echo $_GET['title'];
    //     echo $_GET['ingredients'];
    // }
        $email = $name = $ingredients = '';
        $errors =array('EMAIL'=>'', 'NAME'=>'', 'INGREDIENTS'=>'');

     if(isset($_POST['submit'])) {

        include('db_connection.php');

    //email validation
    if(empty ($_POST['EMAIL'])) {
        $errors['EMAIL'] =   "Enter Valid Email";
    }else{
        $email = $_POST['EMAIL'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['EMAIL'] =  'Email is not valid';
        }      
    }

    //title validation
    if(empty ($_POST['NAME'])) {
        $errors['NAME'] =  "Enter Valid Title";
    }else{
        $name = $_POST['NAME'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $name)) {
            $errors['NAME'] =  'Title Must Be Letters and Spaces Only';
        }
    }

    //ingredients validation
    if(empty ($_POST['INGREDIENTS'])) {
        $errors['INGREDIENTS'] =  "Enter Valid Ingredients";
    }else{
        $ingredients = $_POST['INGREDIENTS'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            $errors['INGREDIENTS'] =  'Ingredients Should Be a Comma Separated List';
        }
    }
    
    if(array_filter($errors)){
        //errors in the form
     }else{
        //echo 'form is valid';
        $email = mysqli_real_escape_string($conn, $_POST['EMAIL']);
        $title = mysqli_real_escape_string($conn, $_POST['NAME']);
        $ingredients = mysqli_real_escape_string($conn, $_POST['INGREDIENTS']);

        //sql command to insert user input into the db
        $sql = "INSERT INTO pizzas(NAME, EMAIL, INGREDIENTS) VALUES('$title', '$email', '$ingredients')";

        //save to db and check
        if(mysqli_query($conn, $sql)){
            header('Location: index.php');
        }else{
            echo 'querry error: ' + mysqli_error($conn);
        }
        
     }
     }
     
     //end of input validation
?>

<!DOCTYPE html>
<html lang="en">
   <?php include('header.php') ?>

   <h2 class="add-pizza-header">add a pizza</h2>
   <form action="" method="POST">

    <label for="email">your email:</label>
    <input type="text" name="EMAIL" class="input-field" value="<?php echo htmlspecialchars($email)?>">
    <p class="error"><?php echo $errors['EMAIL'];?></p>

    <label for="title">pizza title:</label>
    <input type="text" name="NAME" class="input-field" value="<?php echo htmlspecialchars($name)?>">
    <p class="error"><?php echo $errors['NAME'];?></p>

    <label for="ingredients">ingredients (comma separated):</label>
    <input type="text" name="INGREDIENTS" class="input-field" value="<?php echo htmlspecialchars($ingredients)?>">
    <p class="error"><?php echo $errors['INGREDIENTS'];?></p>

    <input type="submit" name="submit" value="submit" class="btn form-btn" id="addBtn">
   </form>

   <?php include('footer.php') ?>
</html>