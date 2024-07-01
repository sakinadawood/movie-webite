  <style>
    .logout-wrapper {
  position: fixed;
  right: 5%;
  bottom: 60px;
  z-index: 1000;
}

#logout-btn {
  background-color: #f44336;
  color: white;
  padding: 10px 30px;
  border: none;
  border-radius:30px;
  cursor: pointer;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 120px;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  z-index: 1;
  transition: opacity 0.3s ease; 
  opacity: 0; 
}

.dropdown-content.show {
    transition: opacity 0.3s ease; 
  opacity: 1; 
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #f1f1f1;
}

.show {
  display: block;
}

  </style>
  <!-- NAV -->
  <div class="nav-wrapper">
        <div class="container">
            <div class="nav">
                <a href="#" class="logo">
                    <i class='bx bx-movie-play bx-tada main-color'></i>Fl<span class="main-color">i</span>x
                </a>
                <ul class="nav-menu" id="nav-menu">
                    <li><a href="#movies">latest movies</a></li>
                    <li><a href="#Upcoming Movies">Upcoming movies</a></li>
                    <li><a href="#latest cartoons">latest cartoons</a></li>
                    
                    
                </ul>
                <!-- MOBILE MENU TOGGLE -->
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="hamburger"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END NAV -->


    <div class="logout-wrapper">
  <button id="logout-btn"><?php echo $userdata['username'] ?></button>
  <div class="dropdown-content" id="dropdown-content">
    <a href="logout.php">Logout</a>
  </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
  var logoutBtn = document.getElementById('logout-btn');
  var dropdownContent = document.getElementById('dropdown-content');

  logoutBtn.addEventListener('click', function() {
    dropdownContent.classList.toggle('show');
  });

  // Close the dropdown when the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('#logout-btn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      for (var i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
});

</script>