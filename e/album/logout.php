<?php
	session_start();
	
	unset($_SESSION['aid']);
	unset($_SESSION['aname']);
	echo "<script>";
				echo "window.location='../sign-in/index.php';";
				echo "</script>";
?>