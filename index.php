<!DOCTYPE html>

    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>Add Vehicle Form</title>
    </head>
    <body>

    <form action="INSERT_Vehicle_Database.php" method="post">

        <p>
            <label for="REG_NUMBER">REG_NUMBER:</label>

            <input type="text" name="REG_NUMBER" id="REG_NUMBER">
        </p>

        <p>
            <label for="CURRENT_MILEAGE">CURRENT_MILEAGE:</label>

            <input type="text" name="CURRENT_MILEAGE" id="CURRENT_MILEAGE">
        </p>

        <p>

            <label for="DATE_MADE">DATE_MADE:</label>

            <input type="text" name="DATE_MADE" id="DATE_MADE">

        </p>

          <p>
            <label for="DATE_NCT_DUE">DATE_NCT_DUE:</label>

            <input type="text" name="DATE_NCT_DUE" id="DATE_NCT_DUE">
        </p>

        
          <p>
            <label for="VEHICLE_MODEL">VEHICLE_MODEL:</label>

            <input type="text" name="VEHICLE_MODEL" id="VEHICLE_MODEL">
        </p>

        <input type="submit" value="Submit">

    </form>

    </body>

    </html>
