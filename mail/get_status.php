
<?php
$servername='localhost';
$username='dighuyni_smartgarden'; 
$password='12345678';
$dbname = "dighuyni_smartgarden"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

       $value   =   $_GET['value'];
    // $value='value1';
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql        =   "SELECT $value FROM logs ORDER BY id DESC LIMIT 1";
    $result     =   $conn->query($sql);
    
    if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc())
    {
        echo $row[$value];
       
    }
        
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>