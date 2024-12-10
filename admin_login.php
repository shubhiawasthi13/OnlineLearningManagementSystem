<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- admin login Modal -->
    <div class="modal fade" id="adminModal" tabindex="-1" aria-labelledby="adminModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminModalLabel">Admin Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <label for="admin_email">Email Address</label>
          <br>
          <input type="email" name="admin_email" placeholder="Enter your email"style="width:100%; padding:4px;">
          <br><br>
          <label for="admin_password">Password</label>
          <br>
          <input type="password" name="admin_password" placeholder="Enter your password"style="width:100%; padding:4px;">
          <br><br>
          <div class="modal-footer">
           <input type="submit" class="btn btn-primary" value="login" name="admin_login">
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
if(isset($_POST['admin_login'])){
  $email = $_POST['admin_email'];
  $pass = $_POST['admin_password'];
  $get_email = "SELECT * FROM adminn WHERE admin_email = '$email'";
  $result = mysqli_query($conn, $get_email);
  if(mysqli_num_rows($result) > 0){
      $admin = mysqli_fetch_assoc($result);
      if($pass === $admin['admin_password']){
          echo "<script>alert('login successfully')</script>";
          session_start();
          $_SESSION['admin_email'] = $email;
          echo "<script>location.href='admin/admin.php'</script>";
      }else{
          echo "<script>alert('invaild password or email')</script>";
      }
  }else{
      echo "<script>alert('user not exist')</script>";
  }
}



?>