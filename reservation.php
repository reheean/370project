<?php include 'config.php'; ?>


<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    file_put_contents('debug.log', 'worked', FILE_APPEND);

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $person = $_POST["person"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $message = $_POST["message"];
    file_put_contents('debug.log', $name, FILE_APPEND);

    $insertQuery = "INSERT INTO reservations (name, phone, person, date, time, message) VALUES ('$name', '$phone', '$person', '$date', '$time', '$message')";
    
    if ($conn->query($insertQuery) === TRUE) {

        echo "Reservation added successfully!";
    } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }
}

$conn->close();
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
    <title>Spice</title>
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

  <!-- 
    - #PRELOADER
  -->

    <div class="preload" data-preaload>
        <div class="circle"></div>
        <p class="text">Spice</p>
    </div>


  <!-- 
    - #TOP BAR
  -->

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



    <header class="header" data-header>
      <div class="container">

          <a href="#" class="logo">
              <img src="/370project/image/logo.svg" width="160" height="50" alt="Spice - Home">
          </a>

      <nav class="navbar" data-navbar>

      <button class="close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
      </button>

      <a href="#" class="logo">
          <img src="/370project/image/logo.svg" width="160" height="50" alt="Spice - Home">
      </a>

      <ul class="navbar-list">

          <li class="navbar-item">
              <a href="/370project/user.php" class="navbar-link hover-underline active">
                  <div class="separator"></div>

                  <span class="span">Home</span>
              </a>
          </li>

          <li class="navbar-item">
              <a href="/370project/menu.php" class="navbar-link hover-underline">
                  <div class="separator"></div>

                  <span class="span">Menus</span>
              </a>
          </li>

          <li class="navbar-item">
              <a href="/370project/user.php" class="navbar-link hover-underline">
                  <div class="separator"></div>

                  <span class="span">About Us</span>
              </a>
          </li>

          <li class="navbar-item">
              <a href="/370project/user.php" class="navbar-link hover-underline">
                  <div class="separator"></div>

                  <span class="span">Contact</span>
              </a>
          </li>

      </ul>

      <div class="text-center">
          <p class="headline-1 navbar-title">Visit Us</p>

              <address class="body-4">
                  123 st, Dhaka, Bangladesh
              </address>

          <p class="body-4 navbar-text">Open: 8.00 am to 10.00 pm</p>

          <a href="mailto:booking@grilli.com" class="body-4 sidebar-link">booking@spice.com</a>

          <div class="separator"></div>

          <p class="contact-label">Booking Request</p>

          <a href="tel:+8801234567890" class="body-1 contact-number hover-underline">
              +8801234567890
          </a>
      </div>

      </nav>

      <a href="/370project/index.php" class="btn btn-secondary">
          <span class="text text-1">Log Out</span>

          <span class="text text-2" aria-hidden="true">Log Out</span>
      </a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
          <span class="line line-1"></span>
          <span class="line line-2"></span>
          <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

      </div>
  </header>



<main>
    <article>
    <section class="reservation">
            <div class="container">

            <div class="form reservation-form bg-black-10">

                <form action="/370project/reservation.php" method="POST" class="form-left">

                <h2 class="headline-1 text-center">Online Reservation</h2>

                <div class="input-wrapper">
                    <input type="text" name="name" placeholder="Your Name" autocomplete="off" class="input-field" required>

                    <input type="tel" name="phone" placeholder="Phone Number" autocomplete="off" class="input-field" required>
                </div>

                <div class="input-wrapper">

                    <div class="icon-wrapper">
                    <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                    <select name="person" class="input-field">
                        <option value="1-person">1 Person</option>
                        <option value="2-person">2 Person</option>
                        <option value="3-person">3 Person</option>
                        <option value="4-person">4 Person</option>
                        <option value="5-person">5 Person</option>
                        <option value="6-person">6 Person</option>
                        <option value="7-person">7 Person</option>
                    </select>

                    <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                    </div>

                    <div class="icon-wrapper">
                    <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>

                    <input type="date" name="date" class="input-field" required>

                    <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                    </div>

                    <div class="icon-wrapper">
                    <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                    <select name="time" class="input-field">
                        <option value="08:00am">08 : 00 am</option>
                        <option value="09:00am">09 : 00 am</option>
                        <option value="010:00am">10 : 00 am</option>
                        <option value="011:00am">11 : 00 am</option>
                        <option value="012:00am">12 : 00 am</option>
                        <option value="01:00pm">01 : 00 pm</option>
                        <option value="02:00pm">02 : 00 pm</option>
                        <option value="03:00pm">03 : 00 pm</option>
                        <option value="04:00pm">04 : 00 pm</option>
                        <option value="05:00pm">05 : 00 pm</option>
                        <option value="06:00pm">06 : 00 pm</option>
                        <option value="07:00pm">07 : 00 pm</option>
                        <option value="08:00pm">08 : 00 pm</option>
                        <option value="09:00pm">09 : 00 pm</option>
                    </select>

                    <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                    </div>

                </div>

                <textarea name="message" placeholder="Message" autocomplete="off" class="input-field"></textarea>

                <button type="submit" class="btn btn-secondary">
        <span class="text text-1">Book A Table</span>
        <span class="text text-2" aria-hidden="true">Book A Table</span>
    </button>

                </form>

                <div class="form-right text-center" style="background-image: url('./assets/370project/images/form-pattern.png')">

                <h2 class="headline-1 text-center">Contact Us</h2>

                <p class="contact-label">Booking Request</p>

                <div class="separator"></div>

                <p class="contact-label">Location</p>

                <address class="body-4">
                    Restaurant St, Delicious City, <br>
                    London 9578, UK
                </address>

                <p class="contact-label">Lunch Time</p>

                <p class="body-4">
                    Monday to Sunday <br>
                    11.00 am - 2.30pm
                </p>

                <p class="contact-label">Dinner Time</p>

                <p class="body-4">
                    Monday to Sunday <br>
                    05.00 pm - 10.00pm
                </p>

                </div>

            </div>

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