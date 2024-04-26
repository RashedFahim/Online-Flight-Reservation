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
            color: #FFFFFF; 
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
    </nav>
    <section class="content" style="display: flex; justify-content: center; align-items: center; position: relative; overflow-y: auto; padding-bottom: 50px; margin: 2px 0;">

        <form action="" method="post" style="background-color: rgba(255, 255, 255, 0.899); padding: 20px; border-radius: 10px; width: 400px;">
            <h2 style="color: #333; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.09); margin-bottom: 20px;">Add Flight Schedules</h2>

            <label for="Flight_number" style="color: #333;">Flight Number</label>
            <input type="number" id="Flight_number" name="Flight_number" required>
            <br>
            
            <label for="Flight_name" style="color: #333;">Flight Name</label>
            <input type="text" id="Flight_name" name="Flight_name" required>
            <br>

            <label for="Date" style="color: #333;">Date</label>
            <input type="date-local" id="Date" name="Date" required>
            <br>

            <hr>

            <label for="Arrival_city" style="color: #333;">Arrival City</label>
            <input type="text" id="Arrival_city" name="Arrival_city" required>
            <br>
            
            <label for="Arrival_time" style="color: #333;">Arrival Time</label>
            <input type="time-local" id="Arrival_time" name="Arrival_time" required>
            <br>

            <label for="Departure_city" style="color: #333;">Departure City</label>
            <input type="text" id="Departure_city" name="Departure_city" required>
            <br>
            
            <label for="Departure_time" style="color: #333;">Departure Time</label>
            <input type="time-local" id="Departure_time" name="Departure_time" required>
            <br>
            <hr>

            <label for="eco_seats" style="color: #333;">Number Of Seats |  Economy Class</label>
            <input type="number" id="eco_seats" name="eco_seats" min="0" max="400" required>
            <br>

            <label for="eco_price" style="color: #333;">Ticket Price | Economy Class</label>
            <input type="number" id="eco_price" name="eco_price" min="100" max="1000" required>
            <br>
            <hr>

            <label for="business_seats" style="color: #333;">Number Of Seats | Business Class</label>
            <input type="number" id="business_seats" name="business_seats" min="0" max="200" required>
            <br>

            <label for="business_price" style="color: #333;">Ticket Price | Business Class</label>
            <input type="number" id="business_price" name="business_price" min="1000" max="10000" required>
            <br>
            
            <br>

            <button type="submit" class="submit-button"><b>Add Flight Schedule</b>
            </button>


                <?php
                    if (isset($_POST['Flight_number']) && isset($_POST['Flight_name']) && isset($_POST['Arrival_city']) && isset($_POST['Arrival_time']) && isset($_POST['Departure_city']) && isset($_POST['Departure_time']) && isset($_POST['eco_seats']) && isset($_POST['eco_price']) && isset($_POST['business_seats']) && isset($_POST['business_price'])) {

                        // Checking if flight exists or not
                        $Flight_number = $_POST['Flight_number'];
                        $check_query = "SELECT Flight_number FROM Flight WHERE Flight_number = $Flight_number";
                        $check_result = mysqli_query($conn, $check_query);

                        if (mysqli_num_rows($check_result) > 0) {
                            echo "<br><br><b style='color:red'>Flight Number already exists in the database.</b>";
                        } else {
                        // Proceed with inserting the data
                    
                            $Flight_name = $_POST['Flight_name'];
                            $Date = $_POST['Date'];
                            $Arrival_city = $_POST['Arrival_city'];
                            $Arrival_time = $_POST['Arrival_time'];
                            $Departure_city = $_POST['Departure_city'];
                            $Departure_time = $_POST['Departure_time'];
                            $eco_seats = $_POST['eco_seats'];
                            $eco_price = $_POST['eco_price'];
                            $business_seats = $_POST['business_seats'];
                            $business_price = $_POST['business_price'];
                            $sql = "INSERT INTO Flight (Flight_number, Flight_name, Date ,Arrival_city, Arrival_time, Departure_city, Departure_time, eco_seats, eco_price, business_seats, business_price) 
                            VALUES ($Flight_number, '$Flight_name', '$Date','$Arrival_city', '$Arrival_time', '$Departure_city', '$Departure_time', $eco_seats, $eco_price, $business_seats, $business_price)";


                            if (mysqli_query($conn, $sql)) {
                                echo "<br><br><b style='color:black'>Flight Added Successfully.</b>";
                            } else {
                                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                            }
                        }
                    }

                    mysqli_close($conn);
                ?>

        </form>
    </section>

    <footer style="position: fixed; bottom: 0; left: 0; right: 0; background-color: #333; color: #FFFFF0; text-align: center; padding: 10px;">
        <p>&copy; <?php echo date("Y"); ?> BRACU Airlines</p>
    </footer>
</body>
</html>
