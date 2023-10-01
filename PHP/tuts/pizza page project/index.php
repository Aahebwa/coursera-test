<?php
   include('db_connection.php');
   
    

   //create a query for all pizzas
   $sql = 'SELECT NAME, INGREDIENTS, EMAIL, ID FROM pizzas ORDER BY CREATED_AT';

   //make querry to get results
   $result = mysqli_query($conn, $sql);

   //fetch results as an array
   $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

   //free result from memory
   mysqli_free_result($result);

   //close connection
   mysqli_close($conn);

   //print_r($pizzas);
   //echo $pizzas['NAME'];
   //print_r(explode(',', $pizzas[0]['INGREDIENTS']));
?>

<!DOCTYPE html>
<html lang="en">
   <?php include('header.php') ?>

   <h3 class="content-header">Pizzas</h3>
<section>
   <div class="container">


      
    <?php foreach($pizzas as $pizza){?>
        <div class="pizza-container">

            <img src="images/download (3).jpeg" alt="pizza image" class="pizza-img">
            <h3 class="pizzaName"><?php echo htmlspecialchars($pizza['NAME']);?></h3>
            <ul>
               <?php foreach(explode(',', $pizza['INGREDIENTS']) as $ing){?>
                  <li><?php echo htmlspecialchars($ing); ?></li>
               <?php }?>
            </ul>
            
            <hr>
         <a class="more-info" href="details.php?ID=<?php echo $pizza['ID']; ?>">more info</a>
        </div>
        <?php }?>
        

   
   </div>
</section>

   <?php include('footer.php') ?>

   
</html>