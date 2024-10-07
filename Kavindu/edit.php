<?php
require 'config.php';


$id = $_POST['ad_id']; // Get the ad ID from the POST request

// Fetch the ad from the database
$sql = "SELECT title, message,start_date, end_date FROM ad_manegement WHERE ad_id='$id'"; // Ensure the correct column name

$result = $con->query($sql);

if ($result && $result->num_rows == 1) {
    $row = $result->fetch_assoc();
} else {
    echo "Ad not found.";
    exit; // Stop execution if the ad is not found
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Ad</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            /* Light background for contrast */
            color: #333;
            /* Dark text color */
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #000;
            /* Black color for the heading */
        }

        form {
            background-color: #fff;
            /* White background for the form */
            border: 1px solid #ccc;
            /* Light border */
            border-radius: 5px;
            /* Rounded corners */
            padding: 20px;
            max-width: 500px;
            /* Max width for the form */
            margin: 20px auto;
            /* Center the form */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            /* Subtle shadow for depth */
        }

        label {
            display: block;
            /* Block display for labels */
            margin-bottom: 5px;
            /* Spacing between label and input */
            color: #000;
            /* Black color for labels */
        }

        input[type="text"],
        input[type="date"] {
            width: 100%;
            /* Full width */
            padding: 10px;
            /* Padding for inputs */
            margin-bottom: 15px;
            /* Spacing between inputs */
            border: 1px solid #ccc;
            /* Light border */
            border-radius: 4px;
            /* Rounded corners */
            box-sizing: border-box;
            /* Include padding in width */
        }

        button {
            background-color: #000;
            /* Black background for the button */
            color: #fff;
            /* White text color */
            border: none;
            /* No border */
            padding: 10px 15px;
            /* Padding for button */
            border-radius: 4px;
            /* Rounded corners */
            cursor: pointer;
            /* Pointer cursor on hover */
            transition: background-color 0.3s;
            /* Smooth transition for hover effect */
        }

        button:hover {
            background-color: #444;
            /* Darker shade on hover */
        }

        footer {
            text-align: center;
            /* Centered text */
            margin-top: 20px;
            /* Spacing above the footer */
            padding: 10px;
            /* Padding for the footer */
            background-color: #000;
            /* Black background for footer */
            color: #fff;
            /* White text color for footer */
        }

        .footer-content {
            max-width: 1200px;
            /* Max width for footer content */
            margin: 0 auto;
            /* Center the footer content */
        }
    </style>
</head>

<body>
    <h1>Edit Ad</h1>

    <form method="POST" action="update.php">
        <input type="hidden" name="ad_id" value="<?php echo htmlspecialchars($id); ?>">


        <label for="name">Ad Title:</label>
        <input type="text" id="name" name="title" value="<?php echo htmlspecialchars($row['title']); ?>" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required><?php echo htmlspecialchars($row['message']); ?></textarea>

        <!-- <textarea id="message" name="message" value=<?php echo htmlspecialchars($row['message']); ?>"></textarea> -->

        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" value="<?php echo htmlspecialchars($row['start_date']); ?>" required>

        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date" value="<?php echo htmlspecialchars($row['end_date']); ?>" required> <!-- End date field -->

        <button type="submit">Update Ad</button>
    </form>

    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024 BrightSpark Ads. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>