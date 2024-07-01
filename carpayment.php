<?php
include 'conn.php';
include 'usersecured.php';
include 'stripe.php';
if(isset($_POST['stripeToken'])){
    $id = $_POST['id'];
 
    $token=$_POST['stripeToken'];
  
    $name = $_POST['name'];
    $email = $_POST['email'];
    $ticket = $_POST['tickets'];
    $contact = $_POST['contact'];
    $currentDate = date("Y-m-d");

  
        $innerquery="SELECT * FROM `cartoon` inner join `tickets`
         ON `cartoon`.`ticket_id` = `tickets`.`id` where `cartoon`.`movie_id`=$id;";
        $inner=mysqli_query($con,$innerquery);
        $fetch=mysqli_fetch_assoc($inner);
        $t_id=$fetch['ticket_id'];
        $total=($fetch['price']*100)*($ticket);
        $tickets=$fetch['tickets'];
        $update_tic=$tickets-$ticket;
      
     

      \stripe\charge::create(array(
        "amount"=>$total,
        "currency"=>"usd",
        "description"=>$fetch['title'],
        "source"=>$token,
    ));
    $query="UPDATE `tickets` SET `tickets`=$update_tic WHERE `id`=$t_id";
    $check=mysqli_query($con,$query);
    $t=$fetch['ticket_id'];
    $u=$userdata['user_id'];
    if($check){
        $query2="INSERT INTO `user_ticket`(`id`, `user_id`, `username`, `email`, `contact`,`tickets`,`ticket_id`) 
        VALUES (null,$u,'$name','$email','$contact','$ticket',$t)";
        mysqli_query($con,$query2);
        include 'mailer.php';
        echo "<script>alert('Ticket Purchased Successfuly')</script>";
    }

    header("location:index.php");
    }

?>