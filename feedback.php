<?php
// Start the session at the beginning of the file
session_start();

// Database connection
$servername = "localhost"; // Change this if your database is hosted elsewhere
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "database"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO feedback (email, rating, Question_1, Question_2, Question_3, Question_4, Question_5) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $email, $rating, $question1, $question2, $question3, $question4, $question5);

    // Set parameters and execute
    $email = $_POST['email'];
    $rating = $_POST['rating'];
    $question1 = $_POST['question1'];
    $question2 = $_POST['question2'];
    $question3 = $_POST['question3'];
    $question4 = $_POST['question4'];
    $question5 = $_POST['question5'];
    
    if ($stmt->execute()) {
        echo "Feedback submitted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Feedback</title>
    <style>
        /* Inline CSS for demonstration */
        body {
            margin: 0;
            overflow: hidden;
            background: linear-gradient(45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
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
        /* Your existing CSS styles here */
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
            background-image: url('images/userhome.jpg');
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
            
            background-color: #FFFFF0;
            color: #23a6d5;
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

        footer {
            background-color: #333;
            color: #FFFFF0;
            text-align: center;
        }
        /* Additional styles for the feedback form */
        .feedback-form {
            margin: 50px auto;
            max-width: 600px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
        }

        .feedback-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .feedback-form label {
            display: block;
            margin-bottom: 10px;
        }

        .feedback-form input[type="email"],
        .feedback-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .feedback-form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .feedback-form input[type="submit"] {
            background-color: #23a6d5;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .feedback-form input[type="submit"]:hover {
            background-color: #1c87ab;
        }

        .feedback-form {
                    margin: 50px auto;
                    max-width: 60%; /* Adjust the width as needed */
                    background-color: rgba(255, 255, 255, 0.8);
                    padding: 10px;
                    border-radius: 10px;
                    text-align: center; /* Center align the form */
                    }

                    /* Adjusting the max-width and max-height of the form */
                    .feedback-form form {
                    max-width: 100%; /* Adjust the width as needed */
                    max-height: 80vh; /* Adjust the height as needed */
                    overflow-y: auto; /* Add vertical scrollbar if needed */
                    }

                    .feedback-form h2 {
                    margin-bottom: 20px;
                    font-size: 24px; /* Increase font size for better visibility */
                    }
                    .feedback-form {
    margin: 1px auto 50px; /* Adjust the top margin to position the form slightly higher */
    max-width: 80%;
    background-color: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 10px;
    text-align: center;
}

.feedback-form form {
    max-width: 100%;
    max-height: 55vh;
    overflow-y: auto;
}

.feedback-form h2 {
    margin-bottom: 20px;
    font-size: 24px;
}



    </style>
</head>
<body>
    <div class="top-right-options">
        <a href="SignOut.php">Sign Out</a>
        <?php
            if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
                echo "Welcome, " . $_SESSION['username'] . "!";
            } else {
                echo "You are not logged in.";
            }
        ?>
    </div>

    <header>
        <div class="logo-option">
            <a href="https://www.bracu.ac.bd/"><img src="images/bracu.png" alt="Logo" class="logo-img"></a>
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

    <div class="feedback-form">
        <h2>Feedback Form</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="rating">Rating:</label>
            <select id="rating" name="rating" required>
                <option value="5">5 Stars</option>
                <option value="4">4 Stars</option>
                <option value="3">3 Stars</option>
                <option value="2">2 Stars</option>
                <option value="1">1 Star</option>
            </select>

            <label for="question1">1. What specific features or content do you think are missing from our website that would enhance your experience?</label>
            <textarea id="question1" name="question1" rows="4" required></textarea>

            <label for="question2">2. Were you able to find the information you were looking for easily?</label>
            <textarea id="question2" name="question2" rows="4" required></textarea>

            <label for="question3">3. What features or improvements would you like to see on our website?</label>
            <textarea id="question3" name="question3" rows="4" required></textarea>

            <label for="question4">4. Did you encounter any technical issues or bugs while using the website?</label>
            <textarea id="question4" name="question4" rows="4" required></textarea>

            <label for="question5">5. Would you recommend our website to others?</label>
            <textarea id="question5" name="question5" rows="4" required></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>

    <footer style="position: fixed; bottom: 0; left: 0; right: 0; background-color: #333; color: #FFFFF0; text-align: center; padding: 10px;">
    <p>&copy; <?php echo date("Y"); ?> BRACU Airlines</p>
    </footer>
</body>
</html>
