<?php
include("connectdb.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>5 Friends Kitchen</title>
	  
	  <!-- Google Font -->
    <link rel="preconnect" href"https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=K2D&family=Pacifico&family=Zilla+Slab&family=Kanit&display=swap" rel="stylesheet">

<style>
.f1 {
  font-family: "K2D";
  front_weight: bold;
  front-size: 100px;
}
.f2 {
  font-family: "Pacifico";
  front_weight: bold;
  front-size: 100px;
}
.f3 {
  font-family: "Zilla+Slab";
  front_weight: bold;
  front-size: 100px;
}
.f4 {
  font-family: "Kanit";
  front_weight: bold;
  front-size: 100px;
}
</style>
	  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">
		
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">5 Friends Kitchen</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">เมนูแนะนำ</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">เมนูอาหาร</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.php">เมนูอาหาร</a>
              
                <a class="dropdown-item" href="table.php">โต๊ะอาหาร</a>
                <a class="dropdown-item" href="cart.php">ตะกร้า</a>
               
              </div>
            </li>
	          
	          <li class="nav-item"><a href="blog.php" class="nav-link">ประวัติการสั่งอาหาร</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Admin</a></li>
	          <li class="nav-item cta cta-colored"><a href="basket.php" class="nav-link"><span class="icon-shopping_cart"></span>[ตะกร้า]</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
	  
	   <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url(images/aa.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
	            <div class="col-md-12 ftco-animate text-center">
	            </div>
	          </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image: url(images/01.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
	            <div class="col-sm-12 ftco-animate text-center">
	              <h1 class="mb-2">5 Friends Kitchen</h1>
	            </div>
	          </div>
	        </div>

	      </div>
	    </div>
    </section>

<head>
<meta charset="utf-8">
<title>รายการสินค้า</title>
</head>
   <br>
 <div style="margin-right:  400px; margin-left: 400px">
    <?php
    $sql = "SELECT * FROM `teble`";
    $result = $conn->query($sql);

   // ตรวจสอบว่ามีผลลัพธ์หรือไม่
if ($result->num_rows > 0) {
    // แสดงผลลัพธ์ในรูปแบบตาราง HTML
    echo "<table border='1' style='width:100%; text-align:center;'>
            <tr>
               
                <th>Table Number</th>
                
                <th>Status</th>
            </tr>";

    // วนลูปแสดงข้อมูลแต่ละแถว พร้อมปุ่มเลือกโต๊ะ
    while($row = $result->fetch_assoc()) {
		$status = $row["stu"] === "available" ? "ว่าง" : "ไม่ว่าง";
        echo "<tr>
                
                <td>" . $row["table"] . "</td>
          
                <td>" . $row["stu"] . "</td>
                <td>";

            // แสดงปุ่มเลือกโต๊ะเฉพาะเมื่อสถานะเป็น "ว่าง"
            if ($row["stu"] === "available") {
                
            } else {
                echo "<form action='shop.php' method='post'>
                        <input type='hidden' name='table_id' value='" . $row["tid"] . "'>
                        <input type='submit' value='เลือกโต๊ะ'>
                      </form>";
            }
            echo "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "ไม่พบข้อมูลโต๊ะอาหาร";
    }
    ?>
<!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
	 <br

</body>
</html>
