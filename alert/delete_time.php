<?php
include_once('connect.php');
if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
$id=$_GET['id'];
$sql = "DELETE FROM set_time WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
echo '<script> window.location="index.php";</script>';
} else {
echo "Error updating record: " . $conn->error;
}
$conn->close();
}
?>