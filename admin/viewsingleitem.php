



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

    <div class="menu" style="height: auto">
    
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
    <h1 Style="text-align:center;">Scroll Down For the Content</h1>
    <div class="viewfeatured"Style="margin-left:30%;margin-top:0px;float:left;">
    
    <marquee direction = "down"><i class="bi bi-arrow-down fs-1"></i></marquee>
    <marquee direction = "down"><i class="bi bi-arrow-down fs-1"></i></marquee>
    <marquee direction = "down"><i class="bi bi-arrow-down fs-1"></i></marquee>
    <marquee direction = "down"><i class="bi bi-arrow-down fs-1"></i></marquee>
        
    </div>
    
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

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Collect form data
//     $car_images=$_POST['images[]'];
//     $car_name = $_POST['car_name'];
//     $car_type = $_POST['car_type'];
//     $car_price = $_POST['car_price'];
//     $manufacture_year = $_POST['manufacture_year'];
//     $drive = $_POST['drive'];
//     $milage = $_POST['milage'];
//     $engine_size = $_POST['engine_size'];
//     $fuel = $_POST['fuel'];
//     $horse_power = $_POST['horse_power'];
//     $transmission = $_POST['transmission'];
//     $torque = $_POST['torqu'];
//     $aspiration = $_POST['aspiration'];
//     $acceleration = $_POST['acceleration'];

//     // Insert form data into the singleitem table
//     $sql = "INSERT INTO shopt (images,car_name, car_type, car_price, manufacture_year, drive, milage, engine_size, fuel, horse_power, transmission, torqu, aspiration, acceleration) 
//             VALUES ('$images','$car_name', '$car_type', '$car_price', '$manufacture_year', '$drive', '$milage', '$engine_size', '$fuel', '$horse_power', '$transmission', '$torque', '$aspiration', '$acceleration')";

//     if ($conn->query($sql) === TRUE) {
//         echo "Data has been uploaded successfully.";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
// }

// Display data from the singleitem table in an HTML table
$sql = "SELECT * FROM shopt";
$result = $conn->query($sql);

if ($result-> num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><td><b>Images</b></td><td><b>Vehicle Name</b></td><td><b>Vehicle Type</b></td><td><b>Vehicle Price</b></td><td><b>Year of Manufacture</b></td><td><b>Drive</b></td><td><b>Milage</b></td><td><b>Engine Size</b></td><td><b>Fuel Type</b></td><td><b>Horse Power</b></td><td><b>Transmission</b></td><td><b>Torque</b></td><td><b>Aspiration</b></td><td><b>Acceleration</b></td></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td><img src='" . $row["images"] . "' alt='Car Image' style='max-width: 100px;'></td>";
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
    }
    echo "</table>";
} else {
    echo "No data in the table.";
}

// Close the database connection
$conn->close();
?>




    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> 
    </body>
    </html>