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
    </style>
    <script>
        // Javascript
    </script>
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
    <section class="content">
        <h2 style="color: #FFFFF0; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Best Airline in the World</h2>
        <p style="color: #FFFFF0; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);">Welcome to BRACU Airlines, your ultimate travel companion.</p>
        <p style="color: #FFFFF0; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);">Experience luxury and comfort in every journey.</p>
        <p style="color: #FFFFF0; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);">Fly with us and explore the world like never before.</p>
        <div class="options-section">
            <a href="adminshowschedule.php">Show Flight Schedules</a>
            <a href="flight_bookings.php">Show Flight Bookings</a>
            <a href="addflight.php">Add Flight Schedule</a>
            <a href="modifyFlight.php">Modify Flight Schedule</a>
            <a href="deleteflight.php">Delete Flight Schedule</a>
        </div>
    </section>
    <footer style="position: fixed; bottom: 0; left: 0; right: 0; background-color: #333; color: #FFFFF0; text-align: center; padding: 10px;">
    <p>&copy; <?php echo date("Y"); ?> BRACU Airlines</p>
    </footer>
</body>
</html>
