<?php
error_reporting(E_NOTICE);

	@session_start();
	include("connectdb.php");
	$sql = "select * from food where f_id='{$_GET['id']}' ";
	$rs = mysqli_query($conn, $sql) ;
	$data = mysqli_fetch_array($rs);
	$id = $_GET['id'] ;
	
	if(isset($_GET['id'])) {
		$_SESSION['fid'][$id] = $data['f_id'];
		$_SESSION['fname'][$id] = $data['f_name'];
		$_SESSION['fprice'][$id] = $data['f_price'];
		$_SESSION['fdetail'][$id] = $data['f_detail'];
		$_SESSION['fext'][$id] = $data['f_ext'];
		@$_SESSION['fitem'][$id]++;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ตะกร้าสินค้า</title>
<link href="bootstrap.css" rel="stylesheet" type="text/css">

</head>

<body>
<blockquote>
<h2>ตะกร้าสินค้า</h2>
<a href="index.php" class="btn btn-primary">กลับไปเลือกสินค้า</a>  
<a href="clear.php" class="btn btn-warning">ลบสินค้าทั้งหมด</a> 
<?php
if(empty($_SESSION['fid'])) {
?>
<a href="#" class="btn btn-success" onClick="alert('กรุณาเลือกสินค้า');">สั่งซื้อสินค้า</a> 
<?php } else { ?>
<a href="record.php" class="btn btn-success">สั่งซื้อสินค้า</a>
<?php } ?>
    
<br><br>
<table width="100%" class="table">
	<tr>
		<th width="5%">ที่</th>
		<th width="19%">รูปสินค้า</th>
		<th width="24%">ชื่อสินค้า</th>
		<th width="14%">ราคา/ชิ้น</th>
		<th width="15%">จำนวน (ชิ้น)</th>
		<th width="14%">รวม</th>
		<th width="9%">&nbsp;</th>
	</tr>
<?php
if(!empty($_SESSION['fid'])) {
	foreach($_SESSION['fid'] as $fid) {
		@$i++;
		$sum[$fid] = $_SESSION['fprice'][$fid] * $_SESSION['fitem'][$fid] ;
		@$total += $sum[$fid] ;
?>
	<tr>
		<td><?=$i;?></td>
		<td><img src="images/<?=$_SESSION['fext'][$fid];?>" width="120"></td>
		<td><?=$_SESSION['fname'][$fid];?></td>
		<td><?=number_format($_SESSION['fprice'][$pid],0);?></td>
		<td> <?=$_SESSION['fitem'][$fid];?></td>
		<td><?=number_format($sum[$fid],0);?></td>
		<td><a href="clear2.php?id=<?=$fid;?>" class="btn btn-danger">ลบ</a></td>
	</tr>
<?php } // end foreach ?>
	<tr>
		<td colspan="5" align="right"><strong>รวมทั้งสิ้น</strong> &nbsp; </td>
		<td><strong><?=number_format($total,0);?></strong></td>
		<td><strong>บาท</strong></td>
	</tr>
<?php 
} else {
?>
	<tr>
		<td colspan="7" height="50" align="center">ไม่มีสินค้าในตะกร้า</td>
	</tr>
<?php } // end if ?>
</table>
</blockquote>
</body>
</html>



