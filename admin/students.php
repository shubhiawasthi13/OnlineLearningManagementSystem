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
            <li class="pt-3"><a href="students.php" class="active_link">Students</a></li>
            <li class="pt-3"><a href="admin.php" class="">Sell Report</a></li>
            <li class="pt-3"><a href="admin.php" class="">Payment Status</a></li>
            <li class="pt-3"><a href="change_pass.php" class="">Change Paasword</a>
            <li class="pt-3"><a href="../logout.php" class="">Logout</a>  </li>
          </ul>
        </div>
        <div class="col-md-10 mt-5">
              <!-- heading start here -->
             <div class="container-fluid mt-5">
              <h6 class="text-center text-white bg-dark p-2">List of Students</h6>
             </div>
              <!-- heading end here -->

             <!-- table start here -->
             <div class="container">
              <table class="table">
                <thead>
                <tr>
                 <th scope="col">Student Id</th>
                 <th scope="col">Name</th>
                 <th scope="col">Email</th>
                 <th scope="col">Action</th>
                </tr>
               </thead>
               <tbody>

               <?php
                $sql = "SELECT * FROM students";
                $result = mysqli_query($conn, $sql);
                ?>
                 <tr <?php foreach($result as $stu_data){?>>
                  <td><?php echo $stu_data['id'];?></td>
                  <td><?php echo $stu_data['name'];?></td>
                  <td><?php echo $stu_data['email'];?></td>
                  <td>
                     <form method="post">
                      <input type="hidden" name ="stu_id" value ="<?php echo $stu_data['id'];?>">
                      <button type="submit" name = "delete" value="delete" class="p-1 bg-danger"><i class="fa-solid fa-trash"></i></button>
                    </form>
                  </td>
                 </tr <?php }?>>
               </tbody>
            </table>
           </div>
            <!-- table end here -->
        </div>
    </div>
</div>


</body>
</html>
<?php  
}
?>
<?php
if(isset($_POST['delete'])){
  $stu_id = $_POST['stu_id'];
  $sql = "DELETE FROM students WHERE id ='$stu_id'";
  $result = mysqli_query($conn, $sql);
  if($result){
    echo "<script>alert('student deleted successfully')</script>";
    echo "<script>location.href='students.php'</script>";
  }else{
    echo "<script>alert('failed')</script>";
  }
}
?>