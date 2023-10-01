<?php

      //$file = 'readme.txt';

      //echo realpath($file);
    //  if(file_exists($file)){
    //      echo $file;
    //  }else{
    //      echo 'there is no such file';
    //  }

    $file = 'readme.txt';
    
    $handle = fopen($file, 'a+');

    //read the file
        //echo fread($handle, filesize($file));

    //read a single line
        //echo fgets($handle);
        
    //read a single character
        //echo fgetc($handle);

    //writing to a file
        //fwrite($handle, "\n text");

    //delete a file
        unlink($file);

    

?> 