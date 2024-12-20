<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
 
</head>
<body>
    <!-- contact section start here -->
 <div id="contact" class="container mt-4">
    <h2 class="text-center mb-4">Contact Us</h2>
    <div class="row">
      <div class="col-md-8">
        <form action="" method = "post">
          <input type="text" class="form-control" name="con_name" placeholder="Enter name" required/><br>
          <input type="text" class="form-control" name="con_subject" placeholder="Enter subject" required/><br>
          <input type="email" class="form-control" name="con_email" placeholder="Enter email" required/><br>
          <textarea name="con_message" class="form-control" placeholder="How can we help?" style="height:150px;" required></textarea><br>
          <input type="submit" name="submit" class="btn btn-primary" value="send"><br> <br>
        </form>
      </div>
  
      <div class="col-md-4 text-white text-center bg-primary mt-5 contact_card">
         <h4>Online Learning</h4>
         <p>OnlineLearning, Near Lucknow uttar pradesh <br>IIT Kalyanpur
        <br> Kanpur Uttar pradesh- 209206 <br>
        Phone: +000000456 <br> www.onlinelearning.com</p>
      </div>
    </div>
   </div>
  
  
  <!-- contact section end here -->
  <?php
  include("./database/connection.php");
  if(isset($_POST['submit'])){
    $name = $_POST['con_name'];
    $subject = $_POST['con_subject'];
    $email = $_POST['con_email'];
    $message = $_POST['con_message'];

    $insert_query = "INSERT INTO contact (con_name, con_subject, con_email, con_message) VALUES ('$name', '$subject' , '$email', '$message')";
    $result = mysqli_query($conn, $insert_query);
    if($result){
      echo "<script>alert('message sent successfully')</script>";
    }
    else{
      echo "<script>alert('failed')</script>";
    }
  }
  ?>
    
</body>
</html>