<?php
  session_start();
  session_destroy();
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <title>Registration</title>
  
  <style type="text/css">
    h1 {
      color: black;
      font-size: 36px;
    }
  </style>
</head>

<body style="background-color: burlywood">

	<form name="register" method="post" action="register.php" target="message">
	  <table style="height: 100%; width: 80%">
	    <tr>
	      <td colspan="2">
		<h1>Insert Offices Information</h1>
	      </td>
	    </tr>
	    <tr>
	      <td width="70">Office Number: </td>
	      
	    <!--right text box, -->
	      <td width="230" align="left"><input name="OFFICE" type="int" id="OFFICE"/></td>
	    </tr>
	    <tr>
	      <td width="70">City: </td>
	      <td width="230" align="left"><input name="CITY" type="text" id="CITY"/></td>
	    </tr>
	    <tr>
	      <td width="70">Region: </td>
	      <td width="230" align="left"><input name="REGION" type="text" id="REGION"/></td>
	    </tr>
	    <tr>
	      <td width="70">Manager ID: </td>
	      <td width="230" align="left"><input name="MGR" type="int" id="MGR"/></td>
	    </tr>
	    <tr>
	      <td width="70">Target: </td>
	      <td width="230" align="left"><input name="TARGET" type="double" id="TARGET"/></td>
	    </tr>
	    <tr>
	      <td width="70">Sales: </td>
	      <td width="230" align="left"><input name="SALES" type="double" id="SALES"/></td>
	    </tr>
	    <tr>
	      <td width="60">&nbsp; </td>
	      <td align="left"><input type="submit" name="Insert" value="Insert"/></td>
	    </tr>
	    <tr>
	      <td colspan="2"> Back to <a href="interface.php" target="_parent"> the data</a>.</td>
	    </tr>	    
	  </table>
	</form>
      
</body>
</html>