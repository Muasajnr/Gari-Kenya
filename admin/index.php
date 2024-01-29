<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gari Kenya Admin Dashboard</title>
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
            transition: color 0.3s;
        }

        nav a:hover {
            color: #66bb6a;
        }

        section {
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #444;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        @media only screen and (max-width: 600px) {
            nav a {
                display: block;
                margin: 5px;
            }

            th, td {
                font-size: 12px;
            }
        }

        .quick-stats {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .stat-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px;
            flex: 1 1 300px;
            transition: box-shadow 0.3s;
        }

        .stat-card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .stat-card i {
            font-size: 24px;
            margin-bottom: 10px;
            color: #66bb6a;
        }

        .stat-card h3 {
            margin: 0;
            font-size: 18px;
            color: #333;
        }

        .stat-card p {
            margin: 5px 0 0;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>

<body>
    <header>
        <h1>Gari Kenya Admin Dashboard</h1>
    </header>

    <nav>
        <a href="#" class="active">Dashboard</a>
        <a href="add_cars.php">Add Cars</a>
        <a href="#">Customers</a>
        <a href="#">Orders</a>
        <a href="#">Reports</a>
    </nav>

    <section>
        <div class="quick-stats">
            <div class="stat-card">
                <i class="fas fa-car"></i>
                <h3>Total Cars</h3>
                <p>150</p>
            </div>

            <div class="stat-card">
                <i class="fas fa-users"></i>
                <h3>Total Customers</h3>
                <p>200</p>
            </div>

            <div class="stat-card">
                <i class="fas fa-chart-line"></i>
                <h3>Monthly Sales</h3>
                <p>$500,000</p>
            </div>
        </div>

        <h2>Latest Cars</h2>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Car Model</th>
                    <th>Price</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Toyota Corolla</td>
                    <td>$20,000</td>
                    <td>10</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </section>
</body>

</html>
