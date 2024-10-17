<meta charset="utf-8">
<?php
	@session_start();
	$id2 = $_GET['oid'] ;
	unset($_SESSION['oid'][$id2]) ;
	unset($_SESSION['odate'][$id2]) ;
	unset($_SESSION['ototal'][$id2]) ;
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=view_order.php\">";

?>