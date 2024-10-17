<?php
	@session_start();

	session_destroy();

	echo "กำลังลบสินค้า กรุณารอสักครู่....";
	echo "<meta http-equiv=\"refresh\" content=\"2;URL=view_order.php\">";
	//header("Location: view_order_detail.php");

?>
<meta charset="utf-8">