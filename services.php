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
            padding: 250px; /* Adjust content padding as needed */
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
        <a href="about.php" class="services-link">About</a>
        <a href="faq.php" class="contact-link">FAQ</a>
    </div>

    <div class="container">
        <p>We provide ground support services at the major airports in Bangladesh, playing an important role in maintaining and improving aeronautical quality (in terms of safety, punctuality, reliability, and comfort) in two operational areas: passenger handling and ground handling. Leveraging the knowledge, skills, and spirit of hospitality that we have nurtured over many years, we provide various detailed services in different areas of the airport where the volume of work is growing.</p>
        
        <h1>Our services include:</h1>
        <ul>
            <li>Passenger Handling: We support passenger procedures and aircraft operation at airports all over Bangladesh.</li>
            <li>Ground handling: We provide high-quality services that meet airlines’ strict standards. This includes baggage and cargo loading and unloading, aircraft marshalling, Aircraft Cabin Cleaning Services and In-flight Meal Unloading.</li>
            <li>Air Cargo Handling: Handling international air cargo quickly, carefully and accurately.</li>
    </div>
    <footer style="position: fixed; bottom: 0; left: 0; right: 0; background-color: #333; color: #FFFFF0; text-align: center; padding: 10px;">
        <p>&copy; <?php echo date("Y"); ?> BRACU Airlines</p>
    </footer>

</body>
</html>
