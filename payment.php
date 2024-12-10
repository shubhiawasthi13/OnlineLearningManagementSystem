<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap cdn link here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- font awesome cdn link here -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- custom css here -->
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
<?php
include("./header.php")
?>
    <div class="container-fluid bg-dark">
        <div class="row">
            <img src="images/course-banner.jpg" alt="course-bannre" style="height:500px; width:100%; object-fit:cover; box-shadow:10px;">
        </div>
    </div>

   <!-- payment status start here --> 
    <div class="container w-50">
        <h2 class="text-center my-4">Payment Status</h2>
       <center>
       <form action="#" method="post">
        <label for="orderid" class="form-label">Order Id:</label>
        <br> 
        <input type="text" class="form-control" id="orderid">
        <button type="button" class="btn btn-primary mt-4">View</button>
        </form>
       </center>

    </div>
   <!-- payment status end here --> 
<!-- contact section start here -->
<?php
include("./contact.php")
?>
<!-- contact section end here -->

<!-- Footer -->
<?php
include("./footer.php")
?>
    


<!-- all Modal -->
<?php
include("./stu_reg.php");
include("./stu_login.php");
include("./admin_login.php");
?>
 
    <!-- bootstrap js link here -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    <!-- custom js link here -->
     <script src="js/script.js"></script>
</body>
</html>