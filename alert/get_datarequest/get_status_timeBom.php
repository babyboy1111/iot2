
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

    $bom   =   $_GET['bom'];
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql        =   "SELECT timeBom FROM set_time WHERE bom='$bom' LIMIT 1";
    $result     =   $conn->query($sql);
    
    if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc())
    {
        echo $row['timeBom'];
       
    }
        
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>