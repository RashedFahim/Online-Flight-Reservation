<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <title>About Us</title>
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
        body {
            margin: 0;
            overflow: hidden;
            background-image: url('images/userhome.jpg'); /* Replace 'your_image_path.jpg' with the path to your image file */
            background-size: cover;
            background-position: center;
            font-family: 'Open Sans', sans-serif;
        }
        /* Additional styles for the content */
        header, nav, section, footer {
            padding: 15px;
        }

        .container {
            padding: 90px; /* Adjust content padding as needed */
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
            border-radius: 10px;
            margin: 90px; /* Add margin to center the content */
        }

        .container h1,
        .container h2,
        .container p {
            color: #FFFFF0; /* Text color */
        }

        .container ul {
            color: #FFFFF0; /* Text color */
        }

        .container p {
            margin-bottom: 10px;
        }

        /* Style for the home, services, and contact buttons */
        .home-link,
        .services-link,
        .contact-link {
            text-decoration: none;
            font-weight: bold;
            color: #FFFFF0;
            transition: color 0.3s ease; /* Add transition for color change */
        }

        .home-link:hover,
        .services-link:hover,
        .contact-link:hover {
            color: #FFFFFF; /* Change color on hover */
        }

        /* Style for button positioning */
        .button-container {
            position: absolute;
            top: 50px;
            left: 90px;
            display: flex;
            gap: 20px;
        }
        

        
    </style>
</head>
<body>
    <div class="button-container">
        <a href="home.php" class="home-link">Home</a>
        <a href="services.php" class="services-link">Services</a>
        <a href="faq.php" class="contact-link">FAQ</a>
    </div>

    <div class="container">
        <h1>About Us</h1>
        <p>Welcome to our online flight reservation system. We are dedicated to providing you with the best travel experience possible. Our platform allows you to easily search for flights, book tickets, manage your reservations, and much more.</p>
        
        <h2>Our Mission</h2>
        <p>Our mission is to make air travel more accessible and convenient for everyone. We strive to offer a user-friendly booking experience, competitive prices, and excellent customer service.</p>

        <h2>Why Choose Us?</h2>
        <p>There are many reasons to choose our flight reservation system:</p>
        <ul>
            <li>Easy-to-use interface</li>
            <li>Wide selection of flights</li>
            <li>Secure payment options</li>
            <li>24/7 customer support</li>
            <li>Flexible booking options</li>
        </ul>

        <h2>Contact Us</h2>
        <p>If you have any questions, feedback, or inquiries, please don't hesitate to contact us. Our support team is available to assist you.</p>
        <p>Email: info@example.com</p>
        <p>Phone: +1 (123) 456-7890</p>
    </div>
    <footer style="position: fixed; bottom: 0; left: 0; right: 0; background-color: #333; color: #FFFFF0; text-align: center; padding: 10px;">
        <p>&copy; <?php echo date("Y"); ?> BRACU Airlines</p>
    </footer>
    

</body>
</html>
