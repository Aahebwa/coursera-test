<?php

    if(isset($_POST['upload']) && isset($_FILES['file'])){
        
        // echo "<pre>";
        // print_r($_FILES['file']);
        // echo "</pre>";
        include('db_conn.php');

        $img_name = $_FILES['file']['name'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $img_size = $_FILES['file']['size'];
        $error = $_FILES['file']['error'];

        if($error === 0){
            if($img_size > 125000){
                echo 'File too large';
            }else{
                $img_ext = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_upload_path = 'images/'.$img_ext;
                move_uploaded_file($tmp_name, $img_upload_path);

                //insert into database
                $sql = "INSERT INTO file(INPUT) VALUES('$img_ext')";
                
                $result = mysqli_query($conn, $sql);
            }
        }else{
            echo 'Unknown error occured';
        }

    }else{
        echo 'Alimba';
    }
    
?>

<html>
    <head>
        <style>

            form{
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }
            .btn{
                background: #cbb90c;
                padding: 10px 20px;
                border: 2px solid #cbb90c;
                text-transform: uppercase;
                margin: 20px;
                /* position: relative;
                top: 50%;
                left: 50%; */
                transition: .3s ease-in-out
            }

            .btn:hover{
                background: transparent;
                color: #cbb90c;
            }
        </style>
    </head>
    <body>
        <form action="home.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file">
            <button class="btn" name="upload" value="upload">Upload</button>
        </form>
    </body>
</html>