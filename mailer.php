<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';
//Create an instance; passing `true` enables exceptions
$mail1 = new PHPMailer(true);

try {
    //Server settings
    $mail1->SMTPDebug = 0;                      //Enable verbose debug output
    $mail1->isSMTP();                                            //Send using SMTP
    $mail1->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail1->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail1->Username   = 'usman67483@gmail.com';                     //SMTP username
    $mail1->Password   = 'bozdwqfdpuiqtdlq';                               //SMTP password
    $mail1->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail1->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail1->setFrom('usman67483@gmail.com', 'Hamas');
    $mail1->addAddress($email, $name);     //Add a recipient             //Name is optional
    $mail1->addReplyTo('usman67483@gmail.com', 'Hamas');

    // //Attachments
    // $mail1->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail1->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail1->isHTML(true);                                  //Set email format to HTML
    $mail1->Subject = 'Ticket Updates Flix';
    $mail1->Body    = '
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            /* CSS Styles */
            .ticket {
                border: 2px solid red;
                padding: 20px;
                border-radius: 10px;
                width: 300px;
                margin: 0 auto;
                background-color:black;
                color:white;
                font-weight:bolder;
            }
            .ticket-info {
                margin-bottom: 10px;
            }
            .ticket-info label {
                font-weight: bold;
            }
        </style>
    </head>
    <body>
    <div class="ticket">
        <div class="ticket-info">
            <label>Date :</label> ' . $fetch['cinema_date'] . '
        </div>
        <div class="ticket-info">
            <label>Ticket Id for Movie :</label> ' . $fetch['ticket_id'] . '
        </div>
        <div class="ticket-info">
            <label>Movie Name:</label> ' . $fetch['title'] . '
        </div>
        <div class="ticket-info">
        <label>Total Tickets:</label> ' . $ticket . '
        </div>
        <div class="ticket-info">
            <label>Email:</label> ' . $email . '
        </div>
        <div class="ticket-info">
            <label>Contact Number:</label> ' . $contact . '
        </div>
    </div>
    
    </body>
    </html>
    ';
    $mail1->AltBody = 'Admin:Hammas Umer';

    $mail1->send();
    echo 'Message has been sent';
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail1->ErrorInfo}";
}



?>