<?php

include 'conn.php';
include 'usersecured.php';
include 'stripe.php';
if(isset($_POST['sub'])){
  $t=$_POST['ticket'];
  $_SESSION['ticket']=$t;
}
$ticket=$_SESSION['ticket'];

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
    $innerquery="SELECT * FROM `movies` inner join `tickets`
     ON `movies`.`ticket_id` = `tickets`.`id` where `movies`.`movie_id`=$id;";
    $inner=mysqli_query($con,$innerquery);
    $fetch=mysqli_fetch_assoc($inner);
    $img=$fetch['image'];
    $total=($fetch['price']*100)*($ticket);
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
            <form action="payment.php" method="post" class="text-center form2">

            <input type="hidden" name="id" value="<?php echo $id ?>" readonly>

    <label for="">Username</label>
    <input type="text" name="name" value="<?php echo $userdata['username'] ?>" readonly>
    <!-- Add email input -->
    <label for="">Email</label>
    <input type="email" name="email" placeholder="Enter your email" required>
    <!-- Add tickets input -->
    <label for="">Tickets</label>
    <input type="number" id="tickets" name="tickets" value="<?php echo $ticket ?>" readonly>
    <label for="">Contact</label>
    <input type="tel" name="contact" placeholder="Contact Number" required>
    
    <script
    
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="<?php echo $PublishableKey?>"
        data-amount="<?php echo $total?>"
        data-name="Flix"
        data-description="<?php echo $fetch['title'] ?>"
        data-image="./admin/<?php echo $fetch['image'] ?>"
        data-currency="usd"
    >

    </script>

</form>

            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="detail.js"></script>

    
</body>
</html>