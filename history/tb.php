
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="http://dighuyniot.tech/demo/IOT/assets/fonts/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./css/style.css">
  
  <script type = "text/JavaScript">

         <!--
            function AutoRefresh( t ) {
               setTimeout("location.reload(true);", t);
            }
         
      </script>
  
  <!-- css cho trang -->
  
  </head>
  <!-- body -->
  <body >
      <!-- nav -->
      <div class="header">
        <ul id="nav">
            <li><a href="http://dighuyniot.tech/demo/IOT/index.html">TRANG CHỦ</a></li>
            <li><a href="http://dighuyniot.tech/demo/control/update.php">Điều khiển</a></li>
            <li>
                <a href="">biểu đồ
                    <i class="ti-angle-down"></i>
                </a>
                <ul class="subnav">
                <li><a href="http://dighuyniot.tech/demo/chart1/view.php">BIỂU ĐỒ 1</a></li>
                <li><a href="http://dighuyniot.tech/demo/chart1/view.php">BIỂU ĐỒ 2</a></li>
                </ul>
             </li>
            <li><a href="http://dighuyniot.tech/demo/history/tb.php">lịch sử</a></li>
            <li><a href="http://dighuyniot.tech/demo/Huongdan/giuide.html">Chức năng</a></li>
            <li><a href="http://dighuyniot.tech/demo/alert/">Hẹn giờ</a></li> 
            <li><a href="http://dighuyniot.tech/demo/DEMO/giuide.html">DEMO</a></li>
        </ul>
    
     <!-- mobile nav -->
     <label for="nav__mobile-input" class="nav__bar-btn">
      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
    </label>
    <input type="checkbox" hidden name="" class="nav__input" id="nav__mobile-input">
    <label for="nav__mobile-input" class="nav__overlay"></label>
    <div class="nav_mobile">
      <label for="nav__mobile-input" class="nav__mobile-close">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg>               
      </label>
     <ul class="nav_mobile-list">
      <li><a href="http://dighuyniot.tech/demo/IOT/index.html" class="nav_mobile-link">TRANG CHỦ</a></li>
      <li><a href="http://dighuyniot.tech/demo/control/update.php" class="nav_mobile-link">ĐIỀU KHIỂN</a></li>
      <li>
      <label for="nav__sub-mobile-input" href="" class="nav_mobile-link">BIỂU ĐỒ
          <i class="ti-angle-down"></i>
      </label>
      <input type="checkbox" hidden name="" class="nav__sub-input" id="nav__sub-mobile-input">
      <ul class="subnav_mobile">
      <li><a href="http://dighuyniot.tech/demo/chart1/view.php">BIỂU ĐỒ 1</a></li>
      <li><a href="http://dighuyniot.tech/demo/chart1/view.php">BIỂU ĐỒ 2</a></li>
      </ul>
      </li>
      <li><a href="http://dighuyniot.tech/demo/history/tb.php" class="nav_mobile-link">LỊCH SỬ</a></li>
      <li><a href="http://dighuyniot.tech/demo/Huongdan/giuide.html" class="nav_mobile-link">CHỨC NĂNG</a></li>
       <li><a href="http://dighuyniot.tech/demo/alert/" class="nav_mobile-link">HẸN GIỜ</a></li>
       <li><a href="http://dighuyniot.tech/demo/DEMO/giuide.html" class="nav_mobile-link">DEMO</a></li>
     </ul>
     </div> 
    <!-- profile -->
          
          <div class="profile">
            <button class="profile-btn">
                <i class="ti-user"></i>
            </button>
         </div> 
    </div>
    <div class="profile-tb">
        <div class="out-btn"><i class="ti-close"></i></div>
        <div class="profile-info">
        <div class="col-30 column"><i class="ti-user "></i></div>
        <ul class="user_list col-70 column">
            <li>User Name: Trần Di Ghuyn</li>
            <li>Email:trannguyen3210kh@gmail.com</li>
            <li>Ngày tham gia: 17/1/2022</li>
        </ul>
        </div>
        <div><a href="http://dighuyniot.tech" class="logout">Log Out</a></div>
    </div>

      <!-- slider -->
      
  <?php
$servername='localhost';
$username='dighuyni_smartgarden'; 
$password='12345678';
$dbname = "dighuyni_smartgarden"; // Cơ sở dữ liệu
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
die('Không thể kết nối Database:' .mysql_error());
}
    
?>
<div id="slider">
  <div class="content-section row">
      <!-- bang 1 -->
    <div class="col l-6 c-12">
    <h2 class="text-green text-center">ĐỊA ĐIỂM 1</h2>
    <p class="text-green text-center"> (Bảng tính trung bình giá trị trong ngày)</p>
    <table>
    <tr>
      <th>Thời gian</th> 
      <th>Nhiệt độ</th>
      <th>Độ ẩm</th>
      <th>Áp suất</th>
    </tr>
    <?php
    
    
     
        
         $query = mysqli_query($conn, "SELECT cast(reading_time as date) as reading_time, avg(cast(value1 as decimal(10,5))) as tbvalue1, avg(cast(value2 as decimal(10,5))) as tbvalue2,avg(cast(value3 as decimal(10,5))) as tbvalue3 from logs group by cast(reading_time as date)order by 1") or die(mysqli_error());
        while($fetch = mysqli_fetch_array($query)){
    ?>
      <tr>
        <th><?php echo substr($fetch['reading_time'],0,10)?></th>
        <th><?php echo substr($fetch['tbvalue1'], 0, 5)?></th>
         <th><?php echo substr($fetch['tbvalue2'], 0, 5)?></th> 
        <th><?php echo substr($fetch['tbvalue3'], 0, 5)?></th>
        </tr> 
    <?php
        
       
    }
    ?>
   </table> 
</div>
<!-- bang2 -->

<!-- bang 3 -->
<div class=" col l-6 c-12">
    <!-- bo column de khong bi tran -->
    <h2 class="text-green text-center">ĐỊA ĐIỂM 2</h2>
    <p class="text-green text-center"> (Bảng tính trung bình giá trị trong ngày)</p>
    <table>
    <tr>
      <th>Thời gian</th> 
      <th>Nhiệt độ</th>
      <th>Độ ẩm</th>
      <th>Áp suất</th>
    </tr>
    <?php

         $query = mysqli_query($conn, "SELECT cast(reading_time as date) as reading_time, avg(cast(value1 as decimal(10,5))) as tbvalue1, avg(cast(value2 as decimal(10,5))) as tbvalue2,avg(cast(value3 as decimal(10,5))) as tbvalue3 from logs group by cast(reading_time as date)order by 1") or die(mysqli_error());
        while($fetch = mysqli_fetch_array($query)){
    ?>
      <tr>
        <th><?php echo substr($fetch['reading_time'],0,10)?></th>
        <th><?php echo substr($fetch['tbvalue1'], 0, 5)?></th>
         <th><?php echo substr($fetch['tbvalue2'], 0, 5)?></th> 
        <th><?php echo substr($fetch['tbvalue3'], 0, 5)?></th>
        </tr> 
    <?php
        }
       
    ?>
   </table> 
  </div>
 </div>
</div>
<!-- footer -->
<div id="footer">
      <h2 class="section-heading">LIÊN HỆ</h2>
      <div class="row contact-content">
          <div class="col l-6 c-8 info">
              <p class="mt-8"><i class="ti-info-alt "></i> Author:Trần Di Ghuyn</p>
              <p class="mt-8"><i class="ti-mobile "></i> Phone:0905140365</p>
            <p class="mt-8"><i class="ti-email "></i> Email:trangh1234@mail.com</p>
          </div>
          <div class="col l-6 c-4 info1 text-white">
            <a href=""><i class="ti-linkedin"></i></a>
            <a href=""><i class="ti-facebook"></i></a>
            </div>
      </div>
  </div>
  <script>
    const profileBtn=document.querySelector('.profile-btn')
    const profileTb=document.querySelector('.profile-tb')
    const profileCl=document.querySelector('.out-btn')
    function showProfile() {
       profileTb.classList.add('open');
    }
    function removeProfile() {
       profileTb.classList.remove('open');
    }
    profileBtn.addEventListener('click', showProfile)
    profileCl.addEventListener('click', removeProfile)

   </script>
</body>
</html>