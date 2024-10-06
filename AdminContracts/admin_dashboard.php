<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="style_bigun.css">
</head>

<body>
  <nav class="navbar">
    <div class="logo">
      <img src="images_bigun/logo-new.png" alt="Logo" width="75px" height="auto" />
    </div>
    <ul class="nav-links">
      <li><a href="../AdminContracts/home.php">Home</a></li>
      <li><a href="../Kavindu/Publisherservices.html">Services</a></li>
      <li><a href="/Vishwa/AboutUs.html">About</a></li>
      <li><a href="../Vishwa/Contact Us.html">Contact</a></li>
    </ul>
    <div class="auth-buttons">
      <button class="login-btn hiddenbtn">Login</button>
      <button class="signup-btn hiddenbtn">Sign Up</button>
    </div>
  </nav>

  <section id="dashboard-section">

    <h2>Admin Dashboard</h2>
    <button class="dashboard-btn dbtn-1" onclick="window.location.href='create_contract.php'">Create Contract</button>
    <button class="dashboard-btn dbtn-2" onclick="window.location.href='contract_list.php'">View Contracts</button>

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
          <a href="https://facebook.com">Facebook</a>
          <a href="https://instagram.com">Instagram</a>
          <a href="https://linkedin.com">LinkedIn</a>
          <a href="https://twitter.com">Twitter</a>
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