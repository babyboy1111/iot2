<?php
header('Content-Type: text/html; charset=utf-8');
// Kết nối cơ sở dữ liệu
include 'connect.php'; mysqli_set_charset($conn, "utf8");

// Dùng isset để kiểm tra Form
if(isset($_POST['OK'])){
$time = trim($_POST['time']);
$timeBom = trim($_POST['timeBom']);
$bom = trim($_POST['bom']);


if (empty($time)) {
array_push($errors, "Chưa nhập giờ "); 
}
if (empty($timeBom)) {
array_push($errors, "Chưa nhập thời gian bơm"); 
}
if (empty($bom)) {
array_push($errors, "Chưa nhập số bơm"); 
}


$sql = "SELECT * FROM set_time WHERE time = '$time' OR bom = '$bom'";

// Thực thi câu truy vấn
$result = mysqli_query($conn, $sql);

// Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
if (mysqli_num_rows($result) > 0)
{
echo '<script language="javascript">alert("Bị trùng giờ và số máy bơm!"); window.location="index.php";</script>';

// Dừng chương trình
die ();
}
else {
$sql = "INSERT INTO set_time (time, timeBom, bom) VALUES ('$time','$timeBom','$bom')";
echo '<script> window.location="index.php";</script>';

if (mysqli_query($conn, $sql)){
echo "Thời gian: ".$_POST['time']."<br/>";
echo "Nhiệt độ: " .$_POST['timeBom']."<br/>";
echo "Số bơm: ".$_POST['bom']."<br/>";
}
else {
echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="index.php";</script>';
}
}
}
?>