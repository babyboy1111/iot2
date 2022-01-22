<?php
$servername = "localhost";

// REPLACE with your Database name
$dbname = "demo2";
// REPLACE with Database user
$username = "root";
// REPLACE with Database user password
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="http://localhost:81/demo/IOT/assets/fonts/themify-icons-font/themify-icons/themify-icons.css">

</head>
<body>
    <!-- header -->
<div class="header">

       <ul id="nav">
           <li><a href="http://localhost:81/demo/IOT/index.html">TRANG CHỦ</a></li>
           <li><a href="http://localhost:81/demo/control/update.php">Điều khiển</a></li>
           <li>
               <a href="">biểu đồ
                   <i class="ti-angle-down"></i>
               </a>
               <ul class="subnav">
               <li><a href="http://localhost:81/demo/chart1/view.php">BIỂU ĐỒ 1</a></li>
               <li><a href="http://localhost:81/demo/chart1/view.php">BIỂU ĐỒ 2</a></li>
               </ul>
            </li>
           <li><a href="http://localhost:81/demo/history/tb.php">lịch sử</a></li>
           <li><a href="#about">hướng dẫn</a></li>
       </ul>
   </div>
<!-- bang diu khien -->
 <div id="slider">
 <h2 class="text-green text-center ten">BẢNG ĐIỀU KHIỂN</h2>
 <table>
    <tr>
      <th colspan="2">ĐỊA ĐIỂM 1</th> 
      <th colspan="2">ĐỊA ĐIỂM 2</th>
    </tr>
    <tr>
      <th>THIẾT BỊ</th> 
      <th></th>
      <th>THIẾT BỊ</th>
      <th></th>
    </tr>
    <tr>  
  <!-- nút nhấn 1-->
  <th>LED 1</th>
  <th>
 <div id="nut1" class="nut"> 
<form action="" method="post">
    <input  type="submit" name="someAction" value="PUSH" class="btn"></input>
</form>
<?php
   
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction']))
    {  
       
        
        $conn = mysqli_connect("localhost", "root", "", "demo2");
        $value =mysqli_query($conn,"SELECT device_status FROM devices_status WHERE device_name LIKE 'light1' ORDER BY id") or die(mysqli_error());
        $fetch = mysqli_fetch_array($value);
        $fetch1=trim(substr($fetch['device_status'], 0, 10));
        if($fetch1=='onl1'){
            $value='offl1';
            $color= '#ee9191';
        }else{$value='onl1';
             $color='#76e7b8';}
      ?>
        <input type="submit" value="<?php echo $value?>" class="status" style="background-color:<?php echo $color?>"/>
     <?php   // Kiểm tra kết nối
        if($conn === false){
          die("ERROR: Không thể kết nối.". mysqli_connect_error());
        }
        $sql = "UPDATE devices_status SET device_status='$value' WHERE id=1";
        if(mysqli_query($conn, $sql)){
            echo "";
        }else{
          echo "ERROR: Không thể cập nhật bản ghi $sql".mysqli_error($conn);
        }
         
    }
    // Đóng kết nối
    // mysqli_close($conn);
?>
 </div>
</th>
<!-- ket thuc nut nhan 1 -->
<!-- nutnhan2 -->
<th>LED 2</th>
  <th>
 <div id="nut2" class="nut"> 
<form action="" method="post">
    <input  type="submit" name="someAction2" value="PUSH" class="btn"></input>
</form>
<?php
   
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction2']))
    {  
       
        
        $conn = mysqli_connect("localhost", "root", "", "demo2");
        $value =mysqli_query($conn,"SELECT device_status FROM devices_status WHERE device_name LIKE 'light2' ORDER BY id") or die(mysqli_error());
        $fetch = mysqli_fetch_array($value);
        $fetch1=trim(substr($fetch['device_status'], 0, 10));
        if($fetch1=='onl2'){
            $value='offl2';
            $color= '#ee9191';
        }else{$value='onl2';
             $color='#76e7b8';}
      ?>
        <input type="submit" value="<?php echo $value?>" class="status" style="background-color:<?php echo $color?>"/>
     <?php   // Kiểm tra kết nối
        if($conn === false){
          die("ERROR: Không thể kết nối.". mysqli_connect_error());
        }
        $sql = "UPDATE devices_status SET device_status='$value' WHERE id=2";
        if(mysqli_query($conn, $sql)){
            echo "";
        }else{
          echo "ERROR: Không thể cập nhật bản ghi $sql".mysqli_error($conn);
        }
         
    }
    // Đóng kết nối
    // mysqli_close($conn);
?>
 </div>
</th>
<!-- ket thuc nut nhan 2 -->
</tr>
<tr>  
  <!-- nút nhấn 3-->
  <th>MÁY BƠM 1</th>
  <th>
 <div id="nut3" class="nut"> 
<form action="" method="post">
    <input  type="submit" name="someAction3" value="PUSH" class="btn"></input>
</form>
<?php
   
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction3']))
    {  
       
        
        $conn = mysqli_connect("localhost", "root", "", "demo2");
        $value =mysqli_query($conn,"SELECT device_status FROM devices_status WHERE device_name LIKE 'pump1' ORDER BY id") or die(mysqli_error());
        $fetch = mysqli_fetch_array($value);
        $fetch1=trim(substr($fetch['device_status'], 0, 10));
        if($fetch1=='onp1'){
            $value='offp1';
            $color= '#ee9191';
        }else{$value='onp1';
             $color='#76e7b8';}
      ?>
        <input type="submit" value="<?php echo $value?>" class="status" style="background-color:<?php echo $color?>"/>
     <?php   // Kiểm tra kết nối
        if($conn === false){
          die("ERROR: Không thể kết nối.". mysqli_connect_error());
        }
        $sql = "UPDATE devices_status SET device_status='$value' WHERE id=3";
        if(mysqli_query($conn, $sql)){
            echo "";
        }else{
          echo "ERROR: Không thể cập nhật bản ghi $sql".mysqli_error($conn);
        }
         
    }
    // Đóng kết nối
    // mysqli_close($conn);
?>
 </div>
</th>
<!-- ket thuc nut nhan 3 -->
<!-- nutnhan 4 -->
<th>N/A</th>
  <th>
 <div id="nut4" class="nut"> 
<form action="" method="post">
    <input  type="submit" name="someAction4" value="PUSH" class="btn"></input>
</form>
<?php
   
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction4']))
    {  
       
        
        $conn = mysqli_connect("localhost", "root", "", "demo2");
        $value =mysqli_query($conn,"SELECT device_status FROM devices_status WHERE device_name LIKE 'pump2' ORDER BY id") or die(mysqli_error());
        $fetch = mysqli_fetch_array($value);
        $fetch1=trim(substr($fetch['device_status'], 0, 10));
        if($fetch1=='onp2'){
            $value='offp2';
            $color= '#ee9191';
        }else{$value='onp2';
             $color='#76e7b8';}
      ?>
        <input type="submit" value="<?php echo $value?>" class="status" style="background-color:<?php echo $color?>"/>
     <?php   // Kiểm tra kết nối
        if($conn === false){
          die("ERROR: Không thể kết nối.". mysqli_connect_error());
        }
        $sql = "UPDATE devices_status SET device_status='$value' WHERE id=4";
        if(mysqli_query($conn, $sql)){
            echo "";
        }else{
          echo "ERROR: Không thể cập nhật bản ghi $sql".mysqli_error($conn);
        }
         
    }
    // Đóng kết nối
    mysqli_close($conn);
?>
 </div>
</th>
<!-- ket thuc nut nhan 4 -->
</tr>
</table>
</div>
<!-- footer -->
<div id="footer">
      <h2 class="section-heading">LIÊN HỆ</h2>
      <div class="row contact-content">
          <div class="column col-half info">
              <p class="mt-8"><i class="ti-info-alt "></i> Author:Trần Di Ghuyn</p>
              <p class="mt-8"><i class="ti-mobile "></i> Phone:0905140365</p>
            <p class="mt-8"><i class="ti-email "></i> Email:trangh1234@mail.com</p>
          </div>
          <div class="column col-half info1 text-white">
            <a href=""><i class="ti-linkedin"></i></a>
            <a href=""><i class="ti-facebook"></i></a>
            </div>
      </div>
  </div>
</body>
</html>