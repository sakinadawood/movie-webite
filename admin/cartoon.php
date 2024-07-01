<?php
include '../conn.php';
include 'form2.php';
include 'adminsecured.php';
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
			<div class="col-sm-12 col-xl-12">
    <div class="bg-secondary rounded h-100 p-4">
		<form action="" method="POST" enctype="multipart/form-data">
        <h6 class="mb-4">Add Cartoon</h6>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control bg-dark" id="title" name="title" placeholder="Title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control bg-dark" id="description" name="description" placeholder="Description" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="release_date" class="form-label">Release Date</label>
            <input type="date" class="form-control bg-dark" id="release_date" placeholder="Release date" name="release_date" required>
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Duration (minutes)</label>
            <input type="number" class="form-control bg-dark" id="duration" placeholder="Duration" name="duration" min="1" required>
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Select Movie Genre:</label>
            <select name="genre" class="form-control bg-dark" id="genre">
                <option value="action">Action</option>
                <option value="comedy">Comedy</option>
                <option value="drama">Drama</option>
                <option value="romance">Romance</option>
                <option value="horror">Horror</option>
                <option value="thriller">Thriller</option>
                <option value="sci-fi">Science Fiction</option>
                <option value="fantasy">Fantasy</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="ticket" class="form-label">Tickets</label>
            <input type="number" class="form-control bg-dark" id="ticket" name="ticket" placeholder="Insert Tickets"  min="1" required>
        </div>
        <div class="mb-3">
            <label for="ticket" class="form-label">Ticket Price</label>
            <input type="number" class="form-control bg-dark" id="ticket" name="price" placeholder="Insert Ticket Price"  min="1" required>
        </div>
        <div class="mb-3">
            <label for="link" class="form-label">Link</label>
            <input type="text" class="form-control bg-dark" id="link" name="link" placeholder="Video Link" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control bg-dark" id="image" name="image" accept="image/*" required>
        </div>
		<br><br>
        <input type="submit" class="btn btn-primary" value="Submit">
		</form>
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
    <s;cript src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>