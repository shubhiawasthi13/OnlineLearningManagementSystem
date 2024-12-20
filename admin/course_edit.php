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
            <li class="pt-3"><a href="courses.php" class="active_link">Courses</a></li>
            <li class="pt-3"><a href="lessons.php" class="">Lessons</a></li>
            <li class="pt-3"><a href="students.php" class="">Students</a></li>
            <li class="pt-3"><a href="payment_status.php" class="">Payment Status</a></li>
            <li class="pt-3"><a href="change_pass.php" class="">Change Paasword</a>
            <li class="pt-3"><a href="../logout.php" class="">Logout</a>  </li>
          </ul>
        </div>
        <div class="col-md-6 mt-5">
            <div class="container p-5" style="background-color: rgb(209, 205, 205);">
                <h4 class="text-center pt-4">Update Course Details</h4>

                <?php
                if(isset($_POST['update'])){
                    $course_id = $_POST['c_id'];
                    $sql = "SELECT * FROM course WHERE course_id ='$course_id'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                }
                ?>
            <form action="" method="post" enctype="multipart/form-data">
                <label for="">Course Id</label>
                <br>
                <input type="text"  class ="p-1" name ="course_id" style="width:95%" value="<?php echo $row['course_id'];?>">
                <br><br>
                <label for="">Course Name</label>
                <br>
                <input type="text"  class ="p-1" name ="course_name" style="width:95%" value="<?php echo $row['course_name'];?>">
                <br><br>
                <label for="">Course Description</label>
                <br>
                <textarea name ="course_desc" class ="p-2" style="width:95%"><?php echo $row['course_desc'];?></textarea>
                <br><br>
                <label for="">Author</label>
                <br>
                <input name ="course_author" class ="p-1" style="width:95%" value="<?php echo $row['course_author'];?>"></input>
                <br><br>
                <label for="">Course Duration</label>
                <br>
                <input type="text" name ="course_duration" class ="p-1" style="width:95%" value="<?php echo $row['course_duration'];?>">
                <br><br>
                <label for="">Course Original Price</label>
                <br>
                <input type="text"  name ="course_org_price" class ="p-1" style="width:95%" value="<?php echo $row['course_org_price'];?>">
                <br><br>
                <label for="">Course Selling Price</label>
                <br>
                <input type="text"  name ="course_price" class ="p-1" style="width:95%" value="<?php echo $row['course_price'];?>">
                <br><br>
                <label for="">Course Image</label>
                <br>
                <input type="file"  name ="course_img" class ="p-1">
                <br>
                <img src="<?php echo $row['course_img'];?>" alt="" width ="30%">
                <br><br>
                <center>
                <button type= "submit" name="course_update" class="btn btn-primary text-white p-2">Update</button>
                <a href="courses.php" class="btn btn-secondary text-white p-2">Close</a>
                </center>
            </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php
}
?>

<?php
if(isset($_POST['course_update'])){
    $c_id = $_POST['course_id'];
    if(($_POST['course_name'] == "") || ($_POST['course_desc'] == "") || ($_POST['course_author'] == "") ||($_POST['course_duration'] == "") ||
    ($_POST['course_org_price'] == "") || ($_POST['course_price'] == "")){
     echo "<script>alert('Fill All Fields')</script>";

    }else{
        $course_name = $_POST['course_name'];
        $course_desc = $_POST['course_desc'];
        $course_author = $_POST['course_author'];
        $course_duration = $_POST['course_duration'];
        $course_org_price = $_POST['course_org_price'];
        $course_price = $_POST['course_price'];
        $c_img = '../images/course_img/'.$_FILES['course_img']['name'];

        $sql = "UPDATE course SET course_name ='$course_name', course_desc ='$course_desc', course_author ='$course_author',course_duration ='$course_duration', course_org_price = '$course_org_price', course_price='$course_price', course_img ='$c_img' WHERE course_id = '$c_id'";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('course updated successfully')</script>";
            echo "<script>location.href='courses.php'</script>";

        }else{
            echo "<script>alert('failed')</script>";
        }
    }
}

?>

