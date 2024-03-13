# VehicleDatabase
<!DOCTYPE html>
<html>
<head>
    <style>
        /* Add your CSS styles here */
    </style>
    <script>
        function showForm(formId) {
            // Hide all forms
            var forms = document.getElementsByClassName('input-form');
            for (var i = 0; i < forms.length; i++) {
                forms[i].style.display = 'none';
            }
            // Show the selected form
            document.getElementById(formId).style.display = 'block';
        }
    </script>
</head>
<body>
    <select onchange="showForm(this.value)">
        <option value="">Select a table</option>
        <option value="vehicles-form">Vehicles</option>
        <option value="customers-form">Customers</option>
        <option value="bookings-form">Vehicle Bookings</option>
    </select>

    <form id="vehicles-form" class="input-form" style="display: none;">
        <!-- Add your inputs for the Vehicles table here -->
    </form>

    <form id="customers-form" class="input-form" style="display: none;">
        <!-- Add your inputs for the Customers table here -->
    </form>

    <form id="bookings-form" class="input-form" style="display: none;">
        <!-- Add your inputs for the Vehicle Bookings table here -->
    </form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .form-container {
            width: 300px;
            margin: 0 auto;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="INSERT_Vehicle_Database.php" method="post">
            <div class="form-group">
                <label for="reg_number">Registration Number:</label>
                <input type="text" id="reg_number" name="REG_NUMBER">
            </div>
            <div class="form-group">
                <label for="current_mileage">Current Mileage:</label>
                <input type="text" id="current_mileage" name="CURRENT_MILEAGE">
            </div>
            <!-- Add more inputs as needed -->
            <div class="form-group">
                <button type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>