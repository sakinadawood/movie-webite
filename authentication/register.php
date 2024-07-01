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
        <h2>Register</h2>
        <form id="myform" method="post">
        <div class="form-control">
            <input type="text" name="username" pattern="[a-zA-Z0-9_]+" title="Username can only contain letters, numbers, and underscores" required>
            <label>Username</label>
        </div>
        <div class="form-control">
            <input type="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Please enter a valid email address" required>
            <label>Email</label>
        </div>
        <div class="form-control">
            <input type="password" name="password" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}" title="Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character" required>
            <label>Password</label>
        </div>
        <div class="form-control">
            <input type="password" name="confirmpassword" required>
            <label>Confirm Password</label>
        </div>
        
        <input type="submit" name="register" id="submit" value="Submit" class="submit">
        <br>
        <div class="form-help">
            <span style='color:white'>Already have an account? <a href="login.php" style='color:red'> Login</a></span>
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