<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Contract</title>
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
      <li><a href="../Vishwa/AboutUs.html">About</a></li>
      <li><a href="../Vishwa/Contact Us.php">Contact</a></li>
    </ul>
    <div class="auth-buttons">
      <button class="login-btn hiddenbtn">Login</button>
      <button class="signup-btn hiddenbtn">Sign Up</button>
    </div>
  </nav>

  <section>
    <h2>Add New Contract</h2>
    <form action="create_contract.inc.php" method="post">
      <label for="contract_name">Contract Name:</label>
      <input type="text" id="contract_name" name="contract_name" required>

      <label for="contract_details">Contract Details:</label>
      <textarea id="contract_details" name="contract_details" required></textarea>

      <label for="start_date">Start Date:</label>
      <input type="date" id="start_date" name="start_date" required>

      <label for="end_date">End Date:</label>
      <input type="date" id="end_date" name="end_date" required>

      <label for="contract_fee">Contract Fee (USD):</label>
      <input type="number" step="0.01" id="contract_fee" name="contract_fee" required>

      <label for="customer_name">Customer Name:</label>
      <input type="text" id="customer_name" name="customer_name" required>

      <label for="customer_email">Customer Email:</label>
      <input type="email" id="customer_email" name="customer_email" required>

      <label for="customer_mobile">Customer Mobile:</label>
      <input type="text" id="customer_mobile" name="customer_mobile" required>

      <button type="submit" class="btn green">Submit</button>
      <button onclick="location.href='admin_dashboard.php'" class="btn back">Cancel</button>
    </form>


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