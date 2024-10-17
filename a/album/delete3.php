<?php
if (isset($_GET['oid'])) {
    include("connectdb.php");

    // Prepare the SQL statement to prevent SQL injection
    $oid = mysqli_real_escape_string($conn, $_GET['oid']);
    $sql = "DELETE FROM orders WHERE `orders`.`oid` = '$oid'";
    
    if (mysqli_query($conn, $sql)) {
        // Assuming 'id' and 'ext' are stored correctly in the database for the image
        $ext = mysqli_real_escape_string($conn, $_GET['ext']);
        unlink("images/".$oid.".".$ext);
        
        echo "<script>";
        echo "window.location='view_order.php';";
        echo "</script>";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
