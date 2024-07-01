<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $randomInteger = mt_rand();
    $title = $_POST["title"];
    $description = $_POST["description"];
    $release_date = $_POST["release_date"];
    $duration = $_POST["duration"];
    $ticket = $_POST["ticket"];
    $price = $_POST["price"];
    $genre = $_POST["genre"];
    $link = $_POST["link"];
    $target_dir = "uploads/";
    $target_file = $target_dir . date('Usman') . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    $query1="INSERT INTO `tickets`(`id`, `tickets`, `price`) VALUES ('$randomInteger','$ticket','$price')";
    $check=mysqli_query($con,$query1);

    if($check){
    $query2="INSERT INTO `movies`(`movie_id`, `title`, `description`, `release_date`,`cinema_date`,`duration`,
     `ticket_id`,`type`,`image`, `link`) VALUES (null,'$title','$description','$release_date','$release_date','$duration',
    '$randomInteger','$genre','$target_file','$link')";
    mysqli_query($con,$query2);
    }
}
?>