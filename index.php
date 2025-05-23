<?php include 'config.php'; ?>

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





  <!-- 
    - #HEADER
  -->

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
                <a href="#home" class="navbar-link hover-underline active">
                    <div class="separator"></div>

                    <span class="span">Home</span>
                </a>
            </li>

            <li class="navbar-item">
                <a href="#menu" class="navbar-link hover-underline">
                    <div class="separator"></div>

                    <span class="span">Menus</span>
                </a>
            </li>

            <li class="navbar-item">
                <a href="#about" class="navbar-link hover-underline">
                    <div class="separator"></div>

                    <span class="span">About Us</span>
                </a>
            </li>

            <li class="navbar-item">
                <a href="#" class="navbar-link hover-underline">
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

        <a href="/370project/login1.php" class="btn btn-secondary">
            <span class="text text-1">Login</span>

            <span class="text text-2" aria-hidden="true">Login</span>
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

      <!-- 
        - #SLIDER
      -->

        <section class="hero text-center" aria-label="home" id="home">

        <ul class="hero-slider" data-hero-slider>

            <li class="slider-item active" data-hero-slider-item>

                <div class="slider-bg">
                    <img src="/370project/image/preloader1.jpg" width="1880" height="950" alt="" class="img-cover">
                </div>

                <p class="label-2 section-subtitle slider-reveal">Tradational with a touch of invention</p>

                <h1 class="display-1 hero-title slider-reveal">
                    For the love of <br>
                    delicious food
                </h1>

                <p class="body-2 hero-text slider-reveal">
                    Visit us with your loved ones
                </p>

                <a href="/370project/login.php" class="btn btn-primary slider-reveal">
                    <span class="text text-1">View Our Menu</span>

                    <span class="text text-2" aria-hidden="true">View Our Menu</span>
                </a>

            </li>

            <li class="slider-item" data-hero-slider-item>

                <div class="slider-bg">
                    <img src="/370project/image/preloader2.jpg" width="1880" height="950" alt="" class="img-cover">
                </div>

                <p class="label-2 section-subtitle slider-reveal">delightful experience</p>

                <h1 class="display-1 hero-title slider-reveal">
                    Flavors Inspired by <br>
                    the Seasons
                </h1>

                <p class="body-2 hero-text slider-reveal">
                    Visit us with your loved ones
                </p>

                <a href="/370project/login.php" class="btn btn-primary slider-reveal">
                    <span class="text text-1">View Our Menu</span>

                    <span class="text text-2" aria-hidden="true">View Our Menu</span>
                </a>

            </li>

            <li class="slider-item" data-hero-slider-item>

                <div class="slider-bg">
                    <img src="/370project/image/preloader3.jpg" width="1880" height="950" alt="" class="img-cover">
                </div>

                <p class="label-2 section-subtitle slider-reveal">amazing & delicious</p>

                <h1 class="display-1 hero-title slider-reveal">
                    Where every flavor <br>
                    tells a story
                </h1>

                <p class="body-2 hero-text slider-reveal">
                    Visit us with your loved ones
                </p>

                <a href="/370project/login.php" class="btn btn-primary slider-reveal">
                    <span class="text text-1">View Our Menu</span>

                    <span class="text text-2" aria-hidden="true">View Our Menu</span>
                </a>

            </li>

        </ul>

        <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
            <ion-icon name="chevron-back"></ion-icon>
        </button>

        <button class="slider-btn next" aria-label="slide to next" data-next-btn>
            <ion-icon name="chevron-forward"></ion-icon>
        </button>

        <a href="/370project/login.php" class="hero-btn has-after">
            <img src="/370project/image/teb.png" width="48" height="48" alt="booking icon">

            <span class="label-2 text-center span">Book A Table</span>
        </a>

        </section>





      <!-- 
        - #SERVICE
      -->

        <section class="section service bg-black-10 text-center" aria-label="service">
            <div class="container">

                <p class="section-subtitle label-2">Flavors For Royalty</p>

                    <h2 class="headline-1 section-title">We Offer Top Notch</h2>

                <p class="section-text">
                    Step into our restaurant and embrace a culinary voyage that marries innovation with tradition. 
                    Our menu dances with locally-sourced ingredients, crafting dishes that resonate with passion and flavor.
                </p>

            <ul class="grid-list">

                <li>
                    <div class="service-card">

                        <a href="/370project/login.php" class="has-before hover:shine">
                            <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                            <img src="/370project/image/service1.jpg" width="285" height="336" loading="lazy" alt="Appetizers"
                            class="img-cover">
                            </figure>
                        </a>

                        <div class="card-content">

                            <h3 class="title-4 card-title">
                                <a href="/370project/login.php">Appetizers</a>
                            </h3>

                            <a href="/370project/login.php" class="btn-text hover-underline label-2">View Menu</a>

                        </div>

                    </div>
                </li>

                <li>
                    <div class="service-card">

                        <a href="/370project/login.php" class="has-before hover:shine">
                            <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                            <img src="/370project/image/service2.jpg" width="285" height="336" loading="lazy" alt="Main"
                            class="img-cover">
                            </figure>
                        </a>

                        <div class="card-content">

                            <h3 class="title-4 card-title">
                                <a href="/370project/login.php">Main</a>
                            </h3>

                            <a href="/php/login.php" class="btn-text hover-underline label-2">View Menu</a>

                        </div>

                    </div>
                </li>

                <li>
                    <div class="service-card">

                        <a href="/370project/login.php" class="has-before hover:shine">
                            <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                                <img src="/370project/image/service3.jpg" width="285" height="336" loading="lazy" alt="Desserts"
                                class="img-cover">
                            </figure>
                        </a>

                        <div class="card-content">

                            <h3 class="title-4 card-title">
                                <a href="/370project/login.php">Desserts</a>
                            </h3>

                            <a href="/php/login.php" class="btn-text hover-underline label-2">View Menu</a>

                        </div>

                    </div>
                </li>
            </ul>

            <img src="/370project/image/shape-1.png" width="246" height="412" loading="lazy" alt="shape"
                class="shape shape-1 move-anim">
            <img src="/370project/image/shape-2.png" width="343" height="345" loading="lazy" alt="shape"
                lass="shape shape-2 move-anim">

            </div>
        </section>





      <!-- 
        - #ABOUT
      -->

        <section class="section about text-center" aria-labelledby="about-label" id="about">
            <div class="container">

                <div class="about-content">

                    <p class="label-2 section-subtitle" id="about-label">Our Story</p>

                        <h2 class="headline-1 section-title">Every Flavor Tells a Story</h2>

                            <p class="section-text">
                                Discover culinary magic at our restaurant. 
                                With locally-inspired ingredients and expert craftsmanship, we create dishes that sing with flavor. 
                                Join us for a memorable dining experience that celebrates the art of food.
                            </p>

                <div class="contact-label">Book Through Call</div>

                    <a href="tel:+8801234567890" class="body-1 contact-number hover-underline">+8801234567890</a>

                </div>

                <figure class="about-banner">

                <img src="/370project/image/about1.jpg" width="570" height="570" loading="lazy" alt="about banner"
                class="w-100" data-parallax-item data-parallax-speed="1">

                <div class="abs-img abs-img-1 has-before" data-parallax-item data-parallax-speed="1.75">
                    <img src="/370project/image/about-abs-image.jpg" width="285" height="285" loading="lazy" alt=""
                    class="w-100">
                </div>

                <div class="abs-img abs-img-2 has-before">
                    <img src="/370project/image/badge-2.png" width="133" height="134" loading="lazy" alt="">
                </div>

                </figure>

                <img src="/370project/image/shape-3.png" width="197" height="194" loading="lazy" alt="" class="shape">

            </div>
        </section>


      <!-- 
        - #MENU
      -->

        <section class="section menu" aria-label="menu-label" id="menu">
            <div class="container">

                <p class="section-subtitle text-center label-2">Popular Selection</p>

                <h2 class="headline-1 section-title text-center">Delicious Menu</h2>

                <ul class="grid-list">

                    <li>
                        <div class="menu-card hover:card">

                            <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                                <img src="/370project/image/menu-1.jpg" width="100" height="100" loading="lazy" alt="Cashew Nut Salad"
                                class="img-cover">
                            </figure>

                        <div>

                            <div class="title-wrapper">
                                <h3 class="title-3">
                                <a href="/370project/login.php" class="card-title">Cashew Nut Salad</a>
                                </h3>

                                <span class="badge label-1">Appetizers</span>

                                <span class="span title-2">350 BDT</span>
                            </div>

                            <p class="card-text label-1">
                                Crisp greens, roasted cashews, seasonal medley, and tangy vinaigrette create a harmonious and nutritious ensemble
                            </p>

                        </div>

                        </div>
                    </li>

                    <li>
                        <div class="menu-card hover:card">

                            <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                                <img src="/370project/image/menu-2.jpg" width="100" height="100" loading="lazy" alt="Lasagna"
                                class="img-cover">
                            </figure>

                        <div>

                            <div class="title-wrapper">
                                <h3 class="title-3">
                                    <a href="/370project/login.php" class="card-title">Lasagna</a>
                                </h3>
                                <span class="badge label-1">Main</span>
                                <span class="span title-2">675 BDT</span>
                            </div>

                        <p class="card-text label-1">
                            Layered pasta, rich meat sauce, creamy béchamel, and melted cheese meld into a comforting, flavorful masterpiece
                        </p>

                        </div>

                        </div>
                    </li>

                    <li>
                        <div class="menu-card hover:card">

                            <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                                <img src="/370project/image/menu-3.jpg" width="100" height="100" loading="lazy" alt="Biryani"
                                class="img-cover">
                            </figure>

                        <div>

                            <div class="title-wrapper">
                                <h3 class="title-3">
                                    <a href="/370project/login.php" class="card-title">Biryani</a>
                                </h3>
                                <span class="badge label-1">Main</span>

                                <span class="span title-2">700 BDT</span>
                            </div>

                        <p class="card-text label-1">
                            Fragrant rice, tender meat, aromatic spices, and caramelized onions unite in a tantalizing symphony of flavors
                        </p>

                        </div>

                        </div>
                    </li>

                    <li>
                        <div class="menu-card hover:card">

                            <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                                <img src="/370project/image/menu-4.jpg" width="100" height="100" loading="lazy" alt="Classic Pizza"
                                class="img-cover">
                            </figure>

                        <div>

                            <div class="title-wrapper">
                                <h3 class="title-3">
                                    <a href="/370project/login.php" class="card-title">Classic Pizza</a>
                                </h3>
                                <span class="badge label-1">Main</span>

                                <span class="span title-2">500 BDT</span>
                            </div>

                        <p class="card-text label-1">
                            Thin crust, tangy tomato sauce, melty cheese, and assorted toppings fuse into a savory, classic delight
                        </p>

                        </div>

                        </div>
                    </li>

                    <li>
                        <div class="menu-card hover:card">

                            <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                                <img src="/370project/image/menu-5.jpg" width="100" height="100" loading="lazy" alt="Cheesecake"
                                class="img-cover">
                            </figure>

                        <div>

                            <div class="title-wrapper">
                                <h3 class="title-3">
                                    <a href="/370project/login.php" class="card-title">Cheesecake</a>
                                </h3>
                                <span class="badge label-1">Dessert</span>

                                <span class="span title-2">450 BDT</span>
                            </div>

                        <p class="card-text label-1">
                            Velvety cream cheese, buttery crust, and luscious toppings combine for a delectable, indulgent dessert sensation
                        </p>

                        </div>

                        </div>
                    </li>

                    <li>
                        <div class="menu-card hover:card">

                            <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                                <img src="/370project/image/menu-6.jpg" width="100" height="100" loading="lazy" alt="Pudding"
                                class="img-cover">
                            </figure>

                        <div>

                            <div class="title-wrapper">
                                <h3 class="title-3">
                                    <a href="/370project/login.php" class="card-title">Pudding</a>
                                </h3>
                                <span class="badge label-1">Dessert</span>

                                <span class="span title-2">250 BDT</span>
                            </div>

                        <p class="card-text label-1">
                            Silky custard, sweet flavorings, and smooth texture blend to create a delightful, comforting pudding experience
                        </p>

                        </div>

                        </div>
                    </li>

                </ul>

                <p class="menu-text text-center">
                    Open Daily drom <span class="span">8:00 am</span> to <span class="span">10:00 pm</span>
                </p>

                <a href="/370project/login.php" class="btn btn-primary">
                    <span class="text text-1">View All Menu</span>

                    <span class="text text-2" aria-hidden="true">View All Menu</span>
                </a>

                <img src="/370project/image/shape-5.png" width="921" height="1036" loading="lazy" alt="shape"
                    class="shape shape-2 move-anim">
                <img src="/370project/image/shape-6.png" width="343" height="345" loading="lazy" alt="shape"
                    class="shape shape-3 move-anim">

            </div>
        </section>


  <!-- 
    - #FOOTER
  -->

<footer class="footer section has-bg-image text-center"
    style="background-image: url('/370project/image/footer-bg.jpg')">
    <div class="container">

        <div class="footer-top grid-list">

            <div class="footer-brand has-before has-after">

                <a href="#" class="logo">
                    <img src="/370project/image/logo.svg" width="160" height="50" loading="lazy" alt="spicy home">
                </a>

                <address class="body-4">
                    123 st, Dhaka, Bangladesh
                </address>

                <a href="mailto:booking@grilli.com" class="body-4 contact-link">booking@spicy.com</a>

                <a href="tel:+880123456789" class="body-4 contact-link">Booking Request : +8801234567890</a>

                <p class="body-4">
                    Open : 08:00 am - 10:00 pm
                </p>

                <div class="wrapper">
                    <div class="separator"></div>
                    <div class="separator"></div>
                    <div class="separator"></div>
                </div>

            </div>

            <ul class="footer-list">

                <li>
                    <a href="#" class="label-2 footer-link hover-underline">Home</a>
                </li>

                <li>
                    <a href="#menu" class="label-2 footer-link hover-underline">Menus</a>
                </li>

                <li>
                    <a href="#about" class="label-2 footer-link hover-underline">About Us</a>
                </li>

                <li>
                    <a href="#" class="label-2 footer-link hover-underline">Contact</a>
                </li>

            </ul>

            <ul class="footer-list">

                <li>
                    <a href="https://www.facebook.com/Spicekitchenbd" class="label-2 footer-link hover-underline">Facebook</a>
                </li>

                <li>
                    <a href="https://www.instagram.com/spicekitchengrill/" class="label-2 footer-link hover-underline">Instagram</a>
                </li>

                <li>
                    <a href="https://www.google.com/maps/place/Dhaka/@23.7808185,90.3371165,12z/data=!3m1!4b1!4m6!3m5!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.804093!4d90.4152376!16zL20vMGZuYjQ?entry=ttu" class="label-2 footer-link hover-underline">Google Map</a>
                </li>

            </ul>

        </div>

        <div class="footer-bottom">

            <p class="copyright">
            &copy; 2023 Spice. All Rights Reserved | Crafted by Team Dawgs
            </p>

        </div>

    </div>
</footer>


  <!-- 
    - #BACK TO TOP
  -->

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

</html>