<?php 
  
  include('db_connection.php');

  if(isset($_POST['delete'])){
    $id_delete = mysqli_real_escape_string($conn, $_POST['id_delete']);
    $sql = "DELETE FROM pizzas WHERE ID=$id_delete";
    
    if(mysqli_query($conn, $sql)){
        //success
        header('Location:index.php');
    }else{
        //failure
        echo 'Query failure ' . mysqli_error($conn);
    }
  }

  if(isset($_GET['ID'])){

    $id = mysqli_real_escape_string($conn, $_GET['ID']);

    //sql request
    $sql = "SELECT * FROM pizzas WHERE ID = $id";

    //get result
    $result = mysqli_query($conn, $sql);

    //fetch result in array format
    $pizza = mysqli_fetch_assoc($result);

}

?>

<html>
    <head>
        <title>Details</title>
    </head>

    <?php include('header.php') ?>
        <div class="container">
        <div class="pizza-container">
           
            <?php if($pizza){ ?>

                <h4><?php echo htmlspecialchars($pizza['NAME']); ?></h4>
                <p>Created By: <?php echo htmlspecialchars($pizza['EMAIL']); ?></p>
                <p>Created At: <?php echo date($pizza['CREATED_AT']); ?></p>
                <h5>Ingredients:</h5>
                <p><?php echo htmlspecialchars($pizza['INGREDIENTS']); ?></p>

            <?php }else{ ?>
                <?php echo 'There is no such pizza!'; ?>
            <?php }?>

            <!-- form to delete -->
            <form action="details.php" method="POST">
                <input type="hidden" name="id_delete" value="<?php echo $pizza['ID']; ?>">
                <input type="submit" value="delete" name="delete" class="btn delete-btn">
            </form>
        </div>
        </div>

    <?php include('footer.php') ?>

</html>