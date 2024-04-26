<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <style>
        body {
            background-image: url('images/register1.jpg'); /* Replace 'path_to_your_image.jpg' with the path to your image file */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh; /* Ensure full height of viewport */
            margin: 0; /* Remove default margin */
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Optional: Add a semi-transparent background to the container */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Optional: Add a shadow to the container */
        }
        .form-box {
            /* You may need to adjust the form-box styles to ensure visibility against the background */
        }
    </style>
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <?php 
            include("php/config.php");
            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $dob = $_POST['Date_of_Birth'];
                $password = $_POST['password'];
                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $address = $_POST['address'];

                // Verify the unique email
                $verify_query = mysqli_query($con,"SELECT Email FROM user WHERE Email='$email'");

                if(mysqli_num_rows($verify_query) != 0){
                    echo "<div class='message'>
                            <p>This email is already in use. Please try another one.</p>
                          </div> <br>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                }
                else{
                    mysqli_query($con,"INSERT INTO user (Username, Email, Date_of_Birth, Password, First_name, Last_name, Address) 
                                      VALUES ('$username', '$email', '$dob', '$password', '$first_name', '$last_name', '$address')") 
                                      or die("Error Occurred");

                    echo "<div class='message'>
                            <p>Registration successful!</p>
                          </div> <br>";
                    echo "<a href='index.php'><button class='btn'>Login Now</button>";
                }
            } else {
            ?>
            <header>Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="Date_of_Birth">Date of Birth</label>
                    <input type="date" name="Date_of_Birth" id="Date_of_Birth" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Already a member? <a href="index.php">Sign In</a>
                </div>
            </form>
            <?php } ?>
        </div>
    </div>
</body>
</html>
