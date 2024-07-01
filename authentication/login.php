<?php
include '../conn.php';
include 'auth.php';
?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Login Page | CodingNepal</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
    <div class="form-wrapper">
        <h2>Login</h2>
        <form id="myform" method="post">
            <div class="form-control">
                <input type="text" name="username" required>
                <label>Username or email</label>
            </div>
            <div class="form-control">
                
                <input type="password" name="password" required>
                <label>Password</label>
                
            </div>


            <input type="submit" name="login" id="submit" value="submit" class="submit">



            <div class="form-help"> 
            <div class="form-help">
                <span style='color:white'>dont have an account? <a href="register.php" style='color:red'> Register</a></span>
            </div>
            </div>
        </form>
        
    </div>


    <script>
        $(document).ready(function(){

            var form = $('#myform');

            $('#submit').click(function(){

                $.ajax({

                    url:form.attr("action"),
                    type: 'post',
                    data: $("#myform input").serialize(),
                    
                    success:function(data){
                        console.log(data);
                    }


                });

            });

        });
    </script>
</body>
</html>