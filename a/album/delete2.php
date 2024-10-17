<?php
include_once("checklogin.php");
if(isset($_GET['fid'])){
	include("connectdb.php");
	$sql = "DELETE FROM food WHERE `food`.`f_id` = '{$_GET['fid']}' ";
	mysqli_query($conn, $sql) ;
	

	
	echo "<script>";
	echo "กำลังกลับเมนูอาหาร กรุณารอสักครู่....";
	echo "<meta http-equiv=\"refresh\" content=\"2;URL=view_order_detail.php\">";
	//header("Location: index.html");
}
?>