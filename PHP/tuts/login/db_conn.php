<?php
 
    $conn = mysqli_connect('localhost', 'Timothy', 'Aahebwa#23', 'tibu');
    //check for connection
    if(!$conn){
      echo "connection problem: " + mysqli_connect_error();
   }

?>