<?php

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

$result=mysqli_query($conn, "SELECT * FROM VEHICLES");

?>

<table border ="1">
	<tr>
		<th>REG_NUMBER</th>
		<th>CURRENT_MILEAGE</th>
		<th>DATE_MADE</th>
		<th>DATE_NCT_DUE</th>
		<th>VEHICLE_MODEL</th>
	<tr>
<?php

$i=1;

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$REG_NUMBER = $row['REG_NUMBER'];
	$CURRENT_MILEAGE = $row['CURRENT_MILEAGE'];
	$DATE_MADE = $row['DATE_MADE'];
	$DATE_NCT_DUE = $row['DATE_NCT_DUE'];
	$VEHICLE_MODEL = $row['VEHICLE_MODEL'];
?>

<tr>
	
	<td><?php echo $REG_NUMBER;?></td>
	<td><?php echo $CURRENT_MILEAGE;?></td>
	<td><?php echo $DATE_MADE;?>
	<td><?php echo $DATE_NCT_DUE;?>
	<td><?php echo $VEHICLE_MODEL;?></td>
	
	<td>
		<a href ="DELETEDB.php?delete=<?php echo $VEHICLES;?>"onclick="return confirm('Are you sure?');">Delete</a>
	</td>
	
	
</tr>

	<?php

	$i++;
	}
	if(isset($_GET['delete'])){
		$delete_id= $_GET['delete'];
		
		mysqli_query($conn, "DELETE FROM VEHICLES WHERE REG_NUMBER = '$delete_id'");
		
		header("location: DELETE_Vehicle_Database.php");
	}
	?>
</table>