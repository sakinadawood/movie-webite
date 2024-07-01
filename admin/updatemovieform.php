<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $randomInteger = mt_rand();
    $id = $_POST["id"];
    $image_id = $_POST["image_id"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $cinema_date = $_POST["cinema_date"];
    $duration = $_POST["duration"];
    $ticket = $_POST["ticket"];
    $price = $_POST["price"];
    $genre = $_POST["genre"];
    $status = $_POST["status"];
    $link = $_POST["link"];

    unlink($image_id);

    $target_dir = "uploads/";
    $target_file = $target_dir . date('Usman') . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    $query1="INSERT INTO `tickets`(`id`, `tickets`, `price`) VALUES ('$randomInteger','$ticket','$price')";
    $check=mysqli_query($con,$query1);

    if($check){
    $query2="UPDATE `movies` SET `title`='$title',`description`='$description',
    `cinema_date`='$cinema_date',`duration`='$duration',`type`='$genre',`ticket_id`='$randomInteger'
    ,`image`='$target_file',`link`='$link',`status`='$status' WHERE `movie_id`= $id";
    mysqli_query($con,$query2);
    }

    header("location:viewmovie.php");
}
?>