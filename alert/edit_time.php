<!DOCTYPE html>
<html>
<head>
<title>Editing MySQL Data</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
// Kết nối Database
include 'connect.php';
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from `set_time` where id='$id'");
$row=mysqli_fetch_assoc($query);
?>
<form method="POST" class="form">
<h2>Sửa thời gian</h2>
<label>time: <input type="text" value="<?php echo $row['time']; ?>" name="time"></label><br/>
<label>timeBom: <input type="text" value="<?php echo $row['timeBom']; ?>" name="timeBom"></label><br/>
<label>bom: <input type="text" value="<?php echo $row['bom']; ?>" name="bom"></label><br/>
<input type="submit" value="Update" name="update_time">
<?php

if (isset($_POST['update_time'])){
$id=$_GET['id'];
$time=$_POST['time'];
$timeBom=$_POST['timeBom'];
$bom=$_POST['bom'];
include 'connect.php';
$sql = "UPDATE `set_time` SET time='$time', timeBom='$timeBom',bom='$bom' WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    echo '<script language="javascript">alert("Thành công!"); window.location="index.php";</script>';
} else {
echo "Error updating record: " . $conn->error;
}
$conn->close();
}
?>

</form>
</body>
</html>