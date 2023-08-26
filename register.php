<?php
include 'config.php';
$error = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // DO NOT REMOVE THIS LINE
    file_put_contents('debug.log', 'worked', FILE_APPEND);



    $fname = mysqli_real_escape_string($conn, $_POST['FName']);
    $lname = mysqli_real_escape_string($conn, $_POST['LName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $cpass = mysqli_real_escape_string($conn, $_POST['cpassword']);
    $user_type = $_POST['user_type'];

    // Check if the email is already registered
    $emailCheckQuery = "SELECT * FROM user_form WHERE email = '$email'";
    $emailCheckResult = mysqli_query($conn, $emailCheckQuery);

    if(mysqli_num_rows($emailCheckResult) > 0) {
        $error[] = 'Email is already registered.';
    } else {
        if($pass != $cpass) {
            $error[] = 'Passwords do not match.';
        } else {
            // Hash the password for security
            $hashedPassword = $pass;

            // Insert user into the database
            var_dump($insertQuery);
            $insertQuery = "INSERT INTO user_form (first_name, last_name, email, password, user_type) VALUES ('$fname', '$lname', '$email', '$hashedPassword', '$user_type')";

            if(mysqli_query($conn, $insertQuery)) {
                $error[] = "Data inserted successfully";
                echo '<script>window.location.href = "login.php";</script>';
            } else {
                $error[] = 'Error during registration: ' . mysqli_error($conn);
            }
        }
    }


    

    
}


?>


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
    <title>Spice-Login</title>
    <meta name="title" content="Spice Restaurant">
    <meta name="description" content="Spice Website">

  <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="/370project/css/style.css">

  <!-- 
    - preload images
  -->
    <link rel="preload" as="image" href="/370project/image/preloader1.jpg">
    <link rel="preload" as="image" href="/370project/image/preloader2.jpg">
    <link rel="preload" as="image" href="/370project/image/preloader3.jpg">

</head>


<body id="top">
    <div class="preload" data-preaload>
        <div class="circle"></div>
        <p class="text">Spice</p>
    </div>

    <div class="topbar">
        <div class="container">

            <address class="topbar-item">
            <div class="icon">
                <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
            </div>

            <span class="span">
                123 st, Dhaka, Bangladesh
            </span>
            </address>

        <div class="separator"></div>

        <div class="topbar-item item-2">
            <div class="icon">
                <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
            </div>

            <span class="span">Daily : 8.00 am to 10.00 pm</span>
        </div>

        <a href="tel:+8801234567890" class="topbar-item link">
            <div class="icon">
                <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
            </div>

            <span class="span">+8801234567890</span>
        </a>

        <div class="separator"></div>

        <a href="mailto:booking@spice.com" class="topbar-item link">
            <div class="icon">
                <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
            </div>

            <span class="span">booking@spice.com</span>
        </a>

        </div>
    </div>

    <main>
        <article>
        <section class="login" aria-label="login" id="login">
        <div class="form-container">
            <form action="" method="post">
                <h3>Register Now</h3>
                <?php
            if(!empty($error)){
                foreach($error as $errorMsg){
                    echo '<span class="error-msg">'.$errorMsg.'</span>';
                }
            }
            ?>
                <input type="text" name="FName" required placeholder="First Name">
                <input type="text" name="LName" required placeholder="Last Name">
                <input type="email" name="email" required placeholder="Email">
                <input type="password" name="password" required placeholder="Enter your password">
                <input type="password" name="cpassword" required placeholder="Confirm your password">
                <select name="user_type">
                    <option value="User">User</option>
                    <option value="Admin">Admin</option>
                </select>
                <input type="submit" name="Submit" value="Register Now" class="form-btn">
                <p>Already have an account?<a href="/370project/login1.php">Login Now</a></p>
            </form>
        </div>
        </section>


    <footer class="footer section has-bg-image text-center"
    style="background-image: url('/370project/image/footer-bg.jpg')">
    <div class="container">


            <div class="footer-bottom">

            <p class="copyright">
            &copy; 2023 Spice. All Rights Reserved | Crafted by Team Dawgs
            </p>

            </div>

        </div>
    </footer>
    
    
    
    <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
        <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
    </a>
    
    
    
    
    
    <!-- 
    - custom js link
    -->
    <script src="/370project/js/script.js"></script>
    
    <!-- 
    - ionicon link
    -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>