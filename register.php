<?php 
include("connect.php");

$user = $_POST['user'];
$psw = $_POST['psw'];

$scan = "select * from userdata where user = '$user' AND password = '$psw'";
$result = mysqli_query($conn,$scan);
$num = mysqli_num_rows($result);
if($num==1){
 echo'<script>alert("Account Already exist")</script> ';
 header('location: index.html');
}
else{
    $insert = " insert into userdata (user,password) values('$user','$psw')";
    mysqli_query($conn,$insert);
    echo'<script>alert("Sign up successfull")</script>';
    
}
header('location:index.html');



?>