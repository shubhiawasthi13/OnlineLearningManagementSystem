
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap cdn link here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- font awesome cdn link here -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- custom css here -->
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
<?php
include("./header.php")
?>
    <div class="container-fluid bg-dark">
        <div class="row">
            <img src="images/course-banner.jpg" alt="course-bannre" style="height:500px; width:100%; object-fit:cover; box-shadow:10px;">
        </div>
    </div>

    <div class="container mt-5">
   <h1 class="text-center">All Course</h1>
  <!-- 1st card row -->
  <div class="row">
    <div class="col-md-4 mt-4">
        <div class="card">
          <img src="images/python.webp" class="card-img-top" alt="python"/>
           <div class="card-body">
            <h5 class="card-title">Learn python</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, rerum.</p>
           </div>
          <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small> <span class="font-weight-bolder">&#8377 200</span></p>
            <a href="#" class="btn btn-primary text-white float-right font-weight-bolder">Enroll</a>
          </div>
        </div>
    </div>
    <div class="col-md-4 mt-4">
        <div class="card">
          <img src="images/python.webp" class="card-img-top" alt="python"/>
          <div class="card-body">
            <h5 class="card-title">Learn python</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, rerum.</p>
          </div>
          <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small> <span class="font-weight-bolder">&#8377 200</span></p>
            <a href="#" class="btn btn-primary text-white float-right font-weight-bolder">Enroll</a>
          </div>
        </div>
    </div>
    <div class="col-md-4 mt-4">
        <div class="card">
          <img src="images/python.webp" class="card-img-top" alt="python"/>
          <div class="card-body">
            <h5 class="card-title">Learn python</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, rerum.</p>
          </div>
          <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small> <span class="font-weight-bolder">&#8377 200</span></p>
            <a href="#" class="btn btn-primary text-white float-right font-weight-bolder">Enroll</a>
          </div>
        </div>
    </div>
  </div>
    <!-- 2nd card row -->
  <div class="row">
    <div class="col-md-4 mt-4">
        <div class="card">
          <img src="images/react.jpg" class="card-img-top" alt="python"/>
          <div class="card-body">
            <h5 class="card-title">Learn React</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, rerum.</p>
          </div>
          <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small> <span class="font-weight-bolder">&#8377 200</span></p>
            <a href="#" class="btn btn-primary text-white float-right font-weight-bolder">Enroll</a>
          </div>
        </div>
    </div>
    <div class="col-md-4 mt-4">
        <div class="card">
        <img src="images/react.jpg" class="card-img-top" alt="python"/>
          <div class="card-body">
            <h5 class="card-title">Learn React</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, rerum.</p>
          </div>
          <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small> <span class="font-weight-bolder">&#8377 200</span></p>
            <a href="#" class="btn btn-primary text-white float-right font-weight-bolder">Enroll</a>
          </div>
        </div>
    </div>
    <div class="col-md-4 mt-4">
        <div class="card">
        <img src="images/react.jpg" class="card-img-top" alt="python"/>
          <div class="card-body">
            <h5 class="card-title">Learn React</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, rerum.</p>
          </div>
          <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small> <span class="font-weight-bolder">&#8377 200</span></p>
            <a href="#" class="btn btn-primary text-white float-right font-weight-bolder">Enroll</a>
          </div>
        </div>
    </div>
  </div>
</div>
<?php
include("./footer.php")
?>
<!-- all Modal -->
<?php
include("./stu_reg.php");
include("./stu_login.php");
include("./admin_login.php");
?>

    <!-- bootstrap js link here -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    <!-- custom js link here -->
     <script src="js/script.js"></script>
</body>
</html>