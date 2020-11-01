<?php
include("connect.php");
$username = $_POST['user'];
$psw=$_POST['psw'];

$scan = "select * from userdata where user = '$username' AND password = '$psw'";
$result = mysqli_query($conn,$scan);
$num = mysqli_num_rows($result);
if($num==1){
    echo'<script>alert("Login successfull")</script>';
}
else{
    echo'<script>alert("Wrong credential")</script>';
}

?>