<?php
// Include the database connection file
require_once "config.php"; // Make sure you have a config file for DB connection

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Collect form data
  $fname = $_POST["firstname"];
  $lname = $_POST["lastname"];
  $gender = $_POST["gender"];
  $mobile = $_POST["mobile"];
  $email = $_POST["email"];
  $dob = $_POST["DOB"];
  $role = $_POST["role"];
  $psw = $_POST["psw"];
  $confirm_psw = $_POST["confirm_psw"];

  // Check if passwords match
  if ($psw !== $confirm_psw) {
    echo "<script>alert('Passwords do not match. Please try again.');</script>";
    echo "<script>window.history.back();</script>"; // Return to the registration form
    exit;
  }

  // Check if the email already exists in the database
  $checkQuery = "SELECT * FROM user WHERE email = '$email'";
  $result = mysqli_query($conn, $checkQuery);

  if (mysqli_num_rows($result) > 0) {
    // Email already exists
    echo "<script>alert('Email already exists. Please use a different one');</script>";
  } else {
    // Insert the new user into the database
    $sql = "INSERT INTO user (firstname, lastname, gender, mobile, email, DOB, role, psw) VALUES ('$fname', '$lname', '$gender', '$mobile', '$email', '$dob', '$role', '$psw')";


    if (mysqli_query($conn, $sql)) {
      // Success message and redirect to profile page
      echo "<script>alert('Registration successful');</script>";
      echo "<script>window.location.href = 'profile.php';</script>";
    } else {
      echo "Error: " . mysqli_error($conn);
    }
  }
}

// Close the database connection
mysqli_close($conn);
?>



<!-- Ranudi's previous code below -->

<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="register.css" />

  <title>Registration</title>
</head>

<body>
  <nav class="navbar">
    <div class="logo">
      <img
        src="Logoo.png"
        alt="Logo"
        width="75px"
        height="auto" />
    </div>
    <ul class="nav-links">
      <li><a href="index.html">Home</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    <div class="auth-buttons">
      <button class="login-btn">Login</button>
      <button class="signup-btn"><a href="Register.html">Sign Up</a></button>
    </div>
  </nav>
  <div class="form">
    <center>
      <h2>Registration Form</h2>
    </center>
    <form action="./insert.php" method="POST" onsubmit="return checkPassword()">

      First Name:<br />
      <input type="text" name="firstname" placeholder="First Name" required><br /><br />

      Last Name:<br />
      <input type="text" name="lastname" placeholder="Last Name" required><br /><br />

      Gender:<br />
      <input type="radio" value="Male" name="gender">Male
      <input type="radio" value="Female" name="gender" checked>Female<br /><br />

      Mobile Number:<br />
      <input type="phone" name="mobile" placeholder="0777777777" pattern="[0-9]{10}"
        required><br /><br />

      e-mail:<br />
      <input type="email" name="email" placeholder="abc@gmail.com"
        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required><br /><br />

      Birthday:<br />
      <input type="date" name="DOB" required><br /><br />

      Role:<br />
      <input type="radio" value="Advertiser" name="role">Advertiser
      <input type="radio" value="Publisher" name="role" checked>Publisher<br /><br />

      Password:<br />
      <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> <br /><br />


      Re-Enter Password:<br />
      <input type="password" id="cnfrmpwd" required><br /><br />

      <br>
      <input type="checkbox" class="inputStyle" id="checkBox" onclick="enableButton()">Accept Privacy Policy and Terms<br /><br />

      <center>
        <input type="submit" value="Submit" id="submitBtn" enableButton>
      </center>

    </form>
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
        <img src="logo-no-background.png" alt="Logo" />
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2024 BrightSpark Ads. All rights reserved.</p>
    </div>
  </footer>

  <script src="js/index.js"></script>
</body>

</html> -->