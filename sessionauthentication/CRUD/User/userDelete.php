<?php
require 'connect.php';
$userid = $_GET['UserId'];
$sql = "DELETE FROM tblusers WHERE UserId = $userid";
if (mysqli_query($conn,$sql)) {
    echo "Data deleted successfully";
}
else {
    echo "Error deleting record ".mysqli_error($conn);
}
mysqli_close($conn);
header("Location: userDataset.php");