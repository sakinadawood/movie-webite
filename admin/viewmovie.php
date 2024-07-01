<?php
include '../conn.php';
include 'adminsecured.php';
$allmovies="SELECT * FROM `movies` inner join `tickets`
ON `movies`.`ticket_id` = `tickets`.`id`";
$all=mysqli_query($con,$allmovies);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
     <?php
	 include 'nav.php';
	 ?>


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
			<?php
	 include 'nav2.php';
	 ?>
            <!-- Navbar End -->


            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
			
            <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Movies</h6>
                            <div class="table-responsive text-center">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col"></th>
                                            <th scope="col">Movie Title</th>
                                            <th scope="col">Release Date</th>
                                            <th scope="col">Cinema Date</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Tickets</th>
                                            <th scope="col">Ticket Status</th>
                                            <th scope="col" colspan='2'>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $number=1;
                                      while($data=mysqli_fetch_assoc($all))  {
                                      echo"
                                        <tr>
                                            <th scope='row'>". $number++ ."</th>
                                            <td><img src='".$data['image']."' alt='img' width='100' height='70'> </td>
                                            <td>".$data['title']."</td>
                                            <td>".$data['release_date']."</td>
                                            <td>".$data['cinema_date']."</td>
                                            <td>".$data['price']."</td>
                                            <td>".$data['tickets']."</td>
                                            <td>".$data['status']."</td>
                                            <td class='btn btn-danger mt-2 m-2'><a href='delmovie.php?id=$data[movie_id]' class='text-white'> Delete </a></td>
                                            <td class='btn btn-success mt-2 m-2'><a href='updatemovie.php?id=$data[movie_id]' class='text-white'> Update </a></td>
                                        </tr>";
                                      }
                                       ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

		</div>

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>