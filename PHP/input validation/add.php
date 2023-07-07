<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php include('header.php') ?>

    <div class="content-container">
        <form action="add.php" method="">
            <label for="title">User Name:</label>
            <input type="text" name="title">

            <label for="email">Email:</label>
            <input type="text" name="email">

        </form>
    </div>

    <?php include('footer.php') ?>
</body>
</html>