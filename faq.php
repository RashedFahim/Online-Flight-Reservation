<?php
session_start();

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Homepage</title>
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

        .top-right-options hover {
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

        nav hover {
            color: #333;
            background-color: #FFFFF0;
        }

        .faq-section {
            text-align: left; /* Adjusted alignment */
            margin-top: 50px;
            padding: 20px;
            max-width: 800px; /* Adjusted width */
            margin: 0 auto; /* Centered horizontally */
        }

        .faq-item {
            border-bottom: 1px solid #ccc; /* Added border between items */
            padding-bottom: 20px; /* Added spacing */
            margin-bottom: 20px; /* Added spacing */
        }

        .faq-question {
            font-weight: bold;
            font-size: 18px; /* Adjusted font size */
            color: #333;
            margin-bottom: 10px;
        }

        .faq-answer {
            font-size: 16px;
            line-height: 1.5;
            color: #333;
        }

        footer {
            background-color: #333;
            color: #FFFFF0;
            text-align: center;
            padding: 15px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
    <script>
        // JavaScript
    </script>
</head>
<body>
    <div class="top-right-options">
        <a href="SignOut.php">Sign Out</a>
        <?php
            session_start();
            if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
                echo "Welcome, " . $_SESSION['username'] . "!";
            } else {
                echo "You are not logged in.";
            }
        ?>
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
        </ul>
    </nav>
    <div class="faq-section">
        <h2>Frequently Asked Questions (FAQ)</h2>
        <div class="faq-item">
            <div class="faq-question">How do I book a flight?</div>
            <div class="faq-answer">To book a flight, simply log in to your account, search for available flights, select your desired flight, and proceed with the booking process.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">What payment methods are accepted?</div>
            <div class="faq-answer">We accept payments via major credit cards (Visa, MasterCard, American Express), debit cards, and online payment platforms such as PayPal.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Can I cancel or modify my booking?</div>
            <div class="faq-answer">Yes, you can modify or cancel your booking depending on the airline's policies. Please check your booking confirmation email for details or contact our customer support.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Are meals included in the ticket?</div>
            <div class="faq-answer">Meal options vary by flight and class. Some flights offer complimentary meals, while others have meal options available for purchase. You can check during the booking process.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">What should I do if my flight is delayed or canceled?</div>
            <div class="faq-answer">In case of flight delays or cancellations, the airline will notify you via email or SMS. You can also check your flight status on our website or contact our customer support for assistance.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">How can I retrieve my booking confirmation?</div>
            <div class="faq-answer">Your booking confirmation is sent to the email address provided during the booking process. If you haven't received it, please check your spam folder. You can also log in to your account to view and print your booking details.</div>
        </div>
    </div>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> BRACU Airlines</p>
    </footer>
</body>
</html>
