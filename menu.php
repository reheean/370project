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
    <link rel="stylesheet" href="/370project/css/header.css">

  <!-- 
    - preload images
  -->
</head>

<body>
<?php include_once 'header.php'; ?>
<div class="preload" data-preaload>
        <div class="circle"></div>
        <p class="text">Spice</p>
</div> 
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
        <button class="btn" type="submit">Add To Cart</button>
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
        <button class="btn" type="submit">Add To Cart</button>
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
        <button class="btn" type="submit">Add To Cart</button>
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
        <button class="btn" type="submit">Add To Cart</button>
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
<script>
    // Get all "Add to Cart" buttons
    var addToCartButtons = document.querySelectorAll('.menu-items .btn');

    addToCartButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Get the item name from the adjacent h4 element
            var itemName = button.previousElementSibling.textContent;

            // Send data to PHP script
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'add_to_cart.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.send('productName=' + encodeURIComponent(itemName));
        });
    });
</script>






    
</body>