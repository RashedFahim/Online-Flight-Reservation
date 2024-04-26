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
    <title>Search Flight Bookings | Admin</title>
    <style>
        /* Inline CSS for demonstration */

        body {
            margin: 0;
            overflow: hidden;
            background: linear-gradient(45deg, #BCC6CC, #98AFC7, #E8ADAA, #F2D4D7);
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
            color: #333; /* Dark gray color */
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
            background-image: url('airplane.jpg');
            background-size: cover;
            background-position: center;
            padding: 170px;
            color: #333;
        }

        .options-section {
            text-align: center;
            margin-top: 50px;
        }

        .options-section a {
            display: inline-block;
            text-decoration: none;
            background-color: #FFFFF0;
            color: #333;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .options-section a:hover {
            color: #FFFFF0;
            background-color: #e73c7e;
        }

        .submit-button {
            background-color: #333;
            color: #FFFFF0;
            border: none;
            padding: 11px 30px;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .submit-button:hover {
            background-color: #e73c7e;
            color: #FFFFF0; 
        }

.content {
    background-image: url('images/airplane.jpg');
    background-size: cover; /* Adjusts the background size to cover the entire container */
    background-position: center;
    padding: 170px;
    color: #333;
}

.search-section {
    width: 400px;
}

.results-section {
    flex: 1;
    max-height: 400px;
    overflow-y: auto;
    padding-left: 20px;
    margin-left: 200px; /* Adjust this value to move the results further right */
    background-color: rgba(255, 255, 255, 1); /* Adjust the alpha value for transparency */
    border-radius: 10px;
}

.results-section table {
    background: none; /* Remove background color */
}

.results-section th, .results-section td {
    background: none; /* Remove background color */
    border-top: none; /* Remove top border for table cells */
}

.results-section tr:nth-child(even) {
    background-color: rgba(0, 0, 0, 0.1); /* Light background color for even rows */
}

        footer {
            background-color: #333;
            color: #FFFFF0;
            text-align: center;
        }
        
    </style>
    <script>
        // Javascript
    </script>
</head>
<body>
 
    <div class="top-right-options">
        <a href="SignOut.php">Sign Out</a>
        <a href="#"><?php
        
                if (isset($_SESSION['username'])) {
                    echo "Welcome, " . $_SESSION['username'] . "!";
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
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="faq.php">FAQ</a></li>
        </ul>
    </nav>
    <?php

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}

$username = $_SESSION['username']; // Get the username from the session

// Query to retrieve booked flights for the user
$query = "SELECT Flight.*, Booking.ticket_type
          FROM Flight
          INNER JOIN Booking ON Flight.Flight_number = Booking.Flight_number
          WHERE Booking.username = '$username'";

$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Flight Schedule</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Add any additional CSS or styling here -->
    <style>
        /* Additional CSS for styling */
        .content {
            background-color: rgba(255, 255, 255, 0.8); /* Modified background color */
            padding: 50px;
            border-radius: 10px;
            color: #333;
        }

        .results-section table {
            border-collapse: collapse;
            width: 100%;
        }

        .results-section th, .results-section td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .results-section th {
            background-color: #f2f2f2;
            color: #333;
        }
    </style>
</head>
<body>
    <header>
        <!-- Your header content here -->
    </header>

    <nav>
        <!-- Your navigation menu here -->
    </nav>

    <section class="content">
        <h2>My Flight Schedule</h2>
        <div class="results-section">
            <?php
            // Check if there are any flights booked by the user
// Check if there are any flights booked by the user
if (mysqli_num_rows($result) > 0) {
    // Display flight schedules in table
    echo "<table class='flight-table'>";
    echo "<thead><tr>";
    echo "<th>Flight Number</th>";
    echo "<th>Flight Name</th>";
    echo "<th>Date</th>";
    echo "<th>Arrival City</th>";
    echo "<th>Departure City</th>";
    echo "<th>Arrival Time</th>";
    echo "<th>Departure Time</th>";
    echo "<tbody>";

    while ($row = mysqli_fetch_assoc($result)) {
        // Fetch flight details based on flight number
        $flightNumber = $row['Flight_number'];
        $flightQuery = "SELECT * FROM Flight WHERE Flight_number = $flightNumber";
        $flightResult = mysqli_query($conn, $flightQuery);
        $flight = mysqli_fetch_assoc($flightResult);

        
        // Display flight details in table rows
        echo "<tr>";
        echo "<td>" . $flight['Flight_number'] . "</td>";
        echo "<td>" . $flight['Flight_name'] . "</td>";
        echo "<td>" . $flight['Date'] . "</td>";
        echo "<td>" . $flight['Arrival_city'] . "</td>";
        echo "<td>" . $flight['departure_city'] . "</td>";
        echo "<td>" . $flight['Arrival_time'] . "</td>";
        echo "<td>" . $flight['Departure_time'] . "</td>";
        echo "</tr>";
    }

    echo "</tbody></table>";
} else {
    // If no flights are booked, display a single row with a message
    echo "<table class='flight-table'>";
    echo "<thead><tr>";
    echo "<th colspan='10'>No flights booked</th>";
    echo "</tr></thead>";
    echo "</table>";
}
?>
        </div>
    </section>

    <footer style="position: fixed; bottom: 0; left: 0; right: 0; background-color: #333; color: #FFFFF0; text-align: center; padding: 10px;">
        <p>&copy; <?php echo date("Y"); ?> BRACU Airlines</p>
    </footer>
</body>
</html>                 
            