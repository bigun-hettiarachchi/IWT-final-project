<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style_bigun.css" />
  <title>IWT assignment</title>
</head>

<body>
  <nav class="navbar">
    <div class="logo">
      <img src="images_bigun/logo-new.png" alt="Logo" width="75px" height="auto" />
    </div>
    <ul class="nav-links">
      <li><a href="home.php">Home</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="#">About</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
    <div class="auth-buttons">
      <button class="login-btn" onclick="location.href='login.php'">Login</button>
      <button class="signup-btn">Sign Up</button>
      <button class="signup-btn admin-btn" onclick="location.href='login.php'">Admin</button>

    </div>
  </nav>

  <!-- Hero Section -->
  <!-- <section class="hero">
      <img
        src="images/agency-hero-3.webp"
        alt="Hero Image"
        class="hero-img"
        height="400px"
      />
      <div class="hero-text">
        <h1>Welcome to BrightSpark Ads</h1>
        <p>We bring your vision to life with expert advertising solutions.</p>
      </div>
    </section> -->

  <!-- Main Content -->
  <section class="about-section">
    <h2>About BrightSpark Ads</h2>
    <div class="about">
      <p>
        At BrightSpark Ads, we are passionate about connecting businesses with the right audiences through innovative and effective advertising solutions. Our platform bridges the gap between advertisers and publishers, allowing seamless ad placements across a wide range of digital platforms. Whether you're a small business looking to grow your brand or a large enterprise aiming for maximum exposure, we have the tools and expertise to make your vision a reality.
      </p>
      <p>
        We specialize in providing targeted advertising solutions, including display ads, programmatic advertising, and more. Our network of trusted publishers ensures that your ads reach the right people at the right time, maximizing engagement and driving results. At BrightSpark Ads, we believe in the power of data-driven strategies, creativity, and cutting-edge technology to deliver impactful campaigns that align with your business goals.
      </p>
      <p>
        With our team of experienced professionals, we are committed to helping you achieve your advertising objectives efficiently and effectively. Let us help you stand out in today’s competitive digital landscape.
      </p>
    </div>
  </section>

  <!-- Footer -->
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

  <script src="index.js"></script>
</body>

</html>