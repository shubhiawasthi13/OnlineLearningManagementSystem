<?php
include("./database/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Learning Management System</title>
    <!-- bootstrap cdn link here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font awesome cdn link here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- custom css here -->
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
<!-- navigation start here -->
<?php
 include("./header.php");
 include("./database/connection.php");
?>
<!-- navigation end here -->

<!-- home section start here -->

 <!-- video  banner start here -->
<div id="home" class="container-fluid custom_home">
     <div class="vid_parent">
        <video playsinline autoplay muted loop>
            <source src="videos/banvid.mp4">
        </video>
          <div class="vid_overlay"></div>
     </div>
  <div class="vid_content">
        <h1 class="my_content">Welcome to Online Leaning</h1>
        <small class="my_content">Learn and Implement</small>
        <br>
        <?php
        if(isset($_SESSION['email'])){
          echo '<a href="students/stu_profile.php" class="btn btn-primary mt-3">Profile</a>';
        }else{
           echo '<a href="#" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#regModal">Get Started</a>';
        }
        ?>
  </div>
</div>
    <!-- video banner end here -->

    <!-- text banner start here -->
     <div class="container-fluid bg-primary txt_banner">
      <div class="row p-2">
        <div class="col-sm">
          <h5 class="text-white"> <i class="fa-solid fa-book-open mr-3"></i> 100+ Online Courses</h5>
        </div>
        <div class="col-sm">
          <h5 class="text-white"> <i class="fa-regular fa-user mr-3"></i> Expert Instructions</h5>
        </div>
        <div class="col-sm">
          <h5 class="text-white"> <i class="fa-regular fa-keyboard mr-3"></i></i> Lifetime Access</h5>
        </div>
        <div class="col-sm">
          <h5 class="text-white"> <i class="fa-solid fa-rupee-sign mr-3"></i> </i> Money Back Guarantee*</h5>
        </div>
      </div>
     </div>
  
    <!-- text banner end here -->
<!-- home section end here -->


<!-- courses section start here -->
<div class="container mt-5">
   <h1 class="text-center">Popular Course</h1>
   <!-- 1st card row -->
   <?php
       $sql = "SELECT * FROM course LIMIT 3";
      $result = mysqli_query($conn, $sql);

    ?>
  <div class="row">
  <?php foreach($result as $course){?>
    <div class="col-md-4 mt-4">
        <div class="card">
          <img src="<?php echo str_replace('..', '.',$course['course_img']);?>" class="card-img-top" style="height:200px" alt=""/>
           <div class="card-body">
            <h5 class="card-title"><?php echo $course['course_name']?> Course</h5>
            <p class="card-text"> <?php echo $course['course_desc'] ?></p>
           </div>
          <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>&#8377  <?php echo $course['course_org_price']; ?></del></small> <span class="font-weight-bolder">&#8377 <?php echo $course['course_price']?></span></p>
            <a href="course_detail.php?course_id='<?php echo $course["course_id"];?>'" class="btn btn-primary text-white float-right font-weight-bolder">Enroll</a>
          </div>
        </div>
     </div>
     <?php } ?>  
  </div>
    <!-- 2nd card row -->

    <?php
       $sql = "SELECT * FROM course LIMIT 3,3";
      $result = mysqli_query($conn, $sql);

    ?>
  <div class="row">
  <?php foreach($result as $course){?>
    <div class="col-md-4 mt-4">
        <div class="card">
          <img src="<?php echo str_replace('..', '.',$course['course_img']);?>" class="card-img-top" style="height:200px" alt=""/>
           <div class="card-body">
            <h5 class="card-title"><?php echo $course['course_name']?> Course</h5>
            <p class="card-text"> <?php echo $course['course_desc'] ?></p>
           </div>
          <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>&#8377  <?php echo $course['course_org_price']; ?></del></small> <span class="font-weight-bolder">&#8377 <?php echo $course['course_price']?></span></p>
            <a href="course_detail.php?course_id='<?php echo $course["course_id"];?>'" class="btn btn-primary text-white float-right font-weight-bolder">Enroll</a>
          </div>
        </div>
     </div>
     <?php } ?>  
  </div>
</div>
  

<div class="text-center m-4">
  <a href="courses.php" class="btn btn-dark btn sm">View All Courses</a>
</div>
      
<!-- courses section end here -->

<!-- contact section start here -->
<?php
include("./contact.php")
?>
<!-- contact section end here -->


<!-- review section start here -->

<?php
include("./review.php")
?>

<!-- review section end here -->

<!-- footer section start here -->
<?php
include("./footer.php")
?>
<!-- footer section end here -->

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