<?php
include("../database/connection.php");
session_start();
if(!isset($_SESSION['admin_email'])){
  echo "<script>location.href='../index.php'</script>";
}else{


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
     <!-- bootstrap cdn link here -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font awesome cdn link here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom admin css -->
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><i><b class =" fs-4 text-white">OnlineLearning --Admin Dashboard--  <i class="fa-solid fa-user"></i></b></i></a>
    </div>
    </nav>      
</header>     

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-2 mt-5 side_nav">   
          <ul>
            <li class="pt-3"><a href="admin.php" class="">DASHBOARD</a></li>
            <li class="pt-3"><a href="courses.php" class="">Courses</a></li>
            <li class="pt-3"><a href="lessons.php" class="">Lessons</a></li>
            <li class="pt-3"><a href="students.php" class="">Students</a></li>
            <li class="pt-3"><a href="payment_status.php" class="">Payment Status</a></li>
            <li class="pt-3"><a href="change_pass.php" class="active_link">Change Paasword</a>
            <li class="pt-3"><a href="../logout.php" class="">Logout</a>  </li>
          </ul>
        </div>
             <?php
                 $sql = "SELECT * FROM adminn";
                 $result = mysqli_query($conn, $sql);
                 $row = mysqli_fetch_assoc($result);
             ?>
         <div class="col-md-4 mt-5">
          <form class="m-4" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" name="admin_email" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row['admin_email']?>" readonly>
            </div>
            <br>
            <div class="form-group">
              <label for="exampleInputPassword1">New Password</label>
              <input type="password" class="form-control" name ="admin_password" id="exampleInputPassword1">
            </div>
            <br>
              <button type="submit" name="admin_update" value ="admin_update" class="btn btn-dark">Update</button>
              <button type="reset" class="btn btn-primary">Reset</button>
         </form>
      </div>
    </div>
</div>


</body>
</html>
<?php
}
?>
<?php
if(isset($_POST['admin_update'])){
  $ad_email = $_POST['admin_email'];
  $ad_pass = $_POST['admin_password'];
  $em= $row['admin_email'];
  $sql = "UPDATE adminn SET admin_password ='$ad_pass' WHERE admin_email = '$em'";
  $result = mysqli_query($conn, $sql);
  if($result){
    echo "<script>alert('admin detail updated successfully')</script>";
    echo "<script>location.href='admin.php'</script>";
  }else{
    echo "<script>alert('failed')</script>";
  }


}
?>