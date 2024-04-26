<?php
require_once('db_connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Dashboard | Admin</title>
    
    <style>
        
        /* Inline CSS for demonstration */
        body {
            margin: 0;
            overflow: hidden;
            background: linear-gradient(45deg, #000000, #8a8a8a);
            background-size: 400% 400%;
            animation: gradient 15s infinite;
            font-family: 'Open Sans', sans-serif;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* Additional styles for the content */
        header, nav, section, footer {
            padding: 15px;
        }

        header {
            color: #FFFFF0;
            text-align: center;
            border: none;
            font-weight: bold;
        }

        header h1 {
            font-size: 30px;
            margin-bottom: 5px;
            color: blue;
            font-weight: bold;
        }

        .logo-option {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo-option img {
            width: 80px;
            margin-right: 10px;
        }

        .logo {
            font-size: 20px;
        }

        .logo-img:hover {
            transform: scale(1.1); 
            transition: transform 0.5s ease; 
        }

        .logo-img:not(:hover) {
            transform: scale(1);
            transition: transform 0.5s ease; 
        }

        .top-right-options {
            position: absolute;
            top: 15px;
            right: 15px;
            display: flex;
            align-items: center;
        }

        .top-right-options a {
            text-decoration: none;
            color: #FFFFFF; /* Dark gray color */
            margin-right: 10px;
            font-weight: bold;
            transition: color 0.3s ease, background-color 0.3s ease;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .top-right-options a:hover {
            color: #FFFFF0; /* Change to text color */
            background-color: #333; /* Dark gray color */
        }

        nav ul {
            list-style: none;
        }

        nav li {
            display: inline;
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: #FFFFF0;
            margin-right: 10px;
            font-weight: bold;
            transition: color 0.3s ease, background-color 0.3s ease;
            padding: 5px 10px;
            border-radius: 5px;
            transition: color 0.3s ease, background-color 0.3s ease;
        }

        nav a:hover {
            color: #333;
            background-color: #FFFFF0;
        }

        .content {
            background-image: url('Images/schedule.jpg');
            background-size: cover;
            background-position: center;
            padding: 170px;
            color: #333;
        }

        .content p {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .options-section {
            text-align: center;
            margin-top: 50px;
        }

        .options-section a {
            display: inline-block;
            text-decoration: none;
            background: linear-gradient(45deg, #BCC6CC, #F2D4D7);
            color: #333;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            font-weight: bold;
            transition: background 0.3s ease, color 0.3s ease;
        }

        .options-section a:hover {
            color: #FFFFF0;
            background: linear-gradient(45deg, #98AFC7, #E8ADAA);
        }

        footer {
            background-color: #333;
            color: #FFFFF0;
            text-align: center;
        }

        /* Additional styles for the scrollable table */
        .table-wrapper {
            overflow-y: auto;
            max-height: 650px; /* Adjust as needed */
            margin: 20px auto; /* Added margin for spacing */
            text-align: center; /* Center the table horizontally */
            background-color: #ffffff; /* White background */
            padding: 20px; /* Add padding for spacing */
        }

        table {
            border-collapse: collapse;
            width: 100%; /* Adjusted to fill the wrapper */
        }

        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f0f8ff; /* Blue */
            position: sticky;
            top: 0;
            z-index: 2; /* Ensure the header stays above the table data */
        }

        .fixed-heading {
            position: sticky;
            top: 0;
            background-color: #f0f8ff; /* Blue */
            z-index: 1; /* Ensure the heading stays above the table header */
            width: 100%;
            padding: 8px;
            font-weight: bold;
        }
    </style>
</head>
<body>
        
    <div class="top-right-options">
        <a href="admin_signout.php">Sign Out</a>
        <a href="">
            <?php
                if (isset($_SESSION['Name'])) {
                    echo "Welcome, " . $_SESSION['Name'] . "!";
                } else {
                    echo "You are not logged in.";
                }
            ?>
            </a>
    </div>
    <header>
        <div class="logo-option">
            <img src="images/bracu.png" alt="Logo" class="logo-img"></a>
            <div class="logo">BRACU Airlines</div>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="adminhome.php">Home</a></li>
            <li><a href="admin_about.php">About</a></li>
            <li><a href="admin_services.php">Services</a></li>
        
        </ul>
    </nav>

    <?php
    // Connect to the database
    $mysqli = new mysqli("localhost", "root", "", "database");

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Fetch flight schedules from the database
    $sql = "SELECT * FROM Flight";
    $result = $mysqli->query($sql);
    ?>

    <!-- Wrap the table inside a div with a fixed height -->
    <div class="table-wrapper">
        <h2>Flight Schedule</h2>
        <table>
            <thead>
                <tr>
                    <th>Flight Number</th>
                    <th>Flight Name</th>
                    <th>Date</th>
                    <th>Arrival City</th>
                    <th>Departure City</th>
                    <th>Arrival Time</th>
                    <th>Departure Time</th>
                    <th>Economy Seats</th>
                    <th>Economy Price</th>
                    <th>Business Seats</th>
                    <th>Business Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['Flight_number'] . "</td>";
                        echo "<td>" . $row['Flight_name'] . "</td>";
                        echo "<td>" . $row['Date'] . "</td>";
                        echo "<td>" . $row['Arrival_city'] . "</td>";
                        echo "<td>" . $row['departure_city'] . "</td>";
                        echo "<td>" . $row['Arrival_time'] . "</td>";
                        echo "<td>" . $row['Departure_time'] . "</td>";
                        echo "<td>" . $row['eco_seats'] . "</td>";
                        echo "<td>" . $row['eco_price'] . "</td>";
                        echo "<td>" . $row['business_seats'] . "</td>";
                        echo "<td>" . $row['business_price'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='11'>No flight schedules available</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
