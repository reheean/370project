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
    <link rel="stylesheet" href="/370project/css/style1.css">

  <!-- 
    - preload images
  -->
</head>

<body>

<div class="preload" data-preaload>
        <div class="circle"></div>
        <p class="text">Spice</p>
</div>

<header class="header" data-header>
      <div class="container">
        
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
              <a href="#" class="navbar-link hover-underline">
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

      <a href="/370project/checkout.php" class="btn btn-secondary">
          <span class="text text-1">Checkout</span>

          <span class="text text-2" aria-hidden="true">Checkout</span>
      </a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
          <span class="line line-1"></span>
          <span class="line line-2"></span>
          <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

      </div>
  </header>
    
    <section class="menus-area" style="background-image: url('/370project/image/back2.png');">
        <div class="container">
            <div class="section-title">
                <h4>Menu</h4>
    
            </div>
            <div class="menus">
                <div class="menu-items">

                <?php

$query = "SELECT item_category, item_image, item_name, item_price FROM menus WHERE item_category = 'Appetizers'";
$result = $conn->query($query);


$items = array();

while ($row = $result->fetch_assoc()) {
    $items[] = $row;
}


?>
                    <div class="title">Appetizers</div>
                    <?php foreach ($items as $item) { ?>
    <div class="single-menu">
        <img src="<?php echo $item['item_image']; ?>" alt="">
        <span><?php echo $item['item_price']; ?></span>
        <h4><?php echo $item['item_name']; ?></h4>
        <button class="btn">Add To Cart</button>
    </div>
<?php } ?>
                    
                </div>
                <div class="menu-items">

                <?php

$query = "SELECT item_category, item_image, item_name, item_price FROM menus WHERE item_category = 'Main Dish'";
$result = $conn->query($query);


$items = array();

while ($row = $result->fetch_assoc()) {
    $items[] = $row;
}


?>
                    <div class="title">Main Dish</div>
                    <?php foreach ($items as $item) { ?>
    <div class="single-menu">
        <img src="<?php echo $item['item_image']; ?>" alt="">
        <span><?php echo $item['item_price']; ?></span>
        <h4><?php echo $item['item_name']; ?></h4>
        <button class="btn">Add To Cart</button>
    </div>
<?php } ?>
                    
                </div>
                <div class="menu-items">

                <?php

$query = "SELECT item_category, item_image, item_name, item_price FROM menus WHERE item_category = 'Desserts'";
$result = $conn->query($query);


$items = array();

while ($row = $result->fetch_assoc()) {
    $items[] = $row;
}

?>
                    <div class="title">Desserts</div>
                    <?php foreach ($items as $item) { ?>
    <div class="single-menu">
        <img src="<?php echo $item['item_image']; ?>" alt="">
        <span><?php echo $item['item_price']; ?></span>
        <h4><?php echo $item['item_name']; ?></h4>
        <button class="btn">Add To Cart</button>
    </div>
<?php } ?>
                    
                    
                </div>
                <div class="menu-items">

                <?php

$query = "SELECT item_category, item_image, item_name, item_price FROM menus WHERE item_category = 'Drinks'";
$result = $conn->query($query);


$items = array();

while ($row = $result->fetch_assoc()) {
    $items[] = $row;
}

$conn->close();
?>
                    <div class="title">Drinks</div>
                    <?php foreach ($items as $item) { ?>
    <div class="single-menu">
        <img src="<?php echo $item['item_image']; ?>" alt="">
        <span><?php echo $item['item_price']; ?></span>
        <h4><?php echo $item['item_name']; ?></h4>
        <button class="btn">Add To Cart</button>
    </div>
<?php } ?>
                    
                    
                </div>
            </div>
        </div>
            
             
   
        
    </section>


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