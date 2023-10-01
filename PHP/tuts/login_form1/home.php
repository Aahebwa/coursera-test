<?php 

    $fileError = array('file'=>'');

    if(isset($_POST['upload']) && isset($_FILES['file'])){
        
        // echo '<pre>';
        //     print_r($_FILES['file']);
        // echo '</pre';

        $file_name = $_FILES['file']['name'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $error = $_FILES['file']['error'];
        $file_size = $_FILES['file']['size'];
        
        if($error == 0){
            if($file_size > 125000){
                $fileError['file'] =  'file too large!';
            }else{
                include('dbConnection.php');

                $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
                $upload_path = 'uploadFiles/'. $file_ext;
                move_uploaded_file($upload_path, $file_ext);

                //sql command
                $sql = "INSERT INTO file(input) VALUES('$file_ext')";

                //result
                $result = mysqli_query($conn, $sql);
            }
        }else{
            $fileError['file'] =  "unknown errorr";
        }
    }

?>

<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="style.css">
        <style>
            body{
                background: url(images/bg.jpg);
                background-position: center;
                background-size: cover;
            }
        </style>
    </head>

    <body>
        <form action="home.php" method="POST" enctype="multipart/form-data">

            <input type="file" name="file" class="submitBtn">
            <p class="error" style="text-align: center;"><?php echo $fileError['file']; ?></p>
            <button class="submitBtn" name="upload">Upload</button>

        </form>
    </body>
</html>