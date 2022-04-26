<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="style.css"/>
</head>
<body>

<form method="post" action="register.php" class="form">

<h2>Hẹn giờ</h2>

Giờ: <input type="time" name="time" value="" required step="1">

Thời gian: <input type="time" name="timeBom" value="" step="1" required >

Máy bơm: <input type="number" name="bom" value="" required/>

<input type="submit" name="OK" value="Đăng Ký"/>
<?php require 'xuly.php';?>
</form>
<table border="1">
<tr>
<td>Thời gian</td>
<td>Thời gian bơm</td>
<td>Bơm</td>
</tr>
<?php
require 'connect.php';
$query=mysqli_query($conn,"select * from `set_time`");
while($row=mysqli_fetch_array($query)){
?>
<tr>
<td><?php echo $row['time']; ?></td>
<td><?php echo $row['timeBom']; ?></td>
<td><?php echo $row['bom']; ?></td>
<td><a href="edit_time.php?id=<?php echo $row['id']; ?>">Edit</a></td>
<td><a href="delete_time.php?id=<?php echo $row['id']; ?>">Delete</a></td>
</tr>
<?php
}
?>
</table>
<form action="" method="post">
    <input type="text" name="search"></input>
    <input type="submit" name="submit" value="Tìm Kiếm"></input>
</form>
<?php
include 'connect.php';
if(ISSET($_POST['submit'])){
        $keyword=$_POST['search'];
        echo $keyword;
        $query=msqli_query($conn,"SELECT * FROM tree WHERE plant LIKE '%$keyword%' ORDER BY id") or die(mysqli_error());
        $fetch = mysqli_fetch_array($query);
        echo $fetch['temp'];
 ?>   
     <p>Nhiệt độ khuyến cáo <?php echo $fetch['temp']?></p>
 <?php
        
    }

 ?>

    <button  name="RESET" value="RESET">RESET</button>
    <?php require 'reset.php';?>

</body>
</html>