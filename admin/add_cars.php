<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $conn->real_escape_string($_POST["name"]);
    $price = $conn->real_escape_string($_POST["price"]);
    $type = $conn->real_escape_string($_POST["type"]);
    $year_of_manufacture = $conn->real_escape_string($_POST["year_of_manufacture"]);
    $drive = $conn->real_escape_string($_POST["drive"]);
    $milage = $conn->real_escape_string($_POST["milage"]);
    $engine_size = $conn->real_escape_string($_POST["engine_size"]);
    $fuel_type = $conn->real_escape_string($_POST["fuel_type"]);
    $horse_power = $conn->real_escape_string($_POST["horse_power"]);
    $transmission = $conn->real_escape_string($_POST["transmission"]);
    $torque = $conn->real_escape_string($_POST["torque"]);
    $aspiration = $conn->real_escape_string($_POST["aspiration"]);
    $acceleration = $conn->real_escape_string($_POST["acceleration"]);
    $display_type = $conn->real_escape_string($_POST["display_type"]);
    $description = $conn->real_escape_string($_POST["description"]);

    // Initialize singleImagePath variable
    $singleImagePath = "";

    // Handling "image" file input
    if (isset($_FILES["image"])) {
        $targetDirectory = "uploads/";
        $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            $singleImagePath = $targetFile;
        } else {
            echo "Error uploading the 'image' file.";
        }
    } else {
        echo "No 'image' file was selected.";
    }

    // Handling "images[]" file input
    if (isset($_FILES["images"])) {
        foreach ($_FILES["images"]["tmp_name"] as $key => $tmp_name) {
            $targetFile = $targetDirectory . basename($_FILES["images"]["name"][$key]);

            if (move_uploaded_file($tmp_name, $targetFile)) {
                // Concatenate additional image paths
                $multipleImagesPath .= ',' . $targetFile;
            } else {
                echo "Error uploading one of the 'images[]' files.";
            }
        }
    }

    if (!empty($singleImagePath) || !empty($multipleImagesPath)) {
        // Insert data into the database
        $sql = "INSERT INTO vehicles (image, name, price, type, year_of_manufacture, drive, milage, engine_size, fuel_type, horse_power, transmission, torque, aspiration, acceleration, display_type, description, images) VALUES ('$singleImagePath','$name','$price','$type','$year_of_manufacture','$drive','$milage','$engine_size','$fuel_type','$horse_power','$transmission','$torque','$aspiration','$acceleration','$display_type','$description','$multipleImagesPath')";

        if ($conn->query($sql) === TRUE) {
            $successful_insert = "Data inserted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>









<!-- if (isset($_FILES["image"]) && ($_FILES["images[]"])) {
    $targetDirectory="uploads/";
    $targetFile=$targetDirectory.basename($_FILES["image"]["name"]);
    if(move_uploaded_file($_FILES["image"]["tmp_name"]&& ["images[]"]["tmp_name"],$targetFile)){
        $sql="INSERT INTO vehicles(image,name,price,type,year_of_manufacture,drive,milage,engine_size,fuel_type,horse_power,transmission,torque,aspiration,acceleration,display_type,description,images) VALUES ('$targetFile','$name','$price','$type','$year_of_manufacture','$drive','$milage','$engine_size','$fuel_type','$horse_power','$transmission','$torque','$aspiration','$acceleration','$display_type','$description','$targetfile')";
    }
    if ($conn->query($sql) === TRUE) {
        $successful_insert= "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }}

else {
echo "No image was selected.";
}

}
$conn->close();


?> -->








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Car - Gari Kenya</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        nav {
            background-color: #444;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
            position: relative;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #66bb6a;
        }

        nav a.active {
            color: #66bb6a;
        }

        nav a.active::after {
            content: '';
            display: block;
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #66bb6a;
            transform: scaleX(0);
            transform-origin: 100% 50%;
            transition: transform 0.3s ease-in-out;
        }

        nav a.active:hover::after,
        nav a.active:focus::after {
            transform: scaleX(1);
            transform-origin: 0 50%;
        }

        nav a:hover {
            color: #66bb6a;
        }

        nav a.active {
            text-decoration: underline;
        }


        form {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <header>
        <h1>Gari Kenya Admin Dashboard</h1>
    </header>

    <nav>
        <a href="index.php">Dashboard</a>
        <a href="add_cars.html" class="active">Add Cars</a>
        <a href="#">Customers</a>
        <a href="#">Orders</a>
        <a href="#">Reports</a>
    </nav>

    <form id="addCarForm" action="add_cars.php" method="post">
        <label for="image">Car Image:</label>
        <input type="file" id="image" name="image" accept="image/*" required>
        <div id="imagePreview"></div>
        <label for="name">Car Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="price">Car Price:</label>
        <input type="number" id="price" name="price" required>
        <label for="type">Car type:</label>
        <input type="text" id="type" name="type" required>
        <label for="year_of_manufacture">Year of Manufacture:</label>
        <input type="text" id="year_of_manufacture" name="year_of_manufacture" required>
        <label for="drive">Drive:</label>
        <input type="text" id="drive" name="drive" required>
        <label for="milage">Milage:</label>
        <input type="text" id="milage" name="milage" required>
        <label for="engine_size">Engine Size:</label>
        <input type="text" id="engine_size" name="engine_size" required>
        <label for="fuel_type">Fuel Type:</label>
        <input type="text" id="fuel_type" name="fuel_type" required>
        <label for="horse_power">Horse Power:</label>
        <input type="text" id="horse_power" name="horse_power" required>
        <label for="transmission">Transmission:</label>
        <input type="text" id="transmission" name="transmission" required>
        <label for="torque">Torque:</label>
        <input type="text" id="torque" name="torque" required>
        <label for="aspiration">Aspiration:</label>
        <input type="text" id="aspiration" name="aspiration" required>
        <label for="acceleration">Acceleration:</label>
        <input type="text" id="acceleration" name="acceleration" required>
        <label for="display_type">Display Type:</label>
        <input type="text" id="display_type" name="display_type" required>
        <label for="description">Description:</label>
        <input type="text" id="description" name="description" required>
        <label for="images">Other Images:</label>
        <input type="file" id="images" name="images[]" accept="image/*" multiple required>
        <div id="imagesPreview"></div>
        <input type="submit" value="Add Car">



        
       
    </form>

    <script>
         function addCar() {
            var name = document.getElementById('name').value;
            var image = document.getElementById('image').files[0];
            var images = document.getElementById('images').files;

            var formData = new FormData();
            formData.append('name', name);
            formData.append('image', image);

            // Append multiple images
            for (var i = 0; i < images.length; i++) {
                formData.append('images[]', images[i]);
            }

            fetch('add_car.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Car added successfully!');
                    document.getElementById('addCarForm').reset();
                    document.getElementById('imagePreview').innerHTML = '';
                    document.getElementById('imagesPreview').innerHTML = '';
                } else {
                    alert('Error adding car. Please try again.');
                }
            })
            .catch(error => console.error('Error:', error));
        }

        document.getElementById('image').addEventListener('change', function () {
            previewImage('image', 'imagePreview');
        });

        document.getElementById('images').addEventListener('change', function () {
            previewImages('images', 'imagesPreview');
        });

        function previewImage(inputId, previewId) {
            var fileInput = document.getElementById(inputId);
            var preview = document.getElementById(previewId);

            preview.innerHTML = '';

            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    var img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.maxWidth = '40%';
                    img.style.height = 'auto';
                    preview.appendChild(img);
                };

                reader.readAsDataURL(fileInput.files[0]);
            }
        }

        function previewImages(inputId, previewId) {
            var fileInput = document.getElementById(inputId);
            var preview = document.getElementById(previewId);

            preview.innerHTML = '';

            if (fileInput.files && fileInput.files.length > 0) {
                for (var i = 0; i < fileInput.files.length; i++) {
                    var reader = new FileReader();

                    reader.onload = (function (file) {
                        return function (e) {
                            var img = document.createElement('img');
                            img.src = e.target.result;
                            img.style.maxWidth = '20%';
                            img.style.height = '20%';
                            preview.appendChild(img);
                        };
                    })(fileInput.files[i]);

                    reader.readAsDataURL(fileInput.files[i]);
                }
            }
        }
    </script>
</body>

</html>
