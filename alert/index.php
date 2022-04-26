<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <header>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
       <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
       
        
        <link rel="stylesheet" href="./assets/css/grid.css">
         <link rel="stylesheet" href="./assets/fonts/themify-icons-font/themify-icons/themify-icons.css">
    </header>

    <body>
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
             <li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-envelope" style="font-size:18px;"></span></a>
                <ul class="dropdown-menu"></ul>
            </li>
            </li>
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
      <!--bat dau slider-->
      <div id="slider">
        <div class="contain">
          <div class="tieude"><h2  style="color:#fff">Hẹn giờ tưới cây</h2></div>
            <form method="post" action="index.php" class="form">

            Giờ: <input class="input" type="time" name="time" value="" required step="1">

            Thời gian: <input class="input" type="time" name="timeBom" value="" step="1" required >

            Máy bơm: <input class="input" type="number" name="bom" value="" required/>

            <input class="button" type="submit" name="OK" value="Đặt"/>
            <?php require 'xuly.php';?>
            </form>
            <table class="table1" >
            <tr>
            <td>Thời gian</td>
            <td>Thời gian bơm</td>
            <td>Bơm</td>
            <td></td>
            <td></td>
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
                <button class="button" name="RESET" value="RESET">RESET</button>
            </form>
                <?php require 'reset.php';?>
            <form action="" method="post">
             <input class="input" type="text" name="search"></input>
                <input class="button" type="submit" name="submit" value="Tìm Kiếm"></input>
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
            
        
        <div class="container">
            <?php
                require_once("get_data.php");
                $access_key = "&appid=f3cc6ba52ca8ca7b5b8af972c88fb5e2";
               // $ip_obj = sendJsontoServer();
               // $country = $ip_obj->country_name;
                //$region = $ip_obj->region_name;
                //if(!$region){
                    //$region = $ip_obj->location->capital;
                //}
                //$current_obj = getCurrentData($region, $country, $access_key);
                 $region="Ho Chi Minh";
                 $country="Vietnam";
                $current_obj = getCurrentData($region, $country, $access_key);
                //$city_id = $current_obj->id;
                 $city_id=1566083;
    
                $forcast_obj = getForcast($city_id, $access_key);
            ?>
            <?php $forcast_list = $forcast_obj->list;
                        $total=0;
                        $nhiet=0;
                        $doam=0;
                        foreach($forcast_list as $temp){ 
                           $total+= $temp->pop;
                           $doam+=$temp->main->humidity;
                           $nhiet+=$temp->main->temp;
                          }
                        $message="";
                        $total=$total*100/40;
                        $doam=$doam/40;
                        $nhiet=$nhiet/40;
                          $message="Khả năng mưa những ngày sắp tới là $total %";
                        if ($total<20 && $doam<70){
                            $message="Khả năng mưa những ngày sắp tới là $total %, trời hanh khô cây của bạn sẽ cần nhiều nước đấy";
                        } else if(20<$total && 70<$doam &&$total<50 && $doam<80){
                            $message="Khả năng mưa những ngày sắp tới là $total %, trời sẽ có mưa nhưng rải rác, cây của bạn cần một lượng nước vừa đủ";
                        } else if($total>50 && $doam>80){
                            $message="Khả năng mưa những ngày sắp tới là $total %, trời mưa nhiều, bạn có thể tắt máy bơm của mình đi một vài ngày";
                        }
                        {
                         ?>
                         <div class="alert"><?php echo $message?></div>
                         <?php
                        }
                        echo $total." ".$doam." ".$nhiet;
                        if($nhiet>35){
                            include 'connect.php';
                            $sql        =   "SELECT timeBom FROM set_time WHERE bom='1' LIMIT 1";
                            $result     =   $conn->query($sql);

                            $row = $result->fetch_assoc();
           
						$row = $result->fetch_assoc();
                             $sql1        =   "SELECT timeBom_status FROM set_time WHERE bom='1' LIMIT 1";
                            $result1     =   $conn->query($sql1);

                            $row1 = $result1->fetch_assoc();
                         if(strcmp($row1['timeBom_status'][0],"1")){
                            $total= $row['timeBom'][7]+$row['timeBom'][6]*10+$row['timeBom'][4]*60+$row['timeBom'][3]*600;
                            $total=$total*1.25;
                            $row['timeBom'][7]=$total%10;
                            $row['timeBom'][6]=floor(($total%60)/10);
                            $row['timeBom'][4]=floor($total/60)%10;
                            $row['timeBom'][3]=floor($total/600);
                            $bien=$row['timeBom'];
                            $sql = "UPDATE set_time SET timeBom='$bien',timeBom_status='1' WHERE bom='1'";
        
                                 if ($conn->query($sql) === TRUE) {
                                    echo "";
                                    } 
                                    else {
                                     echo "Error: " . $sql . "<br>" . $conn->error;
                                    }
                             $sql = "INSERT INTO comments (comment_subject, comment_text, comment_status) VALUES ('Thay doi thoi gian bom ', 'He thong tang thoi gian bom len 25 phan tram', '0')";
									if (mysqli_query($conn, $sql)) {
      										echo "";
									} else {
      										echo "Error: " . $sql . "<br>" . mysqli_error($conn);
									}
                             }
                            $conn->close();
                        }else if($total>20){
                            include 'connect.php';
                            $sql        =   "SELECT timeBom FROM set_time WHERE bom='1' LIMIT 1";
                            $result     =   $conn->query($sql);

                            $row = $result->fetch_assoc();
                             $sql1        =   "SELECT timeBom_status FROM set_time WHERE bom='1' LIMIT 1";
                            $result1     =   $conn->query($sql1);

                            $row1 = $result1->fetch_assoc();
                          if(strcmp($row1['timeBom_status'][0],"2"))
                         {  $total= $row['timeBom'][7]+$row['timeBom'][6]*10+$row['timeBom'][4]*60+$row['timeBom'][3]*600;
                            $total=$total*0.70;
                            $row['timeBom'][7]=$total%10;
                            $row['timeBom'][6]=floor(($total%60)/10);
                            $row['timeBom'][4]=floor($total/60)%10;
                            $row['timeBom'][3]=floor($total/600);
                            $bien=$row['timeBom'];
                            $sql = "UPDATE set_time SET timeBom='$bien',timeBom_status='2' WHERE bom='1'";
        
                                 if ($conn->query($sql) === TRUE) {
                                    echo "";
                                    } 
                                    else {
                                     echo "Error: " . $sql . "<br>" . $conn->error;
                                    }
                             $sql = "INSERT INTO comments (comment_subject, comment_text, comment_status) VALUES ('Thay doi thoi gian bom ', 'He thong giam thoi gian bom xuong 30 phan tram', '0')";
									if (mysqli_query($conn, $sql)) {
      										echo "";
									} else {
      										echo "Error: " . $sql . "<br>" . mysqli_error($conn);
									}
                          }
                            $conn->close();
                        }
             ?>
              
            <div class="col-md-10 col-md-10 col-md-12 col-md-12">
                <div class="row">
                    <div class="c-6">Location: <?php echo $region.", ".$country ?></div>
                    <div class="c-6">Update Time: <?php echo date("d/m/Y H:i:s",$current_obj->dt); ?></div>
                </div>
                <div class="row">
                    <div class="c-6 text-center">
                        <div style="height:50px; width:50px; margin-left:auto;margin-right:auto;
                             background: url('http://openweathermap.org/img/w/<?php echo $current_obj->weather[0]->icon ?>.png');background-size: cover;"></div>
                        <div><?php echo $current_obj->main->temp." &#8451;" ?> - <?php echo  $current_obj->weather[0]->main ?></div>
                        <div>Cloudiness: <?php echo $current_obj->clouds->all."%" ?></div>
                    </div>
                    <div class="c-6">
                        <div>Pressure: <?php echo $current_obj->main->pressure."hPa" ?></div>
                        <div>Humidity: <?php echo $current_obj->main->humidity."%" ?></div>
                        <div>Min Temp: <?php echo $current_obj->main->temp_min." &#8451;" ?></div>
                        <div>Max Temp: <?php echo $current_obj->main->temp_max." &#8451;" ?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="c-6">Wind Speed: <?php echo $current_obj->wind->speed." meter/sec" ?></div>
                    <div class="c-6">Wind Direction: <?php echo $current_obj->wind->deg."&deg;" ?></div>
                </div>
                <div class="row">
                    <div class="c-6">Sunrise: <?php echo date("H:i:s",$current_obj->sys->sunrise); ?></div>
                    <div class="c-6">Sunset: <?php echo date("H:i:s",$current_obj->sys->sunset); ?></div>
                </div>
            </div>
            <div class="row" style="min-width:900px;max-width:1024px;">
                    <?php 
                        $forcast_list = $forcast_obj->list;
                        foreach($forcast_list as $temp){ 
                          $a=$temp->pop;
                          $a=$a*100;
                            ?>
                <div class="c-3" style="border: 1px solid;">
                    <div class="col c-12"><b><?php echo date("d/m H:i",$temp->dt) ?></b></div>
                             <div class="c-12" style="height:50px; width:50px; margin-left:auto;margin-right:auto;
                             background: url('http://openweathermap.org/img/w/<?php echo $temp->weather[0]->icon ?>.png') no-repeat;"></div>
                             <div class="col c-12"><?php echo $temp->main->temp." &#8451;" ?></div>
                             <div class="col c-12"><?php echo $temp->main->humidity."%" ?></div>
                             <div class="col c-12"><?php echo $temp->weather[0]->main ?></div>
                              
                             <div class="col c-12"><?php echo $a."%" ?></div>
                        </div>
                            <?php }
                    ?>
                </div>
        </div>
       </div>
       </div>
       <!-- kết thúc slider -->
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
   <script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 load_unseen_notification();
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 }); 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});
</script>
    </body>
</html>