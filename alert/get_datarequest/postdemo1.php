<?php
/*
  Rui Santos
  Complete project details at https://RandomNerdTutorials.com
  
  Permission is hereby granted, free of charge, to any person obtaining a copy
  of this software and associated documentation files.
  
  The above copyright notice and this permission notice shall be included in all
  copies or substantial portions of the Software.
*/

$servername='localhost';
$username='dighuyni_smartgarden'; 
$password='12345678';
$dbname = "dighuyni_smartgarden"; 

// Keep this API Key value to be compatible with the ESP32 code provided in the project page. If you change this value, the ESP32 sketch needs to match
$api_key_value = "tPmAT5Ab3j7F9";

$api_key = $value1 = $value2 = $value3 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $api_key = test_input($_POST["api_key"]);
  echo $api_key;
    if($api_key == $api_key_value) {
       $value1 = test_input($_POST["value1"]);
        
       $value2 = test_input($_POST["value2"]);
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        $sql = "UPDATE devices_status SET solan='$value1' WHERE device_name='$value2'";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    }
    else {
        echo "Wrong API Key provided.";
    }
}
else {
    echo "No data posted with HTTP POST.";
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>