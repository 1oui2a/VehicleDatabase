 <?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "VEHICLE_DATABASE";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Escape user inputs for security;

$REG_NUMBER = $_POST['REG_NUMBER'];

$CURRENT_MILEAGE = $_POST['CURRENT_MILEAGE'];

$DATE_MADE = $_POST['DATE_MADE'];

$DATE_NCT_DUE = $_POST['DATE_NCT_DUE'];

$VEHICLE_MODEL = $_POST['VEHICLE_MODEL'];

 

// attempt insert query execution

mysqli_query($conn, "INSERT INTO vehicles (REG_NUMBER, CURRENT_MILEAGE, DATE_MADE, DATE_NCT_DUE, VEHICLE_MODEL) VALUES ('$REG_NUMBER', '$CURRENT_MILEAGE', '$DATE_MADE', '$DATE_NCT_DUE', '$VEHICLE_MODEL')");

if(mysqli_affected_rows($conn)>0){

    echo "Records added successfully.";

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

}

 

// close connection

mysqli_close($conn);

?>