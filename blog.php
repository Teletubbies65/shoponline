<?php
	include("connectdb.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>5 Friends Kitchen</title>
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
              	 <a class="dropdown-item" href="table.php">โต๊ะอาหาร</a>
                <a class="dropdown-item" href="cart.php">ตะกร้า</a>
                
              </div>
            </li>
	          
	          <li class="nav-item"><a href="blog.php" class="nav-link">ประวัติการสั่งอาหาร</a></li>
	          <li class="nav-item"><a href="./a/sign-in" class="nav-link">Admin</a></li>
	          <li class="nav-item cta cta-colored"><a href="basket.php" class="nav-link"><span class="icon-shopping_cart"></span>[ตะกร้า]</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
<div class="hero-wrap hero-bread" style="background-image: url('images/01.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
           <h1 class="mb-0 bread">ประวัติการสั่งซื้อ</h1>
          </div>
        </div>
      </div>
	</div>
<body class="d-flex flex-column min-vh-100">
	<div class="container my-5">
    	<h1 class="text-center mb-4"><span class="navbar-brand">ประวิติการสั่งซื้อ</span></h1>
        <div class="card mx-auto">
        <div class="card-body">
        <?php 
			include("connectdb.php");
			session_start();
			if(isset($_SESSION['tid'])){
				$t_id = $_SESSION['tid'];
				$t_id = mysqli_real_escape_string($conn,$t_id);
				$sql = "SELECT * FROM orders_detail WHERE t_id ='$t_id' ORDER BY oid DESC";
				$rs = mysqli_query($conn,$sql);
				while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)){
					?> 
                    
					<div class="border rounded p-3 mb-3 foem-signin">
                    <p>
                        <strong><span class="navbar-brand">วันที่สั่งซื้อ</strong><?=$data['odate'];?>
                         <strong><span class="navbar-brand">ราคารวม</strong><?=number_format ($data['oto'],0);?><span class="navbar-brand">
                         <strong><span class="navbar-brand">ลำดับโต๊ะ</strong><?=$data['table_id'];?>
                    </p>
                    </div>
                    <?php
				}
			}else{
				echo"<div class='alert alert-success' role='alert'>ไม่พบข้อมูล กรุณาสั่งอาหารอีกครั้ง</div>";
				}
                    ?>
    </div>
</div>  
   </div> 
    </footer>
    
  

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
    
  </body>
</html>