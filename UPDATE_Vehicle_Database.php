<?php

// Check if the user has submitted data into the form

if (isset ($_POST ['submit'])){
	$reg_number = $_POST ['reg_number'];
	$current_mileage = $_POST ['current_mileage'];
	
	//Check if both fields have been entered
	if ($reg_number && $current_mileage){
		
			//Connect to the server and the empdept2 database
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "Vehicle_Database";

				// Create connection
				$conn = mysqli_connect($servername, $username, $password, $dbname);
					// Check connection
					if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
								}
	
	// Check if that department exists
	$exists= mysqli_query ($conn,"SELECT * FROM vehicles WHERE REG_NUMBER = '$reg_number' ") or die ("Query could not be completed");
	
	// Update the location field in the DEPT table
	if (mysqli_num_rows($exists) !=0){
		mysqli_query ($conn,"UPDATE VEHICLES SET CURRENT_MILEAGE = '$current_mileage' WHERE REG_NUMBER = '$reg_number'") or die ("Update could not be applied");
		echo "Successful Location Updated";
			}else echo "That Dept No does not exist.  Please re-enter:";
					}else echo "You must enter values for both fields.  Please re-enter";
		
		
		
		
	}
	
?>
<html>
<head>
	<title>Update Example</title>
</head> 
<body>
<h2> Update Department Location </h2><br /><br />
<form action ="UPDATE_Vehicle_Database.php" method ="POST">
<table>
<tr><td>Reg Number:</td> <td> <input type ="text" id="reg_number" name="reg_number"> </td></tr>
<tr><td>Current Mileage:</td> <td> <input type ="text" id="current_mileage" name="current_mileage"> </td></tr>
<tr><td><input type ="submit" id="submit" name="submit" value = "Update Vehicle"></td></tr>
</table>
</form>
</body>
</html>