<?php

if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    $query="SELECT * FROM `users` WHERE `username`='$username' or `email`='$email'";
    $check=mysqli_query($con,$query);
    $row=mysqli_num_rows($check);

    if($row>0){
        echo "<script>alert('User Already Registered')</script>";
    }
    else if($password==$confirmpassword){
        $reg="INSERT INTO `users`(`user_id`, `username`, `password`, `email`, `role`) 
        VALUES (null,'$username','$password','$email','user')";
        mysqli_query($con,$reg);
        echo "<script>alert('User Registered Successfully')</script>";
    }
    else{
        echo "<script>alert('Please! insert same password')</script>";
    }
}

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query="SELECT * FROM `users` WHERE `username`='$username' or `email`='$username'";
    $check=mysqli_query($con,$query);
    $row=mysqli_num_rows($check);
    $fetch=mysqli_fetch_assoc($check);

    if($row>0){
        
        if($password==$fetch['password']){
            if($fetch['role']=='user'){
                $_SESSION['user']=$fetch['user_id'];
                header("location:../index.php");
            }
            else{
                $_SESSION['admin']=$fetch['user_id'];
                header("location:../admin/index.php");
            }
        }
        else{
            echo "<script>alert('Invalid Password')</script>";
        }

    }
    else{
        echo "<script>alert('User Not Found')</script>";
    }
}

?>