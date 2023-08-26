<?php include 'config.php'; ?>

<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = ($_POST['password']); // MD5 is not recommended for password hashing due to security vulnerabilities

    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if ($result) {
        file_put_contents('debug.log', "Query executed successfully\n", FILE_APPEND);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if ($row['user_type'] == 'Admin' || $row['user_type'] == 'User') {
                $_SESSION['email'] = $row['email'];
                if (isset($_POST['remember'])) {
                    $session_token = bin2hex(random_bytes(16));
                    setcookie('session_token', $session_token, time() + (60 * 60 * 24 * 30), '/');
                }
                if ($row['user_type'] == 'Admin') {
                    echo '<script>window.location.href = "/370project/admin_panel.php";</script>';
                    exit();
                } elseif ($row['user_type'] == 'User') {
                    echo '<script>window.location.href = "/370project/user.php";</script>';
                    exit();
                }
            }
        } else {
            $error = 'Incorrect email or password!';
            file_put_contents('debug.log', "No rows found: $error\n", FILE_APPEND);
        }
    } else {
        $error = mysqli_error($conn); // Capture the actual database error
        file_put_contents('debug.log', "Query error: $error\n", FILE_APPEND);
    }
}
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
                   <h3>Login now</h3>
                    <?php
                    if(isset($error)){
                        foreach($error as $errorMsg){
                            echo '<span class="error-msg">'.$errorMsg.'</span>';
                        };
                    };
                    ?>
                   <input type="email" name="email" required placeholder="Enter your email">
                   <input type="password" name="password" required placeholder="Enter your password">
                   <input type="submit" name="submit" value="login now" class="form-btn">
                   <p>Don't have an account? <a href="/370project/register.php">Register Now</a></p>
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