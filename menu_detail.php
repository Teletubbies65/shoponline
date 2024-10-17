<?php
error_reporting(E_NOTICE);

	@session_start();
	include("connectdb.php");
	$sql = "SELECT * FROM `food` where f_id='{$_GET['id']}' ";
	$rs = mysqli_query($conn, $sql);
	$data = mysqli_fetch_array($rs);
	$id = $_GET['id'] ;
	
	if(isset($_GET['id'])) {
		$_SESSION['aid'][$id] = $data['f_id'];
		$_SESSION['aname'][$id] = $data['f_name'];
		$_SESSION['adetail'][$id] = $data['f_detail'];
		$_SESSION['aprice'][$id] = $data['f_price'];
		$_SESSION['apicture'][$id] = $data['f_ext'];
		@$_SESSION['aitem'][$id]++;
	}
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
	          <li class="nav-item"><a href="index.php" class="nav-link">เมนูแนะนำ</a></li>
	          <li class="nav-item active dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">เมนูอาหาร</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.php">เมนูอาหาร</a>
                <a class="dropdown-item" href="cart.php">ตะกร้า</a>
                
              </div>
            </li>
	          <li class="nav-item"><a href="blog.php" class="nav-link">ประวัติการสั่งอาหาร</a></li>
	          <li class="nav-item"><a href="./a/sign-in" class="nav-link">Admin</a></li>
	          <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span>[ตะกร้า]</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
	  
	  <div class="hero-wrap hero-bread" style="background-image: url('images/01.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
           <h1 class="mb-0 bread">5 Friends Kitchen</h1>
          </div>
        </div>
      </div>
	</div>
	  
	  <br>
	  
	  
	  
	  
<!--
  <img src="images/<?=$data['f_id'];?>.<?=$data['f_ext'];?>" width="250" height="autosize" class="img-thumbnail" align = "center">
   <div class="text" align="center">
   <center><h5 class="card-title"><?=$data['f_name'];?></h5>
    <p class="card-text"><?=$data['f_detail'];?></p>
	  <p class="f1"><?=number_format($data['f_price'],0);?> บาท</p></center>
	  <a href="shop.php".php?id=<?=$data['f_id'];?>" class="btn btn-primary" role="button">ย้อนกลับ</a>
																				
    <a href="basket.php?id=<?=$data['f_id'];?>" class="btn btn-primary" role="button">หยิบลงตะกร้า</a>
	  
  </div>
</div>
-->
	  <center>
	 <div style="display: flex; align-items: flex-start; margin-right:  300px; margin-left: 300px">
    <img src="images/<?=$data['f_id'];?>.<?=$data['f_ext'];?>" width="350" height="auto" class="img-thumbnail" style="margin-right: 20px; margin-bottom: 10px;">
    <div class="text" style="flex-grow: 1; text-align: left;">
        <h2 class="f1" class="card-title"  style="margin-bottom: 10px; font-size: 28px"><?=$data['f_name'];?></h2>
        <p class="f1" class="card-text"  style="margin-bottom: 10px; font-size: 20px"><?=$data['f_detail'];?></p>
        <p class="f1" style="margin-bottom: 10px; font-size: 20px">ราคา <?=number_format($data['f_price'], 0);?> บาท</p>
		
		
		
		
        <a href="shop.php?id=<?=$data['f_id'];?>" class="btn btn-primary" class="f1" role="button" style="margin-right: 10px;">ย้อนกลับ</a>
        <a href="basket.php?id=<?=$data['f_id'];?>" class="btn btn-primary" class="f1" role="button">หยิบลงตะกร้า</a>
    </div>
</div>
		  


	  
	  
	  
	
	  
	
	  
	  
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
		  <br>
    
  </body>
</html>