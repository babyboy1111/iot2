<?php


require 'connect.php'; 
// Keep this API Key value to be compatible with the ESP32 code provided in the project page. If you change this value, the ESP32 sketch needs to match

 $value1 = $value2 = $value3 = "";

if (isset($_POST['RESET'])) {
    
        
        $sql = "UPDATE devices_status SET solan='0' WHERE device_name='light1'";
        
        if ($conn->query($sql) === TRUE) {
            echo '<script> window.location="index.php";</script>';
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    }
    
?>