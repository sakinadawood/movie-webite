<?php
if(!$_SESSION['admin']){
    header("location:../authentication/login.php");
}
else{
    $id=$_SESSION['admin'];
    $data="SELECT * FROM `users` WHERE `user_id`=$id";
    $c=mysqli_query($con,$data);
    $userdata=mysqli_fetch_assoc($c);
}
?>