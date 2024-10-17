<?php
if(isset($_GET['fid'])){
	include("connectdb.php");
	$sql = "DELETE FROM food WHERE `food`.`f_id` = '{$_GET['fid']}' ";
	mysqli_query($conn, $sql) ;
	
	unlink("images/".$_GET['$id'].".".$_GET['ext']);
	
	echo "<script>";
	echo "window.location='index.php';";
	echo "</script>";
}
?>