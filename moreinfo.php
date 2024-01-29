<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home | Gari Kenya</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon.png" rel="icon">
  <link href="assets/img/icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" width="200px" height="150px"alt=""> 
        <!-- <img src="assets/img/logo.png" "> <span>.</span> -->
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
            <li><a href="index.php #about">About Us</a></li>
            <li><a href="shop.php">Buy a Car</a></li>
            <li><a href="#">Sell a Car</a></li>
            <li><a href="#">Get Maintenance</a></li>
            <li><a href="catalog/index.html">Our Catalog</a></li>
            
          </ul>
      </nav><!-- .navbar -->

      <a class="btn-book-a-table" href="index.php #contact">Contact Us</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>More Information</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>More Information</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <section class="sample-page">
      <div class="container" data-aos="fade-up">
      <section class="viewsingle">

    

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "garikenya"; // Replace with your actual database name
        
        // Create a connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM shopt";
$result = $conn->query($sql);

if ($result-> num_rows > 0) {
  //echo "<div><img src='" . $row["images"] . "' alt='Car Image' style='max-width: 300px;'></div>";
    echo "<table border='1'>";
    echo "<tr><td><b>Vehicle Name</b></td><td><b>Vehicle Type</b></td><td><b>Vehicle Price</b></td><td><b>Year of Manufacture</b></td><td><b>Drive</b></td><td><b>Milage</b></td><td><b>Engine Size</b></td><td><b>Fuel Type</b></td><td><b>Horse Power</b></td><td><b>Transmission</b></td><td><b>Torque</b></td><td><b>Aspiration</b></td><td><b>Acceleration</b></td></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        
        echo "<td>" . $row["car_name"] . "</td>";
        echo "<td>" . $row["car_type"] . "</td>";
        echo "<td>" . $row["car_price"] . "</td>";
        echo "<td>" . $row["manufacture_year"] . "</td>";
        echo "<td>" . $row["drive"] . "</td>";
        echo "<td>" . $row["milage"] . "</td>";
        echo "<td>" . $row["engine_size"] . "</td>";
        echo "<td>" . $row["fuel"] . "</td>";
        echo "<td>" . $row["horse_power"] . "</td>";
        echo "<td>" . $row["transmission"] . "</td>";
        echo "<td>" . $row["torqu"] . "</td>";
        echo "<td>" . $row["aspiration"] . "</td>";
        echo "<td>" . $row["acceleration"] . "</td>";
        echo "</tr>";
        break;
    }
    echo "</table>";
} else {
    echo "No data in the table.";
}

// Close the database connection
$conn->close();
?>


</section>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              Along Kiambu Road <br>
             Nairobi, Kenya<br>
            </p>
          </div>
    
        </div>
    
        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +254 795147990<br>
              <strong>Email:</strong> info@garikenya.com<br>
            </p>
          </div>
        </div>
    
        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: </strong>09AM - 08PM<br>
              <strong>Sunday:</strong> Closed
            </p>
          </div>
        </div>
    
        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
    
      </div>
    </div>
    
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Gari Kenya</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Designed by <a href="https://muasadesigns.liveblog365.com/">Muasa Creatives</a>
      </div>
    </div>
    
    </footer><!-- End Footer -->
    <!-- End Footer -->
    
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
    <div id="preloader"></div>
    
    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    
    </body>
    
    </html>
    