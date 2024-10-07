<?php
require 'config.php';

$email = $_POST["email"]; // Fetching email from the POST request

// Fetch the specific record for editing
$sql = "SELECT name, email, mobile, message FROM support WHERE email='$email'";
$result = $con->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
?>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1e1e1e;
            color: #ffffff;
            padding: 20px;
        }

        form {
            background-color: #333;
            padding: 20px;
            border-radius: 8px;
            width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #555;
            border-radius: 4px;
            background-color: #222;
            color: #ffffff;
        }

        button {
            background-color: #000;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #444;
        }
    </style>

    <form method="POST" action="update.php">
        <input type="hidden" name="email" value="<?php echo $email; ?>">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required readonly>

        <label for="mobile">Mobile No:</label>
        <input type="tel" id="mobile" name="mobile" value="<?php echo $row['mobile']; ?>" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required><?php echo $row['message']; ?></textarea>

        <button type="submit">Update</button>
    </form>

<?php
} else {
    echo "No record found";
}

$con->close();
?>