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

$sql = "SELECT * FROM featured";
$result = $conn->query($sql);

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

    <div class="viewfeatured">
    <?php
// Fetch data from the database
$sql = "SELECT * FROM featured";
$result = $conn->query($sql);
?>


    <table>
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Type</th>
            <th>Price</th>
            
        </tr>
        <?php
        $count=1;

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo '<td>' . $count . '</td>';
                echo "<td><img src='" . $row["car_image"] . "' alt='Car Image' style='max-width: 100px;'></td>";
                echo "<td>" . $row["car_name"] . "</td>";
                echo "<td>" . $row["car_type"] . "</td>";
                echo "<td>" . $row["car_price"] . "</td>";
                echo "</tr>";
                $count++;
            }
        } else {
            echo "<tr><td colspan='4'>No data found</td></tr>";
        }
        ?>
    </table>

<?php
// Close the database connection
$conn->close();
?>
    </div>
   

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> 
    </body>
    </html>