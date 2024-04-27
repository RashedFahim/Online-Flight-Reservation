<?php
session_start();
$servername = "localhost"; //For database server name
$username = "root"; // the database username
$password = ""; //  database password
$dbname = "database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
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
            background-image: url('schedule.jpg');
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
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            background-image: url('airplane.jpg');
            background-size: cover;
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
            width: 100%; /* Make table fill container width */
        }

        .results-section th, .results-section td {
            background: none; /* Remove background color */
            border-top: none; /* Remove top border for table cells */
            padding: 8px; /* Add padding to table cells */
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
        <a href="admin_signout.php">Sign Out</a>
        <a href="#"><?php
        
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
<section class="content">
    <div class="search-section">
        <h2 style="color: #FFFFF0; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Search Flights by Flight Number</h2>
        <form action="" method="post" style="background-color: rgba(255, 255, 255, 0.788); padding: 50px; border-radius: 10px; width: 400px;">
            <label for="Flight_number" style="color: #333;"><b>Flight Number</b><br></label>
            <input type="text" id="Flight_number" name="Flight_number"><br><br>
            
            <button type="submit" class="submit-button" name="search_flights"><b>Search Flights</b></button>
        </form>
    </div>

    <div class="results-section">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['search_flights'])) {
            $Flight_number = $_POST['Flight_number'];

            $query = "SELECT * FROM Booking WHERE Flight_number = '$Flight_number'";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                echo "<h2>Bookings for Flight Number $Flight_number</h2>";
                echo "<div style='max-height: 400px; overflow-y: auto;'>";
                echo "<table>";
                echo "<tr><th>Flight Number</th><th>Ticket ID</th><th>Passenger Name</th><th>Passenger Email</th><th>Passenger Phone</th><th>Ticket Type</th><th>Payment</th><th>User Name</th></tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                        echo "<td>" . $row["Flight_number"] . "</td>";
                        echo "<td>" . $row["ticket_id"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["phone"] . "</td>";
                        echo "<td>" . $row["ticket_type"] . "</td>";
                        echo "<td>" . $row["payment"] . "</td>";
                        echo "<td>" . $row["username"] . "</td>";
                        
                        echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
            } else {
                echo "<p>No bookings found for Flight Number $Flight_number.</p>";
            }
        }
    }
    ?>
</div>
</section>
    <footer style="position: fixed; bottom: 0; left: 0; right: 0; background-color: #333; color: #FFFFF0; text-align: center; padding: 10px;">
        <p>&copy; <?php echo date("Y"); ?> BRACU Airlines</p>
    </footer>
</body>
</html>
