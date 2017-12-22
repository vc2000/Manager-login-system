<?php


 //Local variables

$servername="localhost";
 $username="venusc46_hw4";
 $password="dream773";
$dbname="venusc46_Chau_Venus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql="SELECT * FROM OFFICES";
$result=$conn->query($sql);


    
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "OFFICE: " . $row["OFFICE"]. "CITY: " . $row["CITY"]. "REGION: " . $row["REGION"]. "MANAGER ID: " . $row["MGR"]. "TARGET: " . $row["TARGET"]. "SALES: " . $row["SALES"]. "<br>";
    }
} 

else {
    echo "0 results";
}

$conn->close();
?>