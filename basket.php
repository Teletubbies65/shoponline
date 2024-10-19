<?php
	include("connectdb.php");
?>
<?php
error_reporting(E_NOTICE);

	@session_start();
	include("connectdb.php");
	$sql = "select * from product where p_id='{$_GET['id']}' ";
	$rs = mysqli_query($conn, $sql) ;
	$data = mysqli_fetch_array($rs);
	$id = $_GET['id'] ;
	
	if(isset($_GET['id'])) {
		$_SESSION['sid'][$id] = $data['p_id'];
		$_SESSION['sname'][$id] = $data['p_name'];
		$_SESSION['sprice'][$id] = $data['p_price'];
		$_SESSION['sdetail'][$id] = $data['p_detail'];
		$_SESSION['spicture'][$id] = $data['p_picture'];
		@$_SESSION['sitem'][$id]++;
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
	          <li class="nav-item active"><a href="index.php" class="nav-link">เมนูแนะนำ</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">เมนูอาหาร</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.php">เมนูอาหาร</a>
              	<a class="dropdown-item" href="table.php">โต๊ะอาหาร</a>
                <a class="dropdown-item" href="basket.php">ตะกร้า</a>
                
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

<title>ตะกร้าสินค้า</title>
<link href="bootstrap.css" rel="stylesheet" type="text/css">

</head>

<body>
<blockquote>
	<section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table width="100%" class="table">
<h3 class="f1"><strong>ตะกร้าสินค้า</h3></strong>
<a href="shop.php" class="btn btn-primary" role="button">กลับไปเลือกสินค้า</a>  
<a href="clear.php" class="btn btn-warning" role="button">ลบสินค้าทั้งหมด</a> 
<?php
if(empty($_SESSION['sid'])) {
?>
<a href="shop.php" class="btn btn-success" onClick="alert('กรุณาเลือกสินค้า');">สั่งซื้อสินค้า</a> 
<?php } else { ?>
<a href="record.php" class="btn btn-success" role="button">สั่งซื้อสินค้า</a>
<?php } ?>
    
<br><br>
	

	<tr>
		<th width="5%" style="text-align: center;"><h class="f4"><strong>No.</th></h></strong>
		<th width="19%" style="text-align: center;"><h class="f1"><strong>รูปอาหาร</th></h></strong>
		<th width="24%" style="text-align: center;"><h class="f1"><strong>ชื่ออาหาร</th></h></strong>
		<th width="14%" style="text-align: center;"><h class="f1"><strong>ราคา/ชิ้น</th></h></strong>
		<th width="15%" style="text-align: center;"><h class="f1"><strong>จำนวน (จาน)</th></h></strong>
		<th width="14%" style="text-align: center;"><h class="f1"><strong>รวม</th></h></strong>
		<th width="9%" style="text-align: center;"><h class="f1"><strong>&nbsp;</th></h></strong>
	</tr>
	
<?php
if (!empty($_SESSION['sid'])) {
    $total = 0; // Initialize total variable
    $i = 0; // Initialize counter

    foreach ($_SESSION['sid'] as $pid) {
        $i++;
        $sum[$pid] = $_SESSION['sprice'][$pid] * $_SESSION['sitem'][$pid];
        $total += $sum[$pid];
?>
	
	<tr>
		<td><h class="f1"><?=$i;?></td></h>
		<td><img src="images/<?=$_SESSION['spicture'][$pid];?>" width="120"></td></h>
		<td><h class="f1"><?=$_SESSION['sname'][$pid];?></td></h>
		<td><h class="f1"><?=number_format($_SESSION['sprice'][$pid],0);?></td></h>
		<td><input type="number" name="quantity[<?= $pid; ?>]" value="<?= $_SESSION['sitem'][$pid]; ?>" class="form-control"></td>
        <td><?=number_format($sum[$pid]*$_SESSION['sitem'][$pid],0);?></td>
		<td><a href="clear2.php?id=<?=$pid;?>" class="btn btn-danger"><h class="f1">ลบ</a></td></h>
	</tr>
<?php } // end foreach ?>
	<tr>
		<td colspan="5" align="right"><strong><h class="f1">รวมทั้งสิ้น</strong> &nbsp; </td></h>
		<td><strong><h class="f1"><?=number_format($total,0);?></strong></td></h>
		<td><strong><h class="f1">บาท</strong></td></h>
	</tr>
</div>
<?php 
} else {
?>
	<tr>
		<td colspan="7" height="50" align="center">ไม่มีสินค้าในตะกร้า</td>
	</tr>
<?php } // end if ?>
</table>
</blockquote>
</section>


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