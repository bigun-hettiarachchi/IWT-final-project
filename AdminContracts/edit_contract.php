<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Contract</title>
  <link rel="stylesheet" href="style_bigun.css">
</head>

<body>


  <nav class="navbar">
    <div class="logo">
      <img src="images_bigun/logo-new.png" alt="Logo" width="75px" height="auto" />
    </div>
    <ul class="nav-links">
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

    <?php
    require_once './connection.php';

    if (isset($_GET['id'])) {
      $id = $_GET['id'];


      $sql = "SELECT * FROM contracts WHERE id='$id'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $contract_name = $row['contract_name'];
        $contract_details = $row['contract_details'];
        $start_date = $row['start_date'];
        $end_date = $row['end_date'];
        $contract_fee = $row['contract_fee'];
        $customer_name = $row['customer_name'];
        $customer_email = $row['customer_email'];
        $customer_mobile = $row['customer_mobile'];

        echo "<form action='edit_contract.inc.php' method='post'>";
        echo "<input type='hidden' name='id' value='" . $id . "'>";
        echo "<label for='contract_name'>Contract Name</label>";
        echo "<input type='text' name='contract_name' value='" . $contract_name . "'><br>";
        echo "<label for='contract_details'>Contract Details</label>";
        echo "<textarea name='contract_details'>" . $contract_details . "</textarea><br>";
        echo "<label for='start_date'>Start Date</label>";
        echo "<input type='date' name='start_date' value='" . $start_date . "'><br>";
        echo "<label for='end_date'>End Date</label>";
        echo "<input type='date' name='end_date' value='" . $end_date . "'><br>";
        echo "<label for='contract_fee'>Contract Fee (USD)</label>";
        echo "<input type='number' name='contract_fee' value='" . $contract_fee . "' step='0.01'><br>";
        echo "<label for='customer_name'>Customer Name</label>";
        echo "<input type='text' name='customer_name' value='" . $customer_name . "'><br>";
        echo "<label for='customer_email'>Customer Email</label>";
        echo "<input type='email' name='customer_email' value='" . $customer_email . "'><br>";
        echo "<label for='customer_mobile'>Customer Mobile</label>";
        echo "<input type='text' name='customer_mobile' value='" . $customer_mobile . "'><br>";
        echo "<button type='submit' class='btn green'>Update Contract</button>";
        echo "<button type='button' onclick='location.href=\"contract_list.php\"' class='btn back'>Cancel</button>";
        echo "</form>";
      } else {
        echo "No records found.";
      }
    }

    $conn->close();

    ?>
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