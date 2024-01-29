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

// Collect form data with isset checks
$targetDirectory = "uploads/";
$targetFile = $targetDirectory . basename($_FILES["images"]["name"]);
$car_name = isset($_POST['car_name']) ? $_POST['car_name'] : '';
$car_type = isset($_POST['car_type']) ? $_POST['car_type'] : '';
$car_price = isset($_POST['car_price']) ? $_POST['car_price'] : '';
$manufacture_year = isset($_POST['manufacture_year']) ? $_POST['manufacture_year'] : '';
$drive = isset($_POST['drive']) ? $_POST['drive'] : '';
$milage = isset($_POST['milage']) ? $_POST['milage'] : '';
$engine_size = isset($_POST['engine_size']) ? $_POST['engine_size'] : '';
$fuel = isset($_POST['fuel']) ? $_POST['fuel'] : '';
$horse_power = isset($_POST['horse_power']) ? $_POST['horse_power'] : '';
$transmission = isset($_POST['transmission']) ? $_POST['transmission'] : '';
$torque = isset($_POST['torque']) ? $_POST['torque'] : '';
$aspiration = isset($_POST['aspiration']) ? $_POST['aspiration'] : '';
$acceleration = isset($_POST['acceleration']) ? $_POST['acceleration'] : '';



// Insert form data into the singleitem table
$sql = "INSERT INTO shopt (images,car_name, car_type, car_price, manufacture_year, drive, milage, engine_size, fuel, horse_power, transmission, torqu, aspiration, acceleration) 
        VALUES ('$targetFile','$car_name', '$car_type', '$car_price', '$manufacture_year', '$drive', '$milage', '$engine_size', '$fuel', '$horse_power', '$transmission', '$torque', '$aspiration', '$acceleration')";

if ($conn->query($sql) === TRUE) {
    $last_insert_id = $conn->insert_id;
    
    // Process uploaded images
    if (isset($_FILES["images"])) {
        $targetDirectory = "uploads/"; // Directory where you want to store the uploaded images
        $targetFile = $targetDirectory . basename($_FILES["images"]["name"]);

        if (move_uploaded_file($_FILES["images"]["tmp_name"], $targetFile)) {
            // Image uploaded successfully, now insert data into the database
            // $sql = "INSERT INTO shopt ( car_image, car_name,car_type, car_price) VALUES ('$targetFile', '$carName','$carType', '$carPrice')";
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
   
    }
    


// Close the database connection
$conn->close();
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
    <div class="specs">
        <H1>Specifications</h1>
        <form action="singleitem.php" method="post" enctype="multipart/form-data" id="image-upload-form" enctype="multipart/form-data">
        <input type="file" name="images" id="image-input"  accept="image/*" onchange="previewImages()" />
        <div id="image-preview" style="max-width:10%;"></div>    
        <label>Vehicle Name</label>
            <input type="text" name="car_name"required>
            <label>Vehicle Type</label>
            <input type="text" name="car_type"required>
            <label>Vehicle Price</label>
            <input type="currency" name="car_price"  required>
            <label>Year of Manufacture</label>
            <input type="number" name="manufacture_year"required>
            <label>Drive</label>
            <input type="text" name="drive"  required>
            <label>Milage</label>
            <input type="text" name="milage"  required>
            <label>Engine Size</label>
            <input type="text" name="engine_size"  required>
            <label>Fuel Type</label>
            <input type="text" name="fuel"  required>
            <label>Horse Power</label>
            <input type="text" name="horse_power"  required>
            <label>Transmission</label>
            <input type="text" name="transmission"  required>
            <label>Torque</label>
            <input type="text" name="torqu"  required>
            <label>Aspiration</label>
            <input type="text" name="aspiration"  required>
            <label>Acceleration</label>
            <input type="text" name="acceleration"  required>

            <input type="submit" value="Upload" id="button" />

    </form>
    

<script>
    function previewImages() {
        const preview = document.getElementById("image-preview");
        const input = document.getElementById("image-input");
        preview.innerHTML = "";

        if (input.files) {
            Array.from(input.files).forEach(file => {
                const reader = new FileReader();

                reader.onload = function (e) {
                    const img = document.createElement("img");
                    img.src = e.target.result;
                    img.className = "preview-image";
                    preview.appendChild(img);
                };

                reader.readAsDataURL(file);
            });
        }
    }
</script>





    </div>
    </section>
    

</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>