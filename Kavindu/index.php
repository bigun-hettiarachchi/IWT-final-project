<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ManageAds.css">
    <!--<script src="ManageAds.js"></script>-->
    <title>Publisher - Manage Ads</title>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="../images/Logoo.png" alt="Logo" width="75px" height="auto">
        </div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
        <div class="auth-buttons">
            <button class="login-btn">Login</button>
            <button class="signup-btn">Sign Up</button>
        </div>
    </nav>
    
    <h1>Publisher Ad Management</h1>

    <!-- Create Ad Form -->
    <form id="create-ad-form" method="POST" action="insert.php">
        <h2>Create New Ad</h2>
        <label for="ad-title">Ad Title:</label>
        <input type="text" id="ad-title" name="title" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" placeholder="Type your texr here ..." required></textarea>

        <label for="start-date">Start Date:</label>
        <input type="date" id="start-date" name="start_date" required>

        <label for="end-date">End Date:</label>
        <input type="date" id="end-date" name="end_date" required>

        <button type="submit">Create Ad</button>
    </form>

    <!-- Ad List Table -->
   <!-- Ad List Table -->
<div>
    <?php
    require 'config.php';
    echo "
    <style>
        
        .action-btns {
            display: flex;
            gap: 10px;
        }
        .edit-btn {
            background-color: blue;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 10px;
        }
        .edit-btn:hover {
            background-color: darkblue;
        }
        .delete-btn {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 10px;
        }
        .delete-btn:hover {
            background-color: darkred;
        }
    </style>
    ";


    // SQL query to fetch all ads
   // SQL query to fetch all ads
$sql = "SELECT ad_id, title,message, start_date, end_date FROM ad_manegement"; // Change 'id' to 'ad_id'

    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // Table to display ads
        echo "<table>
                <tr>
                    <th>Ad ID</th>
                    <th>Title</th>
                    <th>Message</th>
                    <th>Start Date</th>
                    <th>End Date</th> <!-- Ensure this header is included -->
                    <th>Actions</th>
                </tr>";

        // Display each row of data
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['ad_id'] . "</td>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row["message"] . "</td>";
            echo "<td>" . $row['start_date'] . "</td>";
            echo "<td>" . $row['end_date'] . "</td>"; // Show end date here
            echo "<td>
                    <div class='action-btns'>
                        <form action='edit.php' method='POST'>
                            <input type='hidden' name='ad_id' value='" . $row['ad_id'] . "'>
                            <input type='submit' class='edit-btn' value='Edit'>
                        </form>
                        <form action='delete.php' method='POST'>
                            <input type='hidden' name='ad_id' value='" . $row['ad_id'] . "'>
                            <input type='submit' class='delete-btn' value='Delete' onclick='return confirm(\"Are you sure you want to delete this?\");'>
                        </form>
                    </div>
                  </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No ads found.";
    }

    $con->close();
    ?>
</div>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-text">
                <div class="footer-text-content footer-1">
                    <h4>About Us</h4>
                    <a href="#">Blog</a>
                    <a href="#">Our Mission</a>
                    <a href="#">Our Vision</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Use</a> 
                </div>
                <div class="footer-text-content footer-2">
                    <h4>Contact Us</h4>
                    <a href="#">Jobs</a>
                    <a href="#">Support</a>
                </div>
                <div class="footer-text-content footer-3 social-media">
                    <h4>Social Media</h4>
                    <a href="#">Facebook</a>
                    <a href="#">Instagram</a>
                    <a href="#">LinkedIn</a>
                    <a href="#">Twitter</a>
                </div>
            </div>
            <div class="footer-logo">
                <img src="../images/Logoo.png" alt="Logo">
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 BrightSpark Ads. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
