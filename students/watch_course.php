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

</head>
<body> 
    <div class="container-fluid bg-dark p-3">
        <h4 class="text-white">--All Lessons--</h4>
    </div>
    <div class="container-fluid">
       <div id="playlist" class="row">
            <?php
              if(isset($_GET['course_id'])){
                $course_id = $_GET['course_id'];
                $sql = "SELECT * FROM lesson WHERE course_id ='$course_id'";
                $result = mysqli_query($conn, $sql);
              }
            ?>
           <?php foreach($result as $lesson){?>
       
              <div class="col-sm-4">
               <video src="<?php echo $lesson['lesson_link']?>" controls style="width:400px; height:400px"></video>
               <center>
               <h5 style="cursor:pointer; font-size:22px"><?php echo $lesson['lesson_name']?></h5>
               </center>
              </div>
            <?php } ?>
       </div>
       
    </div>


       <!-- bootstrap js link here -->
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
       <!-- <script src="../js/script.js"></script> -->
</body>
</html>
 <?php } ?>