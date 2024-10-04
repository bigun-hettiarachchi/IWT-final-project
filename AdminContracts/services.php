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
      <li><a href="#">Services</a></li>
      <li><a href="about.php">About</a></li>
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
  <div class="service-section">
    <h2>Our Services</h2>
    <p>
      Our primary goal is to help you grow your business by choosing the right
      platforms to place your advertisements.
    </p>

    <div class="service-list">
      <div class="service service-2">
        <h3>Display Ads</h3>
        <p>
          Display ads are visual advertisements that appear on websites, apps, and social media platforms, reaching potential customers while they browse online. At BrightSpark Ads, we offer comprehensive display advertising solutions, allowing businesses to showcase their products and services with eye-catching banner ads, video ads, and interactive content.
        </p>
        <p>
          Our platform connects advertisers with a wide network of publishers, ensuring your ads are seen by the right audience at the right time. We handle everything from creative design to placement strategy, helping you boost brand awareness and drive conversions.
        </p>
      </div>

      <div class="service service-2">
        <h3>Programmatic Advertising</h3>
        <p>
          Programmatic advertising automates the buying and selling of ad space, allowing businesses to display their ads across multiple platforms efficiently. Through our platform, advertisers can access premium publishers and benefit from real-time bidding (RTB), ensuring their ads are placed in front of the most relevant audience segments.
        </p>
        <p>
          With programmatic advertising, you gain access to advanced targeting options, including demographics, behavior, and geography. This ensures maximum return on investment by reaching potential customers where they are most active, all while optimizing ad spend through data-driven insights.
        </p>
      </div>

      <div class="service service-2">
        <h3>Social Media Marketing
        </h3>
        <p>
          Social media marketing is a powerful tool that allows businesses to reach their target audiences on platforms like Facebook, Instagram, LinkedIn, and Twitter. At BrightSpark Ads, we specialize in creating tailored social media campaigns that drive engagement, build brand awareness, and generate leads. Our team of experts will work closely with you to design compelling content, manage your social media presence, and analyze performance for optimal results.
        </p>
        <p>
          Whether you're looking to increase followers, promote a product, or boost overall engagement, our social media marketing services can help you stay connected with your audience and build meaningful relationships online.
        </p>
      </div>


      <div class="service service-2">
        <h3> Search Engine Optimization (SEO)
        </h3>
        <p>
          Description: In today’s competitive digital landscape, ranking high on search engines like Google is essential for online success. Our SEO services ensure your website is optimized to appear at the top of search results, driving organic traffic and increasing your visibility. We provide keyword research, on-page optimization, and technical SEO strategies to make sure your site is search engine-friendly.
        </p>
        <p>
          With our expertise in SEO, we can help you reach more potential customers and establish a strong online presence that leads to higher conversion rates and long-term growth.
        </p>
      </div>

    </div>
  </div>

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