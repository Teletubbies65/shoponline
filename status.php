
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
include("connectdb.php");

$sql = "SELECT o.id, f.name FROM orders_detail o 
        JOIN food m ON o.item_id = f.id";
$result = $conn->query($sql);

echo "<h2>สถานะออเดอร์</h2>";

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ชื่อเมนู</th>
                <th>สถานะ</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["name"]."</td>
                <td>".$row["status"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "ไม่มีออเดอร์ที่ยังรอดำเนินการ";
}
?>

</body>
</html>