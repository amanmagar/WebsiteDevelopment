<?php
require 'connect.php';
$personalid = $_GET['PersonalId'];
$sql = "DELETE FROM tblpersonal WHERE PersonalId = $personalid";
if (mysqli_query($conn,$sql)) {
    echo "Data deleted successfully";
}
else {
    echo "Error deleting record ".mysqli_error($conn);
}
mysqli_close($conn);
header("Location: personalDataset.php");