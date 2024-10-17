<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>มัทนาภรณ์ สีวะ (อั้ม)</title>
</head>

<body>
<h1>ร้านรักการอ่าน</h1>

<form method="post" action="">
    ชื่อประเภทสินค้า <input type="text" name="cname" required autofocus>
    <button type="submit" name="Submit"> เพิ่ม </button>
</form><hr><hr>

<?php
include_once("connectdb.php");
if(isset($_POST['Submit'])){
    $sql2 = "INSERT INTO categoty (c_id, c_name) VALUES (NULL, '{$_POST['cname']}');" ;
    $rs2 = mysqli_query($conn, $sql2);
    }
?>





<?php
    include("connectdb.php");
    
    $sql = "SELECT * FROM categoty ORDER BY c_id DESC" ;
    $rs = mysqli_query($conn,$sql) ;
    
    while ($data = mysqli_fetch_array($rs)){
        echo $data['c_id']."<br>"; 
        echo $data['c_name']."<br>";
        echo "<a href='delete.php?cid={$data['c_id']}' onClick='return confirm(\"ยืนยันการลบ?\");' >ลบ</a><hr>"; 
    }
    
    
mysqli_close($conn);    
?>


</body>
</html>