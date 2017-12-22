<?php
  //Local variables
$host="localhost";
$username="venusc46_update";
$password="update";
$dbname="venusc46_Chau_Venus";
//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//finding database
$query = $conn -> query("SELECT * FROM OFFICES");
  //update
  if(isset($_POST['Update'])){
    $OFFICE=$_POST['OFFICE'];
    $CITY=$_POST['CITY'];
    $REGION=$_POST['REGION'];
    $MGR=$_POST['MGR'];
    $SALES=$_POST['SALES'];
    $TARGET=$_POST['TARGET'];
    $sql ="UPDATE OFFICES set CITY='$CITY', REGION='$REGION', MGR= '$MGR', TARGET='$TARGET',SALES='$SALES' WHERE OFFICE='$OFFICE';";
    
    if($conn->query($sql)){
    echo "Success!";
    }else {
    "Error updating record " . $conn->error;
    }
  }
  
  $conn->close();
?>
