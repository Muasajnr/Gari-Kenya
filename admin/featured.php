<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Database connection parameters
    $servername = "localhost"; // Replace with your MySQL server name
    $username = "root"; // Replace with your MySQL username
    $password = ""; // Replace with your MySQL password
    $dbname = "garikenya"; // Replace with your database name

    // Create a connection to the MySQL database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Process and sanitize form data
    $carName = $conn->real_escape_string($_POST["car_name"]);
    $carType = $conn->real_escape_string($_POST["car_type"]);
    $carPrice = $conn->real_escape_string($_POST["car_price"]);

    // Handle image upload
    if (isset($_FILES["image"])) {
        $targetDirectory = "uploads/"; // Directory where you want to store the uploaded images
        $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            // Image uploaded successfully, now insert data into the database
            $sql = "INSERT INTO featured ( car_image, car_name,car_type, car_price) VALUES ('$targetFile', '$carName','$carType', '$carPrice')";

            if ($conn->query($sql) === TRUE) {
                $successful_insert= "Data inserted successfully.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your image.";
        }
    } else {
        echo "No image was selected.";
    }

    // Close the database connection
    $conn->close();
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/img/icon.png" rel="icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet"href="assets/style.css">
    <title>Add Featured Vihicles </title>
</head>
<body>
<div class="top">
    <img src="../assets/img/logo.png"style="width:150px;height:80px;margin-left:20px;">
    <h1>Admin Site</h1>
    <form class="search-bar" style=" float:right;width:65%;padding-top:25px;" method="post"action="">
    <input type="search" placeholder="Search Here" style="margin-left:30% ; width:25%;padding:10px;border:none;"><button class="bi bi-search" style="padding:10px;border:none;background-color:#000;color:white;"></button>
    </form>
    
</div>

    <div class="menu" >
    
        <nav class="nav">
            <ol>
            <li ><a href="index.php" aria-current="index.php" ><i class="bi bi-grid-fill"> </i> Dashboard</a></li>

            </ol>
            <ol>
            <th><b><i class="bi bi-clipboard-plus"></i> Update</b></th>
                <li ><a href="featured.php" >Featured Vehicles</a></li>
                <li ><a href="shop.php" >Shop Vehicles</a></li>
                <li ><a href="related.php" >Related Vehicles</a></li>
                <li ><a href="singleitem.php" >Single Vehicle</a></li>
                <li ><a href="catalog.php" >Catalog</a></li>
                
            </ol>
            <ol>
            <th ><b><i class="bi bi-file-medical-fill"></i>All Vehicles</b></th>
            <li ><a href="viewfeatured.php" >Featured Vehicles</a></li>
                <li ><a href="viewshop.php" >Shop Vehicles</a></li>
                <li ><a href="viewrelated.php" >Related Vehicles</a></li>
                <li ><a href="viewsingleitem.php" >Single Vehicle</a></li>
                <li ><a href="viewcatalog.php" >Catalog</a></li>
            <li ><a href="" >Log Out <i class="bi bi-box-arrow-right"></i></a></li>

            </ol>
            
        </nav>
        
    </div>

    <section class="content">
        <div class="featured-content">
            
            <h1>Add Featured Vehicles</h1>
            
            <form action="featured.php" method="post" enctype="multipart/form-data">
            <label>Vehicle Image</label>
            <input type="file" name="image" accept="image/*" required onchange="previewImage(this);">
            <img id="image-preview" src="#" alt="Image Preview" style="display: none;max-width:14%;">
            <label>Vehicle Name</label>
            <input type="text" name="car_name"required>
            <label>Vehicle Type</label>
            <input type="text" name="car_type"required>
            <label>Vehicle Price</label>
            <input type="currency" name="car_price"  required>
            <input type="submit" id="btn" value="Upload">

    </form>
    <script>
        function previewImage(input) {
            var preview = document.getElementById('image-preview');
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(input.files[0]);
            } else {
                preview.src = '#';
                preview.style.display = 'none';
            }
        }
    </script>
            
        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>