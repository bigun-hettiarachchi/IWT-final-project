<?php
require 'config.php'; // Include your database configuration file

// Fetch data from the database
$sql = "SELECT * FROM ad_management"; // Make sure the table name is correct
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="ManageAds.css" />
  <script src="ManageAds.js"></script>

  <title>Publisher - Manage Ads</title>
</head>

<body>
  <nav class="navbar">
    <div class="logo">
      <img src="../Kavindu/Logoo.png" alt="Logo" width="75px" height="auto" />
    </div>
    <ul class="nav-links">
      <li><a href="../AdminContracts/home.php">Home</a></li>
      <li><a href="../Kavindu/Publisherservices.html">Services</a></li>
      <li><a href="../Vishwa/AboutUs.html">About</a></li>
      <li><a href="../Vishwa/Contact Us.php">Contact</a></li>
    </ul>
    <div class="auth-buttons">
      <button class="login-btn" onclick="location.href='../Vishwa/login.php'">Login</button>
      <button class="signup-btn" onclick="location.href='../RanudiEdited/Register.html'">Sign Up</button>
    </div>
  </nav>

  <h1>Publisher Ad Management</h1>

  <!-- Create Ad Form -->
  <form id="create-ad-form">
    <h2>Create New Ad</h2>
    <label for="ad-title">Ad Title:</label>
    <input type="text" id="ad-title" name="ad-title" required />

    <label for="ad-content">Ad Content:</label>
    <textarea id="ad-content" name="ad-content" rows="5" required></textarea>

    <label for="start-date">Start Date:</label>
    <input type="date" id="start-date" name="start-date" required />

    <label for="end-date">End Date:</label>
    <input type="date" id="end-date" name="end-date" required />

    <button type="submit">Create Ad</button>
  </form>

  <!-- Scheduled Ads Table -->
  <h2>Scheduled Ads</h2>
  <table>
    <thead>
      <tr>
        <th>Ad ID</th>
        <th>Title</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['start_date']; ?></td>
            <td><?php echo $row['end_date']; ?></td>
            <td><?php echo $row['status']; ?></td> <!-- Add status if available -->
            <td>
              <button onclick="editAd(<?php echo $row['id']; ?>)">Edit</button>
              <button onclick="deleteAd(<?php echo $row['id']; ?>)">Delete</button>
            </td>
          </tr>
        <?php endwhile; ?>
      <?php else: ?>
        <tr>
          <td colspan="6">No scheduled ads found.</td>
        </tr>
      <?php endif; ?>
    </tbody>
  </table>

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
        <img src="../Kavindu/Logoo.png" alt="Logo" />
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2024 BrightSpark Ads. All rights reserved.</p>
    </div>
  </footer>
</body>

</html>

<?php
// Close the connection
$con->close();
?>



<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="ManageAds.css" />
    <script src="ManageAds.js"></script>

    <title>Publisher - Manage Ads</title>
  </head>
  <body>
    <nav class="navbar">
      <div class="logo">
        <img src="../Kavindu/Logoo.png" alt="Logo" width="75px" height="auto" />
      </div>
      <ul class="nav-links">
        <li><a href="../AdminContracts/home.php">Home</a></li>
        <li><a href="../Kavindu/Publisherservices.html">Services</a></li>
        <li><a href="../Vishwa/AboutUs.html">About</a></li>
        <li><a href="../Vishwa/Contact Us.php">Contact</a></li>
      </ul>
      <div class="auth-buttons">
        <button class="login-btn" onclick="location.href='../Vishwa/login.php'">
          Login
        </button>
        <button
          class="signup-btn"
          onclick="location.href='../RanudiEdited/Register.html'">
          Sign Up
        </button>
      </div>
    </nav>
    <h1>Publisher Ad Management</h1>


    <form id="create-ad-form">
      <h2>Create New Ad</h2>
      <label for="ad-title">Ad Title:</label>
      <input type="text" id="ad-title" name="ad-title" required />

      <label for="ad-content">Ad Content:</label>
      <textarea id="ad-content" name="ad-content" rows="5" required></textarea>

      <label for="start-date">Start Date:</label>
      <input type="date" id="start-date" name="start-date" required />

      <label for="end-date">End Date:</label>
      <input type="date" id="end-date" name="end-date" required />

      <button type="submit">Create Ad</button>
    </form>


    <h2>Scheduled Ads</h2>
    <table>
      <th>
        <tr>
          <th>Ad ID</th>
          <th>Title</th>
          <th>Start Date</th>
          <th>End Date</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </th>
      <tbody> -->




<!-- Table data will be dynamically added here -->





<!--         
      </tbody>
    </table>

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
          <img src="../Kavindu/Logoo.png" alt="Logo" />
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2024 BrightSpark Ads. All rights reserved.</p>
      </div>
    </footer>
  </body>
</html> -->