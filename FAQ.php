<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
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

        .faq-section {
            padding: 20px;
            background-color: #FFFFF0;
            color: #333;
            border-radius: 10px;
            margin-top: 30px;
        }

        .faq-question {
            font-weight: bold;
            margin-bottom: 10px;
            color: #23a6d5; /* Blue color */
        }

        .faq-answer {
            margin-bottom: 20px;
        }
    </style>
    <script>
        // Javascript
    </script>
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
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <section class="content">
        <h2 style="color: #FFFFF0; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Best Airline in the World</h2>
        <p style="color: #FFFFF0; text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.3);">Welcome to BRACU Airlines, your ultimate travel companion.</p>
        <p style="color: #FFFFF0; text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.3);">Experience luxury and comfort in every journey.</p>
        <p style="color: #FFFFF0; text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.3);">Fly with us and explore the world like never before.</p>
        <div class="options-section">
            <a href="bookticketsnow.php">Book Tickets Now</a>
            <a href="">My Flight Schedule</a>
            <a href="cancel_flight.php">Cancel My Flight</a>
        </div>
    </section>
    <div class="faq-section">
        <h2>Frequently Asked Questions (FAQ)</h2>
        <div class="faq-item">
            <div class="faq-question">Q: How do I book a flight?</div>
            <div class="faq-answer">A: To book a flight, simply log in to your account, search for available flights, select your desired flight, and proceed with the booking process.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Q: What payment methods are accepted?</div>
            <div class="faq-answer">A: We accept payments via major credit cards (Visa, MasterCard, American Express), debit cards, and online payment platforms such as PayPal.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Q: Can I cancel or modify my booking?</div>
            <div class="faq-answer">A: Yes, you can modify or cancel your booking depending on the airline's policies. Please check your booking confirmation email for details or contact our customer support.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Q: Are meals included in the ticket?</div>
            <div class="faq-answer">A: Meal options vary by flight and class. Some flights offer complimentary meals, while others have meal options available for purchase. You can check during the booking process.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Q: What should I do if my flight is delayed or canceled?</div>
            <div class="faq-answer">A: In case of flight delays or cancellations, the airline will notify you via email or SMS. You can also check your flight status on our website or contact our customer support for assistance.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Q: How can I retrieve my booking confirmation?</div>
            <div class="faq-answer">A: Your booking confirmation is sent to the email address provided during the booking process. If you haven't received it, please check your spam folder. You can also log in to your account to view and print your booking details.</div>
        </div>
    </div>
    <footer style="position: fixed; bottom: 0; left: 0; right: 0; background-color: #333; color: #FFFFF0; text-align: center; padding: 10px;">
        <p>&copy; <?php echo date("Y"); ?> BRACU Airlines</p>
    </footer>
</body>
</html>
