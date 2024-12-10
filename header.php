<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><i><b class ="custom_logo fs-3">OnlineLearning</b></i></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-light"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav custom_nav">
                  <li class="nav-item custom_nav_item">
                    <a class="nav-link text-white"  href="index.php">Home</a>
                  </li>
                  <li class="nav-item custom_nav_item">
                    <a class="nav-link text-white" href="courses.php">Courses</a>
                  </li>
                  <li class="nav-item custom_nav_item">
                    <a class="nav-link text-white" href="payment.php">Payment Status</a>
                  </li>
                  <?php
                  session_start();
                  if(isset($_SESSION['email'])){
                    echo '
                     <li class="nav-item custom_nav_item">
                    <a class="nav-link text-white" href="students/stu_profile.php">My Profile</a>
                  </li>
                  <li class="nav-item custom_nav_item">
                    <a class="nav-link text-white" href="logout.php">Logout</a>
                  </li>';
                  }else{
                    echo '<li class="nav-item custom_nav_item">
                    <a class="nav-link text-white" data-bs-toggle="modal" data-bs-target="#logModal" href="#">Login</a>
                  </li>
                  <li class="nav-item custom_nav_item">
                    <a class="nav-link text-white" data-bs-toggle="modal" data-bs-target="#regModal" href="#">Signup</a>
                  </li>';
                  }
                  ?>
                  <li class="nav-item custom_nav_item">
                    <a class="nav-link text-white" href="#">Feedback</a>
                  </li>
                  <li class="nav-item custom_nav_item">
                    <a class="nav-link text-white" href="#">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
      </nav>
    </header>
</body>
</html>