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
          <li class="pt-3"><a href="admin.php" class="active_link">DASHBOARD</a></li>
            <li class="pt-3"><a href="courses.php" class="">Courses</a></li>
            <li class="pt-3"><a href="lessons.php" class="">Lessons</a></li>
            <li class="pt-3"><a href="students.php" class="">Students</a></li>
            <li class="pt-3"><a href="admin.php" class="">Sell Report</a></li>
            <li class="pt-3"><a href="admin.php" class="">Payment Status</a></li>
            <li class="pt-3"><a href="change_pass.php" class="">Change Paasword</a></li>
           <li class="pt-3"><a href="../logout.php" class="">Logout</a>  </li>
          </ul>
        </div>
        <div class="col-md-10 mt-5">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3 bg-danger box p-5">
                <h5 class="text-center text-white">Courses</h5>
                <p class="text-center text-white">8</p>
                <center><a href="#" class="text-white">View</a></center>
              </div>
              <div class="col-md-3 bg-success box p-5">
                <h5 class="text-center text-white">Students</h5>
                <p class="text-center text-white">12</p>
                <center><a href="#" class="text-white">View</a></center>
              </div>
              <div class="col-md-3 bg-primary box p-5">
                <h5 class="text-center text-white">Sold</h5>
                <p class="text-center text-white">5</p>
                <center><a href="#" class="text-white">View</a></center>
              </div>
            </div>
              <!-- heading start here -->
             <div class="container-fluid mt-5">
              <h6 class="text-center text-white bg-dark p-2">Course Ordered</h6>
             </div>
              <!-- heading end here -->

             <!-- table start here -->
             <div class="container">
              <table class="table">
                <thead>
                <tr>
                 <th scope="col">Order Id</th>
                 <th scope="col">Course Id</th>
                 <th scope="col">Student Email</th>
                 <th scope="col">Order Date</th>
                 <th scope="col">Amount</th>
                 <th scope="col">Action</th>
                </tr>
               </thead>
               <tbody>
                 <tr>
                  <td>ORD123</td>
                  <td>10</td>
                  <td>riya@gmail.com</td>
                  <td>2019-02-10</td>
                  <td>800</td>
                  <td><a href="#"><i class="fa-solid fa-trash"></i></a></td>
                 </tr>
               </tbody>
            </table>
           </div>
            <!-- table end here -->
          </div>
        </div>
       </div>
    </div>



</body>
</html>
<?php }?>