
<div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>F <span class="text-white">-</span>L<span class="text-white">-</span>I<span class="text-white">-</span>X</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $userdata['username'] ?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                   
                    <a href="movieticket.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Movies Forms</a>
                    <a href="cartoon.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Cartoon Forms</a>

                    <a href="viewmovie.php" class="nav-item nav-link"><i class="fa fa-window-maximize me-2"></i>View Movies</a>
                    <a href="viewcartoon.php" class="nav-item nav-link"><i class="fa fa-window-maximize me-2"></i>View Cartoons</a>
                    <a href="ticket.php" class="nav-item nav-link"><i class="fa fa-window-maximize me-2"></i>User Tickets</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->