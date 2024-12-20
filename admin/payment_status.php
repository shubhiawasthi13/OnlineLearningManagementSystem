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
            <li class="pt-3"><a href="courses.php">Courses</a></li>
            <li class="pt-3"><a href="lessons.php" class="">Lessons</a></li>
            <li class="pt-3"><a href="students.php" class="">Students</a></li>
            <li class="pt-3"><a href="payment_status.php" class="active_link">Payment Status</a></li>
            <li class="pt-3"><a href="change_pass.php" class="">Change Paasword</a>
            <li class="pt-3"><a href="../logout.php" class="">Logout</a>  </li>
          </ul>
        </div>
         <div class="col-md-6">
           <h4 class="text-center"></h4>
           <form action="" class="p-5" method="get">
                <label for="" class=" fs-5">Enter Order ID:</label>
                <br>
                <input type="text" name="order_id" class="p-1 d-inline" style="width:40%">
                <button type="submit" name="search" class="btn btn-dark">Search</button>
             </form>

             <?php
              if(isset($_GET['search'])){
                $order_id =$_GET['order_id'];
                $sql = "SELECT * FROM courseorder WHERE order_id = '$order_id'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);

              ?>
                <table class="table">
                <thead>
                <tr>
                 <th scope="col">Order Id</th>
                 <th scope="col">Amount</th>
                 <th scope="col">Payement Option</th>
                 <th scope="col">Payment Status</th>
                </tr>
               </thead>
               <tbody>
                 <tr <?php foreach($result as $pay){?>>
                  <td><?php  if(isset($pay['order_id'])) {echo $pay['order_id'];}?></td>
                  <td><?php  if(isset($pay['amount'])) {echo $pay['amount'];}?></td>
                  <td><?php  if(isset($pay['payoption'])) {echo $pay['payoption'];}?></td>
                  <td><?php  if(isset($pay['ord_status'])) {echo $pay['ord_status'];}?></td>

                 </tr <?php }?>>
               </tbody>
            </table>
            <?php } ?>
         </div>
    </div>
</div>
</body>
</html>
<?php
}
?>
