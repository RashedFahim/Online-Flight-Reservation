<!DOCTYPE html>
<html lang="en">
<head>
<?php
require_once('db_connect.php');
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Add Flight Schedule | Admin</title>
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
        table {
            border-collapse: collapse;
            width: 100%; /* Adjusted to fill the wrapper */
            background-color: #ffffff; /* White background */
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
            color: #ffffff; 
            margin-right: 10px;
            font-weight: bold;
            transition: color 0.3s ease, background-color 0.3s ease;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .top-right-options a:hover {
            color: #FFFFF0; 
            background-color: #333;
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
            background-image: url('addFlights1.jpg');
            background-size: cover;
            background-position: center;
            padding: 60px;
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
            background: linear-gradient(45deg, #98AFC7, #E8ADAA);
            color: #333; 
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Flight Schedule</title>
    <style>
        /* Basic styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Edit button style */
        .edit-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
        }

        .edit-btn:hover {
            background-color: #45a049;
        }

        /* Edit form styling */
        #edit-form {
            display: none;
            width: 80%;
            margin: 20px auto;
        }

        #edit-form label {
            display: block;
            margin-bottom: 5px;
        }

        #edit-form input {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }

        #edit-form button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        #edit-form button:hover {
            background-color: #45a049;
        }

        #save-message {
            display: none;
            text-align: center;
            margin-top: 10px;
        }
    </style>

<style>
    /* CSS for changing text color */
    label,
    button {
        color: white; /* Change the color to your desired color */
    }
</style>
</head>
<body>
    <h1>Edit Flight Schedules</h1>
    <div style="overflow: auto; max-height: 500px;">
        <table id="flight-schedule-table">
        <!-- Flight schedule rows will be dynamically added here -->
        <tr>
            <th>Flight Number</th>
            <th>Flight Name</th>
            <th>Date</th>
            <th>Arrival City</th>
            <th>Departure City</th>
            <th>Arrival Time</th>
            <th>Departure Time</th>
            <th>eco_seats</th>
            <th>eco_price</th>
            <th>business_seats</th>
            <th>business_price</th>
            <th>Action</th>
        </tr>
        <?php
        // Connect to database
        $mysqli = new mysqli("localhost", "root", "", "database");

        // Check connection
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        // Fetch flight schedules from database
        $sql = "SELECT * FROM flight";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["Flight_number"] . "</td>";
                echo "<td>" . $row["Flight_name"] . "</td>";
                echo "<td>" . $row["Date"] . "</td>";
                echo "<td>" . $row["Arrival_city"] . "</td>";
                echo "<td>" . $row["departure_city"] . "</td>";
                echo "<td>" . $row["Arrival_time"] . "</td>";
                echo "<td>" . $row["Departure_time"] . "</td>";
                echo "<td>" . $row['eco_seats'] . "</td>";
                echo "<td>" . $row['eco_price'] . "</td>";
                echo "<td>" . $row['business_seats'] . "</td>";
                echo "<td>" . $row['business_price'] . "</td>";
                echo "<td><button class='edit-btn' data-id='" . $row['Flight_number'] . "'>Edit</button></td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
 </table>

<!-- Edit form -->
<div id="edit-form">
    <h2>Edit Flight Schedule</h2>
    <form id="flight-edit-form" method="POST">
        <input type="hidden" id="edit-flight-number" name="flight_number">
        <label for="edit-flight-name">Flight Name:</label>
        <input type="text" id="edit-flight-name" name="flight_name"><br>
        <label for="edit-date">Date:</label>
        <input type="date" id="edit-date" name="Date"><br>
        <label for="edit-arrival-city">Arrival City:</label>
        <input type="text" id="edit-arrival-city" name="arrival_city"><br>
        <label for="edit-departure-city">departure City:</label>
        <input type="text" id="edit-departure-city" name="departure_city"><br>       
        <label for="edit-arrival-time">Arrival Time:</label>
        <input type="time" id="edit-arrival-time" name="arrival_time" step="3600">
        <label for="edit-departure-time">Departure Time:</label>
        <input type="time" id="edit-departure-time" name="departure_time" step="3600">
        <label for="edit-eco-seats">Economy Seats:</label>
        <input type="number" id="edit-eco-seats" name="eco_seats"><br>
        <label for="edit-eco-price">Economy Price:</label>
        <input type="number" id="edit-eco-price" name="eco_price"><br>
        <label for="edit-business-seats">Business Seats:</label>
        <input type="number" id="edit-business-seats" name="business_seats"><br>
        <label for="edit-business-price">Business Price:</label>
        <input type="number" id="edit-business-price" name="business_price"><br>
        <button type="submit" id="save-changes-btn">Save Changes</button>
    </form>
</div>

<div id="save-message">Reload To See The Changes</div>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['flight_number'])) {
    // Get form data
    $flight_number = $_POST['flight_number'];
    $flight_name = $_POST['flight_name'];
    $date = $_POST['Date'];
    $arrival_city = $_POST['arrival_city'];
    $departure_city = $_POST['departure_city'];
    $arrival_time = $_POST['arrival_time'];
    $departure_time = $_POST['departure_time'];   
    $eco_seats = $_POST['eco_seats'];
    $eco_price = $_POST['eco_price'];
    $business_seats = $_POST['business_seats'];
    $business_price = $_POST['business_price'];

    // Prepare SQL statement to update flight schedule
    $sql = "UPDATE flight SET Flight_name=?, Date=?, Arrival_city=?, departure_city=?, Arrival_time=?, Departure_time=?, eco_seats=?, eco_price=?, business_seats=?, business_price=? WHERE Flight_number=?";

    // Prepare and bind parameters
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ssssssiidii", $flight_name, $date, $arrival_city, $departure_city, $arrival_time, $departure_time, $eco_seats, $eco_price, $business_seats, $business_price, $flight_number);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Flight schedule updated successfully.";
    } else {
        echo "Error updating flight schedule: " . $stmt->error;
    }

    // Close statement
    $stmt->close();

}

// Close connection
$mysqli->close();
?>



    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const editBtns = document.querySelectorAll(".edit-btn");
            const editForm = document.getElementById("edit-form");
            const flightNumberInput = document.getElementById("edit-flight-number");
            const flightNameInput = document.getElementById("edit-flight-name");
            const seatNumberInput = document.getElementById("edit-seat-number");
            const saveChangesBtn = document.getElementById("save-changes-btn");
            const saveMessage = document.getElementById("save-message");

            // Function to handle edit button click
            function handleEditButtonClick(event) {
                // Show edit form
                editForm.style.display = "block";
                saveMessage.style.display = "none"; // Hide save message
                // Retrieve flight number from data-id attribute of clicked button
                const flightNumber = event.target.getAttribute('data-id');
                flightNumberInput.value = flightNumber;
                // Retrieve other flight details from the table and populate the form
                // Here, you can make AJAX requests to fetch flight details based on flight number and populate the form fields
                // For simplicity, assuming only flight name and seat number need to be edited, we set the flight name and seat number input fields
                const flightName = event.target.parentNode.parentNode.cells[1].innerText;
                const seatNumber = event.target.parentNode.parentNode.cells[2].innerText;
                flightNameInput.value = flightName;
                seatNumberInput.value = seatNumber;
                // Similarly, populate other input fields with their corresponding flight details
            }

            // Add event listeners to edit buttons
            editBtns.forEach(btn => {
                btn.addEventListener("click", handleEditButtonClick);
            });

            // Event listener for Save Changes button
            saveChangesBtn.addEventListener("click", function () {
                const formData = new FormData(document.getElementById("flight-edit-form"));
                const xhr = new XMLHttpRequest();
                xhr.open("POST", "", true); // Sending to the same page
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        saveMessage.style.display = "block";
                    }
                };
                xhr.send(formData);
            });
        });
    </script>
</body>
</html>
