<?php
$conn = new mysqli("localhost","root","","chat");
if(!$conn){
    die('please check your connection'.mysqli_error());
}
?>