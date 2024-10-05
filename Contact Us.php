<!DOCTYPE html>
<html lang="en">
<head>
   <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->

    <title>Contact Us</title>
    <link rel="stylesheet" href="css/style.css">
   
</head>
<body>
  
  <!--Header of table-->
    <header>
        <nav class="navbar">
            <div class="logo">
              <img
                src="image/Logoo.png"
                alt="Logo"
                width="100%"
                height="auto"
              />
            </div>
            <ul class="nav-links">
              <li><a href="#">Home</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="AboutUs .php">About</a></li>
              <li><a href="Contact Us.php">Contact</a></li>
            </ul>
            <div class="auth-buttons">
              <button class="login-btn"><a href="login.php" style="color: aliceblue; text-decoration: none;">Login</a></button>
              <button class="signup-btn">Sign Up</button>
            </div>
          </nav>
    </header>

  <!--Add picture to top of page-->
    <div>
        <img src="image/contact us.jpeg" style="width: 100%;height: 100%;">
    </div>

    <main>
        
    <!--form of get support-->
        <section class="contact-form">
            
            <h2>Get Support</h2>
            <form id="contactForm"method="post" action="insert.php">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="abc123@gmail.com" required>

                <label for="mobile">Mobile No:</label>
                <input type="tel" id="mobile" name="mobile" placeholder="07X XXX XXXX" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" placeholder="Type your texr here ..." required></textarea>

                <button type="submit" id="submitBtn">Submit</button>
                
            </form>
        </section>
  
        <!--add our information-->
        <aside class="contact-info">
            <div class="call">
                <h3>Call us</h3>
                <p>+94 70597 9412</p>
            </div>
            <div class="mail">
                <h3>Mail</h3>
                <p>brightsparkads@gmail.com.com</p>
            </div>
            <div class="social">
                <h3>Let s stay in touch</h3>
                <a href="www.facebook.com"><img src="image/facebook.png" alt="Facebook"></a><br><br>
                <a href="www.intergram.com"><img src="image/instergram.png" alt="Instagram"></a><br><br>
                <a href="www.twitter.com"><img src="image/twitter.png" alt="LinkedIn"></a>
            </div>
        </aside>
    </main>

    <h2>Your Submitted details...</h2>

    <div>
    <?php
    require 'config.php';

    // Internal CSS
    echo "
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        th {
            background-color: black;
            color: white;
        }
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

    // SQL query 
    $sql = "SELECT name, email, mobile, massage FROM support"; 

    $result = $con->query($sql);

    if($result->num_rows > 0) {
        // table header
        echo "<table>";
        echo "<tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Message</th>
                <th>Actions</th> <!-- New column for actions -->
              </tr>";

        // Output data 
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["mobile"] . "</td>";
            echo "<td>" . $row["massage"] . "</td>";
            echo "<td>
                    <div class='action-btns'>
                        <!-- Edit button - triggers edit form -->
                        <form action='edit.php' method='POST'>
                            <input type='hidden' name='email' value='".$row["email"]."'>
                            <input type='submit' class='edit-btn' value='Edit'>
                        </form>

                        <!-- Delete button -->
                        <form action='delete.php' method='POST'>
                            <input type='hidden' name='email' value='".$row["email"]."'>
                            <input type='submit' class='delete-btn' value='Delete' onclick='return confirm(\"Are you sure you want to delete this?\");'>
                        </form>
                    </div>
                  </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Not Submition yet.";
    }

    $con->close();
?>



    <!--Footer of the page-->
    <footer class="footer">
        <div class="footer-content">
          <div class="footer-text">
            <div class="footer-text-content footer-1">
              <h4>About Us</h4>
              <a href="#">Blog</a>
              <a href="AboutUs.php">Our Mission</a>
              <a href="AboutUs.php">Our Vision</a>
              <a href="#">Privacy Policy</a>
              <a href="#">Terms of us</a>
            </div>
            <div class="footer-text-content footer-2">
              <h4>Contact Us</h4>
              <a href="#">Jobs</a>
              <a href="Contact Us.php">Support</a>
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
            <img src="image/logo-no-background (1).png" alt="Logo" />
          </div>
        </div>
        <div class="footer-bottom">
          <p>&copy; 2024 BrightSpark Ads. All rights reserved.</p>
        </div>
      </footer>
   
      <script src="js/my.js"></script>
</body>
</html>
