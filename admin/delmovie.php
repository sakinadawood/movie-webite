<?php
include '../conn.php';
include 'adminsecured.php';
$id=$_GET['id'];
$del="DELETE FROM `movies` WHERE `movie_id`=$id";
mysqli_query($con,$del);
header("location:viewmovie.php");
?>