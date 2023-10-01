<?php 


$str = "Visit Rwanda!";
$pattern = "/Rwanda!/i";

echo preg_replace($pattern, "Uganda!", $str);

?>