<?php
include("../database/connection.php");
session_start();
if(!isset($_SESSION['email'])){
  echo "<script>location.href='../index.php'</script>";
 }else{
 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student</title>
         <!-- bootstrap cdn link here -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
         <!-- font awesome cdn link here -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
           <!-- custom admin css -->
        <link rel="stylesheet" href="student.css">

</head>
<body> 
<div class="container-fluid bg-primary text-white p-2">
        <h4 class="p-1"><i>--Online Learning--</i></h4>
    </div>
  <div class="container-fluid mt-4">
     <div class="row">
         <?php
          $sql = "SELECT * FROM students WHERE email = '{$_SESSION["email"]}'";
          $result= mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);

          ?>
        <div class="col-md-2 side_nav">   
           <div class="prof_img">
            <img src="<?php if(isset($row['stu_image'])){ echo $row['stu_image'];}?>" alt="">
            </div>
          <ul>
            <li class="pt-3"><a href="stu_profile.php" class="">Profile</a></li>
            <li class="pt-2"><a href="stu_course.php" class="active_link">My Courses</a></li>
            <li class="pt-2"><a href="stu_feedback.php" class="">Feedback</a></li>
            <li class="pt-2"><a href="stu_chng_pass.php" class="">Change Password</a></li>
           <li class="pt-2"><a href="../logout.php" class="">Logout</a>  </li>
          </ul>
        </div>
        <div class="col-md-10" style ="background-color:rgb(211, 209, 209)">
              <div class="jumbotron">
                <h4 class="text-center mt-4 mb-4">All Course</h4>
                <?php
                if($_SESSION['email']){
                $sql = "SELECT courseorder.order_id, course.course_id, course.course_name, course.course_duration,
                course.course_desc, course.course_img, course.course_author, course.course_org_price, course.course_price
                FROM courseorder JOIN course ON course.course_id = courseorder.course_id WHERE courseorder.stu_email = '{$_SESSION['email']}'";
                $result = mysqli_query($conn, $sql);
                }
                ?>
                <?php foreach($result as $course){?>
                <div class="bg-light mb-3 p-4">
                    <h5 class="card-header"><?php echo $course['course_name']?></h5>
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?php echo $course['course_img']?>" alt="pic" class="card-img-top mt-2">
                        </div>
                        <div class="col-sm-6">
                            <div class="card-body">
                                <p class="card-title mb-3"><?php echo $course['course_desc']?></p>
                                <p class="card-title"><?php echo "Instructor: ".$course['course_author']?></p>
                                <p class="card-text d-inline">Price: <small><del>&#8377  <?php echo $course['course_org_price']; ?></del></small> <span class="font-weight-bolder">&#8377 <?php echo $course['course_price']?></span></p>
                                <br><br>
                                <a href="watch_course.php?course_id=<?php echo $course['course_id']?>" class="btn btn-dark float-right">Watch Course</a>
                            </div>
                        </div>
                    </div>

                </div>
                <?php } ?>
                
              </div>
        </div>
     </div>
  </div>
       <!-- bootstrap js link here -->
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
 <?php } ?>