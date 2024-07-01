<?php

include 'conn.php';
include 'usersecured.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="inner.css">
    <title>Document</title>
</head>
<body>
<?php
  include 'nav.php';
  $id=$_GET['id'];
  if($id != null){
    $innerquery="SELECT * FROM `cartoon` inner join `tickets`
     ON `cartoon`.`ticket_id` = `tickets`.`id` where `cartoon`.`movie_id`=$id;";
    $inner=mysqli_query($con,$innerquery);
    $fetch=mysqli_fetch_assoc($inner);
    $img=$fetch['image'];
  }
  else{
    ob_start(); 
    header("location:index.php");
    ob_end_flush();
  }
  ?>

<style>
    .banner {
    background-image: url(admin/<?php echo $img; ?>); 
    background-size: cover;
    width: 100%;
    height: auto;
    background-position: center;
    position: relative;  
}
</style>

    <div class=" col-lg-12 col-md-12 col-sm-12 banner">
        
           <div class="container mt-5 main-con">
            <div class="row section">
                <div class="col-lg-4 col-md-12 col-sm-12 image">
                    <img src="./admin/<?php echo $fetch['image'] ?>" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 ">
                    <p class="para"><?php echo date('Y') ?></p>
                    <h2 class="heading"><?php echo $fetch['title'] ?></h2>
                    <ul class="category">
                        <p class="text-danger"> Flix <span style="color:transparent">--</span></p>
                        <li> movie </li>
                        <li><?php echo $fetch['type'] ?></li>
                      </ul>
                      <p class="para1"><?php echo $fetch['description'] ?></p>
               
                      <div class="movie-info">
                        <i class="fa fa-clock-o"> &nbsp;&nbsp;&nbsp;<span><?php echo $fetch['duration'] ?> min.</span></i> 
                         &nbsp;&nbsp;&nbsp;<span>Tickets : &nbsp;&nbsp;&nbsp;<span><?php echo $fetch['tickets'] ?> <b class="text-danger">&nbsp; Left</b></span></span>
                      </div>

                      <div class="two-btn">
                        <a href="<?php echo $fetch['link'] ?>"><button class="btt">Watch Trailer</button></a> &nbsp; &nbsp;
                        <?php
                        
                        $currentDate = date("Y-m-d");
                        if($fetch['tickets']>5){
                          if($fetch['status'] =="off"){
                            echo'<button class="btn btn-primary text-white">Ticket Release Soon</button>';
                          }
                          else{
                            if($fetch['cinema_date']<$currentDate){
                              echo'<button class="btn btn-danger text-white">New Date Release Soon</button>';
                            }
                            else{
                            echo "<form method='post' action='buycarticket.php?id=$id' style='display: inline-block;'>
                            <div class='row'>
                            <div class='col'>
                                <input type='number' min='1' max='5' name='ticket' placeholder='Number of tickets' class='form-control ticket' required>
                            </div>
                            <div class='col'>
                                <input type='submit' name='sub' class='btts bt' value='Buy Ticket'>
                            </div>
                        </div>
                            </form>";
                            }
                          }
                        }
                       
                        else{
                          echo'<button class="btn btn-danger text-white">Sold Out</button>';
                        }
                        ?>
                     </div>
               
               
               
               
                    </div>
            </div>
           </div>

    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="detail.js"></script>

    
</body>
</html>