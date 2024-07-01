<?php
if(!$_SESSION['user']){
    header("location:authentication/login.php");
}
else{
    $id=$_SESSION['user'];
    $data="SELECT * FROM `users` WHERE `user_id`=$id";
    $c=mysqli_query($con,$data);
    $userdata=mysqli_fetch_assoc($c);
}
?>