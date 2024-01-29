<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "garikenya";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// SQL query to fetch data from the "featured" table
$sql = "SELECT * FROM featured";
$result = $conn->query($sql);

// Check if there are any rows returned

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Toyota Prado | Gari Kenya</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/icon.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav aria-label="breadcrumb" style="margin-left:10%; padding-top:50px;">
            
            <ol class="breadcrumb ">
              <li class="breadcrumb-item"><a href="../index.html #menu">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Toyota Prado</li> 
            </ol>
            
          </nav>
          
          <hr>
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><style>
                        bdy {
                          font-family: Arial, sans-serif;
                          text-align: center;
                        }
                        
                        #image-container {
                          margin: 20px auto;
                          width: 100%;
                        }
                        
                        #big-image {
                          max-width: 500px;
                          height: 450px;
                        }
                        
                        .small-image {
                          width: 55px;
                          height: 50px;
                          margin: 5px;
                          cursor: pointer;
                        }
                      </style>
                      
                      <div id="image-container">
                        <img id="big-image" src="assets/shop item/toyota prado.jpeg" alt="Big Image">
                        <div id="small-images">
                          <img class="small-image active" src="assets/shop item/toyota prado2.jpeg" alt="Small Image 1" onclick="changeBigImage('assets/shop item/toyota prado2.jpeg',this)">
                          <img class="small-image " src="assets/shop item/toyota prado3.jpeg" alt="Small Image 2" onclick="changeBigImage('assets/shop item/toyota prado3.jpeg',this)">
                          <img class="small-image " src="assets/shop item/toyota prado4.jpeg" alt="Small Image 2" onclick="changeBigImage('assets/shop item/toyota prado4.jpeg',this)">
                          <img class="small-image " src="assets/shop item/toyota prado5.jpeg" alt="Small Image 2" onclick="changeBigImage('assets/shop item/toyota prado5.jpeg',this)">
                          <img class="small-image " src="assets/shop item/toyota prado6.jpeg" alt="Small Image 2" onclick="changeBigImage('assets/shop item/toyota prado6.jpeg',this)">
                          <img class="small-image " src="assets/shop item/toyota prado7.jpeg" alt="Small Image 2" onclick="changeBigImage('assets/shop item/toyota prado7.jpeg',this)">
                          <img class="small-image " src="assets/shop item/toyota prado8.jpeg" alt="Small Image 2" onclick="changeBigImage('assets/shop item/toyota prado8.jpeg',this)">
                        </div>
                      </div>
                      
                      <script>
                        function changeBigImage(newImageSrc) {
                          document.getElementById("big-image").src = newImageSrc;
                        
                        const smallImages = document.querySelectorAll(".small-image");
                        smallImages.forEach(image => {
                        image.classList.remove("active");
                        });
                        
                        // Add 'active' class to the clicked small image
                        clickedImage.classList.add("active");
                    }
                      </script></div>
                    <div class="col-md-5">
                        <div class="small mb-0"></div>
                        <h1 class="display-5 fw-bolder">Toyota Prado</h1>
                        <div class="fs-5 mb-5">
                            <span class="text-decoration-none">KES 5,499,999.00</span>
                        </div>
                        <p class="lead">Sunroof,front powered seats,side mirror indicators,fog lights,cruise control,roof rails</p>
                        <div class="d-flex">
                
                            <a button class="btn btn-outline-warning flex-shrink-0 me-3 bg-warning text-black" type="button"href="">
                                <i class="bi bi-whatsapp"></i>
                                Enquire Via Whatsapp
                            </button></a>
                            <a button class="btn btn-outline-warning flex-shrink-0 bg-warning text-black" type="button" href="">
                                <i class="bi bi-telephone-fill"></i>
                                Call Now
                            </button></a>
                        </div>
                    </div>
                    <style> 
                    tr{
                        border-bottom: 1px solid #01ace0;
                        text-align: center;
                    }
                    
                        </style>
                    <table>
                        <tr><th>Year of manufacture</th><td>	2016</td></tr>
                        <tr>
                            <th>Current Location</th>
                            <td>Nairobi </td>
                        </tr>
                        <tr>
                            <th>Drive</th><td>4WD</td>
                        </tr>
                        <tr><th>Mileage</th> <td>108,201 km</td></tr>
                        <tr> <th>Engine Size</th><td>2700 CC</td></tr>
                        <tr><th>Fuel type</th><td>	Petrol</td></tr>
                        <tr><th>Horse Power</th><td>163 Hp</td></tr>
                        <tr> <th>Transmission</th><td>Automatic</td>	</tr>
                        <tr> <th>Torque</th><td>246 Nm</td>	</tr>
                        <tr><th>Aspiration</th>	<td>Turbo/Supercharger</td></tr>
                        <tr> <th>Acceleration</th> <td>(0-100 Kph)	11 Secs</td></tr>
                    </table>
                </div>
            </div>
            
        </section>
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Related Vehicles</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/related/audi q7.jpeg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Audi Q7</h5>
                                    <!-- Product price-->
                                    KES 7,400,000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View Info</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Discount</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/related/bmw 528i.jpeg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">BMW 528i</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">KES 3,450,999</span>
                                    3,400,000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View Info</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/related/daihatsu hijet truck.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Daihatsu hijet</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-none">KES 1,199,999
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View Info</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/related/hino dutro.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Hino Ditro</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    KES 1,099,999
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View Info</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Discount</div>
                            <img class="card-img-top" src="assets/related/isuzu elf light truck.jpeg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Isuzu ELF Light Truck</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                   <span class="text-decoration-line-through" >KES 1,850,000</span> 1,800,000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View Info</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/related/lexus nx200t.jpeg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Lexus NX200T</h5>
                                    <!-- Product reviews-->
                                    
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-none">KES5,199,000</span>
                                   
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View Info</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/related/mazda cx5.jpeg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Mazda CX5</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-none">3,500,000</span>
                                    
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View Info</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/related/mercedes benz c200.jpeg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Mercedese Benz C200</h5>
                                   
                                    <!-- Product price-->
                                   KES 3,750,000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View Info</a></div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </section>
       
       
       
       
        
        
       
       
       
       
       
       
       
       
       
        <!-- Footer-->











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
        
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
