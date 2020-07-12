<?php
session_start();
$_SESSION['name']='No of sessions: <br>';
if (isset($_SESSION['count'])) {
    $_SESSION['count']= $_SESSION['count']+1;
}
else {
    $_SESSION['count'] = 1;
}
echo $_SESSION['name'];
echo "You've looked at this page " . $_SESSION['count'] .' times';
?>
