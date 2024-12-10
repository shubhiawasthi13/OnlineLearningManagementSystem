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
            <li class="pt-3"><a href="admin.php" >DASHBOARD</a></li>
            <li class="pt-3"><a href="courses.php" class="">Courses</a></li>
            <li class="pt-3"><a href="lessons.php" class="active_link">Lessons</a></li>
            <li class="pt-3"><a href="students.php" class="">Students</a></li>
            <li class="pt-3"><a href="admin.php" class="">Sell Report</a></li>
            <li class="pt-3"><a href="admin.php" class="">Payment Status</a></li>
            <li class="pt-3"><a href="change_pass.php" class="">Change Paasword</a></li>
           <li class="pt-3"><a href="../logout.php" class="">Logout</a>  </li>
          </ul>
        </div>
          <div class="col-md-10 mt-5">
             <form action="" class="p-5" method="get">
                <label for="" class=" fs-5">Enter Course ID:</label>
                <br>
                <input type="text" name="check_id" class="p-1 d-inline" style="width:20%">
                <button type="submit" name="search" class="btn btn-dark">Search</button>
             </form>
              <?php
              if(isset($_GET['search'])){
                $check_id =$_GET['check_id'];
                $sql = "SELECT * FROM course WHERE course_id = '$check_id'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                $_SESSION['course_id'] = $row['course_id'];
                $_SESSION['course_name'] = $row['course_name'];

              }
              ?>
              <?php
              if(isset($_GET['search'])){?>
                <h4 class="bg-dark text-white p-1">
                course ID : <?php if(isset($row['course_id'])){ echo $row['course_id'];}?>
                course name : <?php if(isset($row['course_name'])){ echo $row['course_name'];}?>
                 </h4>
             <div class="container">
              <table class="table">
                <thead>
                <tr>
                 <th scope="col">Lesson Id</th>
                 <th scope="col">Lesson Name</th>
                 <th scope="col">Lesson Link</th>
                 <th scope="col">Action</th>
                </tr>
               </thead>
               <tbody>
                  <?php
                  $sql = "SELECT * FROM lesson WHERE course_id ='$check_id'";
                  $result = mysqli_query($conn, $sql);
              
                  ?>
                 <tr <?php foreach($result as $lesson){?>>
                  <td><?php  if(isset($lesson['lesson_id'])) {echo $lesson['lesson_id'];}?></td>
                  <td><?php  if(isset($lesson['lesson_name'])) {echo $lesson['lesson_name'];}?></td>
                  <td><?php  if(isset($lesson['lesson_link'])) {echo $lesson['lesson_link'];}?></td>
                  <td> <form method="post" class="d-inline">
                      <input type="hidden" name ="l_id" value ="<?php echo $lesson['lesson_id'];?>">
                      <button type="submit" name = "delete_lesson" value="delete" class="p-1 bg-danger"><i class="fa-solid fa-trash"></i></button>
                    </form>
                  </td>
                 </tr <?php }?>>
               </tbody>
            </table>
            <?php 
                }
             ?>

             <div class="container">
               <a href="addlesson.php" class="add_btn"><i class="fa-solid fa-plus"></i></a>
               </div>
          </div>
       </div>
    </div>



</body>
</html>


<?php
if(isset($_POST['delete_lesson'])){
  $lesson_id = $_POST['l_id'];
  $sql = "DELETE FROM lesson WHERE lesson_id ='$lesson_id'";
  $result = mysqli_query($conn, $sql);
  if($result){
    echo "<script>alert('lesson deleted successfully')</script>";
    echo "<script>location.href='lessons.php'</script>";
  }
  else{
    echo "<script>alert('failed')</script>";
  }
}
?>
<?php }?>