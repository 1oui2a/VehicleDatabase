<?php
include 'session.php';

//1.  Create a database connection
$dbhost ="localhost";
$dbuser ="root";
$dbpassword="";
$dbname = "SELECT_Vehicle_Database";

$connection= mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

//Test if connection occured

if(mysqli_connect_errno()){
	die("DB connection failed: " .
		mysqli_connect_error() .
			" (" . mysqli_connect_errno() . ")"
			);
}


if (!$connection)
  {
  die('Could not connect: ' . mysqli_error());
  }

//2.  Perform Database Query for VEHICLES

$result = mysqli_query($connection,"SELECT * FROM VEHICLES");

echo "<table border='1'>
<tr>
<th>VEHICLES Id</th>
<th>REG_NUMBER</th>
<th>CURRENT_MILEAGE</th>
<th>DATE_MADE</th>
<th>DATE_NCT_DUE</th>
<th>VEHICLE_MODEL</th>
</tr>";

//3. Use returned data 

while($row = mysqli_fetch_array($result_vehicles))
  {
  echo "<tr>";
  echo "<td>" . $row['reg_number'] . "</td>";
  echo "<td>" . $row['current_mileage'] . "</td>";
  echo "<td>" . $row['date_made'] ."</td>";
  echo "<td>" . $row['date_nct_due'] ."</td>";
  echo "<td>" . $row['vehicle_model'] ."</td>";
  echo "</tr>";
  }
echo "</table>";

//4.  Release returned data 

mysqli_free_result($result_vehicles);

// database query for CUSTOMERS
$result = mysqli_query($connection,"SELECT * FROM CUSTOMERS");

echo "<table border='2'>
<tr>
<th>CUSTOMER_ID</th>
<th>CUSTOMER_NAME</th>
<th>CUSTOMER_EMAIL</th>
</tr>";

//3. Use returned data 

while($row = mysqli_fetch_array($result_customers))
  {
  echo "<tr>";
  echo "<td>" . $row['customer_id'] . "</td>";
  echo "<td>" . $row['customer_name'] . "</td>";
  echo "<td>" . $row['customer_email'] ."</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_free_result($result_customers);

// database query for VEHICLE_BOOKINGS
$result = mysqli_query($connection,"SELECT * FROM VEHICLE_BOOKINGS");

echo "<table border='3'>
<tr>
<th>CUSTOMER_BOOKINGID</th>
<th>CUSTOMER_ID</th>
<th>VEHICLE_RENTAL_ID</th>
<th>DATE_FROM</th>
<th>DATE_TO</th>
</tr>";

//3. Use returned data 

while($row = mysqli_fetch_array($result_vehicle_bookings))
  
  {
  echo "<tr>";
  echo "<td>" . $row['customer_bookingid'] . "</td>";
  echo "<td>" . $row['customer_id'] . "</td>";
  echo "<td>" . $row['vehicle_rental_id'] ."</td>";
  echo "<td>" . $row['date_from'] ."</td>";
  echo "<td>" . $row['date_to'] ."</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_free_result($result_vehicle_bookings);

// database query for VEHICLE_RENTAL_STATUS
$result = mysqli_query($connection,"SELECT * FROM VEHICLE_RENTAL_STATUS");

echo "<table border='3'>
<tr>
<th>RENTAL_STATUS_CODE</th>
<th>RENTAL_STATUS_DESCRIPTION</th>
<th>CUSTOMER_BOOKINGID</th>
</tr>";

//3. Use returned data 

while($row = mysqli_fetch_array($result_vehicle_rental_status))
  
  {
  echo "<tr>";
  echo "<td>" . $row['rental_status_code'] . "</td>";
  echo "<td>" . $row['rental_status_description'] . "</td>";
  echo "<td>" . $row['customer_bookingid'] ."</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_free_result($result_vehicle_bookings);




//5.  Close database connection

mysqli_close($connection);
?> 