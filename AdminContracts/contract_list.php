<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contracts List</title>
  <link rel="stylesheet" href="style_bigun.css">
</head>

<body>
  <nav class="navbar">
    <div class="logo">
      <img src="images_bigun/logo-new.png" alt="Logo" width="75px" height="auto" />
    </div>
    <ul class="nav-links">
      <li><a href="home.php">Home</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
    <div class="auth-buttons">
      <button class="login-btn hiddenbtn" onclick="location.href='login.php'">Login</button>
      <button class="signup-btn hiddenbtn">Sign Up</button>
    </div>
  </nav>
  <section>
    <div class="contract-head">
      <h2>Contracts List</h2>
      <button onclick="location.href='admin_dashboard.php'" class="btn green backdashboard">Back to Dashboard</button>
    </div>

    <table>
      <thead>
        <tr>
          <th>Contract ID</th>
          <th>Contract Name</th>
          <th>Details</th>
          <th>Start Date</th>
          <th>End Date</th>
          <th>Fee</th>
          <th>Customer Name</th>
          <th>Customer Email</th>
          <th>Customer Mobile</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php include 'contract_list.inc.php'; ?>
      </tbody>
    </table>
  </section>


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
        <img src="images_bigun/logo-new.png" alt="Logo" width="75px" height="auto" />
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2024 BrightSpark Ads. All rights reserved.</p>
    </div>
  </footer>

  <script src="script_bigun.js"></script>
</body>

</html>