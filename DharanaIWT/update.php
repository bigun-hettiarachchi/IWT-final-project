<?php
// Include the database connection file
require_once 'connection.php'; // Ensure this is properly included

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Advertisement</title>
    <link rel="stylesheet" href="insert.css">

    <style>
        /* Add inline styles or use an external CSS file */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>

    <?php

    if (isset($conn)) { // Check if connection was successful
        if (isset($_GET['advertiseName'])) {
            $advertiseName = $_GET['advertiseName'];


            // Retrieve the record with the given advertiseName
            $sql = "SELECT * FROM advertise_details WHERE advertiseName = '$advertiseName'";
            $result = $conn->query($sql); // Use the correct connection variable

            if ($result->num_rows > 0) { // Check if records exist
                $row = $result->fetch_assoc();
                $advertiserName = $row['advertiseName']; // Corrected column name to 'advertiseName'
                $publisher = $row['selectpublisher']; // Corrected column name to 'selectpublisher'
                $adContent = $row['adcontent']; // Corrected column name to 'adcontent'
                $adBudget = $row['Budget']; // Corrected column name to 'Budget'

                // Display the update form
                echo "<form action='../DharanaIWT/update.inc.php' method='post' id='adForm' style='display: flex; flex-direction: column; width: 300px; gap: 10px;'>";

                echo "<label for='advertiserName'>Advertiser Name</label>";
                echo "<input type='text' id='advertiseName' name='advertiseName' value='" . $advertiserName . "' required>";

                echo "<label for='publisher'>Select Publisher</label>";
                echo "<select id='publisher' name='selectpublisher' required>";
                echo "<option value=''>-- Select Publisher --</option>";
                echo "<option value='Publisher1'" . ($publisher == 'Publisher1' ? " selected" : "") . ">Publisher 1</option>";
                echo "<option value='Publisher2'" . ($publisher == 'Publisher2' ? " selected" : "") . ">Publisher 2</option>";
                echo "<option value='Publisher3'" . ($publisher == 'Publisher3' ? " selected" : "") . ">Publisher 3</option>";
                echo "</select>";

                echo "<label for='adContent'>Ad Content</label>";
                echo "<textarea id='adContent' name='adContent' rows='5' required>" . $adContent . "</textarea>";

                echo "<label for='adBudget'>Budget ($)</label>";
                echo "<input type='text' id='adBudget' name='Budget' value='" . $adBudget . "' required>";

                echo "<button type='submit' class='btn-submit' style='margin-top: 10px;'>Update</button>";
                echo "</form>";
            } else {
                echo "No record available.";
            }
        } else {
            echo "ID parameter is missing.";
        }

        // Close the connection
        $conn->close();
    } else {
        echo "Failed to connect to the database.";
    }

    ?>
</body>

</html>