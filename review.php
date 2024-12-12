<?php
include("./database/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- swiper link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

</head>
<body>
      <?php
       $sql = "SELECT name,occupation,stu_image,f_content FROM students JOIN feedback ON id = stu_id";
       $result = mysqli_query($conn,$sql);
      ?>


<center>
  
<section class="reviews mt-5 mb-5 p-3" id="reviews">
    <h3 class="text-center">Student's Feeedback</h3>
    <div class="swiper mySwiper review-slider">

      <div class="swiper-wrapper">
      <?php foreach($result as $fd){?>
        <div class="swiper-slide">
          <div class="box">
            <img src="<?php echo str_replace('..', '.',$fd['stu_image']);?>" alt="">
            <h3><?php echo $fd['name'];?></h3>
            <p><?php echo $fd['f_content'];?></p>
          </div>
        </div>

        <?php } ?>
    
      </div>
    </div>
</section>
</center>



<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

</body>
</html>