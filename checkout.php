<?php
include("./database/connection.php");
session_start();
if(!isset($_SESSION['email'])){
    echo "<script>alert('You are not Login')</script>";
    echo "<script>location.href='index.php'</script>";
}else{




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <title>Online Learning Management System</title>
    <!-- bootstrap cdn link here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- font awesome cdn link here -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- custom css here -->
    <link rel="stylesheet" href="css/custom.css">

<body style="background-color: rgb(211, 209, 209)">
    <div class="container">
               <h2 class="text-center mt-4">Payment Page</h2>  
             <div class="row">
              <center>
                <div class="col-md-4">
                <form action="" style="background-color: rgb(243, 239, 239)" class="p-3" method="post">
                  <div class="row">
                    <div class="col-sm-2 pb-3">
                    <a href="courses.php">cancel></a>
                    </div>
                  </div>
                <div class="row">
                 <div class="col-sm-4">
                  <span>Order Id:</span>
                  <input type="text" value="<?php echo "ORD" . rand(10000,99999999) ?>" name ="order_id" style="border:none; background-color: rgb(243, 239, 239)">
                   <br>
                 </div>
                 <div class="col-sm-8">
                 <h6><?php echo "Course: ".$_GET['course_name']?></h6>
                  <h6 class="text-success"><?php echo "Amount: ".$_GET['price']."rs"?></h6>
                 </div>
                </div>
                <hr>
                <br>
                <div class="row">
                  <div class="col-sm-5">
                  <input type="radio" name="payoption" value="creditcard"> Credit Card <br><br>
                  <input type="radio" name="payoption" value="debitcard"> Debit Card<br><br>
                  <input type="radio" name="payoption" value="netbanking"> Net Banking
                  </div>
                </div>
                <hr>
                <br><br>
                <input type ="submit" name="pay_amount" class="btn btn-primary" value="pay now">
               </form>
              </div>
                </center>
            </div>
    </div>
</body>


  <!-- bootstrap js link here -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    <!-- custom js link here -->
     <script src="js/script.js"></script>
</html>
<?php
if(isset($_POST['pay_amount'])){
  $order_id = $_POST['order_id'];
  $course_id = $_GET['course_id'];
  $stu_email = $_SESSION['email'];
  $course_amount = $_GET['price'];
  $pay_option =$_POST['payoption'];
  $status = "success";
  
  $insert_query = "INSERT INTO courseorder (order_id, course_id, stu_email, amount, payoption, ord_status) VALUES ('$order_id', '$course_id', '$stu_email', '$course_amount', '$pay_option', '$status')";
  $result = mysqli_query($conn, $insert_query);

  if($result){
    echo "<script>alert('Payment successfully')</script>";
    echo "<script>location.href='./students/stu_course.php'</script>";
  }else{
    echo "<script>alert('Payment failed')</script>";
  }

}
?>





<?php
}
?>