<?php
  //Local variables
$host="localhost";
$username="venusc46_hw4";
$password="dream773";
$dbname="venusc46_Chau_Venus";
//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

  //define 
  
  //post is the way to get value feom the web text box
  $OFFICE=$_POST['OFFICE'];
  $CITY=$_POST['CITY'];
  $REGION=$_POST['REGION'];
  $MGR=$_POST['MGR'];
  $SALES=$_POST['SALES'];
  $TARGET=$_POST['TARGET'];

  $reg_OK = true;

  if($OFFICE == "") {
    echo"Office Number must not be empty.<br />";
    $reg_OK = false;
  }

  if($CITY == "") {
    echo"City must not be empty.<br />";
    $reg_OK = false;
  }
  
  if($REGION == "") {
    echo"Region must not be empty.<br />";
    $reg_OK = false;
  }
  
  if($MGR == "") {
    echo"Manager ID must not be empty.<br />";
    $reg_OK = false;
  }
  
   if($TARGET == "") {
    echo"Target must not be empty.<br />";
    $reg_OK = false;
  }
    if($SALES == "") {
    echo"Sales must not be empty.<br />";
    $reg_OK = false;
  }
    
  $sql="SELECT OFFICE 
	FROM OFFICES
	WHERE OFFICE='$OFFICE'";
  $result=$conn->query($sql);

  if($result->num_rows == 1) {
    echo "Office number already in use.<br />";
    $reg_OK = false;
  }

  if($reg_OK) {
    $sql="INSERT INTO OFFICES (OFFICE, CITY, REGION, MGR ,TARGET,SALES )
	  VALUES ('$OFFICE', '$CITY', '$REGION', '$MGR', '$TARGET', '$SALES')
	 ";
    $conn->query($sql) or die(mysql_error());
    
    echo"Office information update successful.<br />";
  }	
?>



