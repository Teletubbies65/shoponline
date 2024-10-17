<?php
if (isset($_GET['fid'])) {
    include("connectdb.php");

    // Sanitize input to prevent SQL injection
    $fid = mysqli_real_escape_string($conn, $_GET['fid']);
    $ext = mysqli_real_escape_string($conn, $_GET['ext']);
    
    // Delete the food item from the database
    $sql = "DELETE FROM food WHERE `food`.`f_id` = '$fid'";
    
    if (mysqli_query($conn, $sql)) {
        // Attempt to delete the associated image file
        $imagePath = "images/$fid.$ext";
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        
        // Redirect back to the order view page
        echo "<script>";
        echo "window.location='view_order_detail.php';";
        echo "</script>";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
