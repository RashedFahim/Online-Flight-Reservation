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
    <title>Delete Flight | Admin</title>
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
            color: #ffffff; /* Dark gray color */
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
            background-image: url('del.jpg');
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
            background: linear-gradient(45deg, #E8ADAA, #98AFC7);
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
            <li><a href="adminhome.php">Home</a></li>
            <li><a href="admin_about.php">About</a></li>
            <li><a href="admin_services.php">Services</a></li>
        
        </ul>
    </nav>
  <section class="content">
    <h2 style="color: #FFFFF0; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Delete Flight Schedule</h2>
    <form action="" method="post" style="background-color: rgba(255, 255, 255, 0.788); padding: 50px; border-radius: 10px; width: 400px;">
        <label for="Flight_number" style="color: #333;"><b>Flight Number</b><br></label>
        <input type="number" id="Flight_number" name="Flight_number"><br><br>
        
        <button type="submit" class="submit-button" name="delete_flight"><b>Delete Flight(s)</b></button>

        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_flight'])) {
    if (isset($_POST['Flight_number'])) {
        $flight_no = $_POST['Flight_number'];

        // Check if the flight exists in both Booking and Flight tables
        $check_query = "SELECT COUNT(*) AS count FROM Booking WHERE Flight_number = '$flight_no'";
        $result = mysqli_query($conn, $check_query);
        $row = mysqli_fetch_assoc($result);
        $count_booking = $row['count'];

        $check_query = "SELECT COUNT(*) AS count FROM Flight WHERE Flight_number = '$flight_no'";
        $result = mysqli_query($conn, $check_query);
        $row = mysqli_fetch_assoc($result);
        $count_flight = $row['count'];

        if ($count_flight > 0) {
            if ($count_booking > 0) {
                // Delete from both tables where flight_no matches
                $delete_query = "DELETE b, fd
                                 FROM Booking AS b
                                 JOIN Flight AS fd ON b.Flight_number = fd.Flight_number
                                 WHERE b.Flight_number = '$flight_no'";

                if (mysqli_query($conn, $delete_query)) {
                    if (mysqli_affected_rows($conn) > 0) {
                        echo "<br><br><b>Data Associated with Flight Number $flight_no Deleted Successfully.</b>";
                    } else {
                        echo "<br><br><b style='color:red'>Flight Number Does Not Exist in Booking Table.</b>";
                    }
                } else {
                    echo "Error: " . $delete_query . "<br>" . mysqli_error($conn);
                }
            } else {
                // Delete from Flight table only
                $delete_query = "DELETE FROM Flight WHERE Flight_number = '$flight_no'";

                if (mysqli_query($conn, $delete_query)) {
                    if (mysqli_affected_rows($conn) > 0) {
                        echo "<br><br><b>Data Associated with Flight Number $flight_no Deleted Successfully from Flight Table.</b>";
                    } else {
                        echo "<br><br><b style='color:red'>Flight Number Does Not Exist in Flight Table.</b>";
                    }
                } else {
                    echo "Error: " . $delete_query . "<br>" . mysqli_error($conn);
                }
            }
        } else {
            echo "<br><br><b style='color:red'>Flight Number Does Not Exist in the Flight Table.</b>";
        }

        mysqli_close($conn);
    }
}
?>

    </form>
</section>
    <footer style="position: fixed; bottom: 0; left: 0; right: 0; background-color: #333; color: #FFFFF0; text-align: center; padding: 10px;">
        <p>&copy; <?php echo date("Y"); ?> BRACU Airlines</p>
    </footer>
</body>
</html>


