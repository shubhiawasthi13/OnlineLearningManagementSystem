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
            <li class="pt-2"><a href="stu_course.php" class="">My Courses</a></li>
            <li class="pt-2"><a href="stu_feedback.php" class="">Feedback</a></li>
            <li class="pt-2"><a href="stu_chng_pass.php" class="active_link">Change Password</a></li>
           <li class="pt-2"><a href="../logout.php" class="">Logout</a>  </li>
          </ul>
        </div>
        <div class="col-md-10">
        <form class="m-4" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row['email']?>" readonly>
            </div>
            <br>
            <div class="form-group">
              <label for="exampleInputPassword1">New Password</label>
              <input type="password" class="form-control" name ="password" id="exampleInputPassword1">
            </div>
            <br>
              <button type="submit" name="stu_pass_update" value ="sty_Pass_update" class="btn btn-dark">Update</button>
              <button type="reset" class="btn btn-primary">Reset</button>
         </form>
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
  <?php
   if(isset($_POST['stu_pass_update'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $hash_password = password_hash($pass, PASSWORD_DEFAULT);
    $em= $row['email'];
    $sql = "UPDATE students SET password ='$hash_password' WHERE email = '$em'";
    $result = mysqli_query($conn, $sql);
    if($result){
      echo "<script>alert('password updated successfully')</script>";
      echo "<script>location.href='stu_chng_pass.php'</script>";
    }else{
      echo "<script>alert('failed')</script>";
    }
   }
  ?>










<?php } ?>

