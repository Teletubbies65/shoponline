<?php
if(isset($_GET['cid'])){
	include("connectdb.php");
	$sql = "DELETE FROM category WHERE `category`.`c_id` = '{$_GET['cid']}' ";
	mysqli_query($conn, $sql) ;
	
	unlink("images/".$_GET['$id'].".".$_GET['ext']);
	
	echo "<script>";
	echo "window.location='type.php';";
	echo "</script>";
}
?>