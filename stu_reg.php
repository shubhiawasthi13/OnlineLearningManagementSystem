
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
<body>
  <!-- register modal here -->

<div class="modal fade" id="regModal" tabindex="-1" aria-labelledby="regModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="regModalLabel">Student Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <label for="name">Name</label>
          <br>
          <input type="text" name="name" placeholder="Enter your name" style="width:100%; padding:4px;" required>
          <br><br>
          <label for="email">Email Address</label>
          <br>
          <input type="email" name="email" placeholder="Enter your email"style="width:100%; padding:4px;" required>
          <br><br>
          <label for="password">Password</label>
          <br>
          <input type="password" name="password" placeholder="Enter your password"style="width:100%; padding:4px;" required>
          <br><br>
          <div class="modal-footer">
           <input type="submit" class="btn btn-primary" value="sign up" name="signup">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

    <!-- custom js link here -->
    <script src="js/script.js"></script>
</body>
</html>

<?php
include("./database/connection.php");
if(isset($_POST['signup'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $hash_password = password_hash($password, PASSWORD_DEFAULT);

    $insert_query = "INSERT INTO students (name, email, password) VALUES ('$name', '$email', '$hash_password')";
    $result = mysqli_query($conn, $insert_query);
    if($result){
      echo "<script>alert('registration successfully')</script>";
    }
}
?>
