<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- login Modal -->
<div class="modal fade" id="logModal" tabindex="-1" aria-labelledby="logModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logModalLabel">Student Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <label for="email">Email Address</label>
          <br>
          <input type="email" name="email" placeholder="Enter your email"style="width:100%; padding:4px;">
          <br><br>
          <label for="password">Password</label>
          <br>
          <input type="password" name="password" placeholder="Enter your password"style="width:100%; padding:4px;">
          <br><br>
          <div class="modal-footer">
           <input type="submit" class="btn btn-primary" value="login" name="login">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>


<?php
include("./database/connection.php");
if(isset($_POST['login'])){
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $get_email = "SELECT * FROM students WHERE email = '$email'";
  $result = mysqli_query($conn, $get_email);
  if(mysqli_num_rows($result) > 0){
      $student = mysqli_fetch_assoc($result);
      if(password_verify($pass, $student['password'])){
          echo "<script>alert('login successfully')</script>";
          session_start();
          $_SESSION['email'] = $email;
          echo "<script>location.href='index.php'</script>";
      }else{
          echo "<script>alert('invaild password or email')</script>";
      }
  }else{
      echo "<script>alert('user not exist')</script>";
  }
}


?>
