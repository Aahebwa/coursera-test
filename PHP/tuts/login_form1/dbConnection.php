<?php 
    //connection to database
    $conn = mysqli_connect('Localhost', 'Timothy', 'Aahebwa#23', 'tibu');

    //confirmation of connection
    if(!$conn){
        echo 'connection error' . mysqli_connect_error();
    }

?>