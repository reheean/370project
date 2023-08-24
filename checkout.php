<?php
require_once 'connection.php';

$sql_cart = "SELECT * FROM cart";
$all_cart = $conn->query($sql_cart);

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
    <link rel="stylesheet" href="/css/style.css">

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

<main>
  <article>
    <h1><?php echo mysqli_num_rows($all_cart); ?> Items</h1>
    <br>
    <?php while($row_cart = mysqli_fetch_assoc($all_cart)){
        $sql = "SELECT * FROM menu WHERE item_id=".$row_cart["item_id"];
        $all_item = $conn->query($sql);
        while($row = mysqli_fetch_assoc($all_item)){
    ?>
    <div class="cartcard">
        <div class="cartimages">
            <img src="<?php echo $row["item_image"]; ?>" alt="">
        </div>

        <div class="cartcaption">
            <p class="cartproduct_name"><?php echo $row["item_name"]; ?></p>
            <p class="cartprice"><i><?php echo $row["price"]; ?></i></p>
            <button class="cartremove" data-id="<?php echo $row["item_id"]; ?>">Remove From Cart</button>
        </div>
    </div>
    <?php
    }
  }
    ?>

</main> 

<script>
    var remove = document.getElementsByClassName("remove");
    for(var i = 0; i<remove.length; i++){
        remove[i].addEventListener("click", function(event)){
            var target =event.target;
            var cart_id =target.getAttribute("data-id");
            var xml = new XMLHttpRequest();
            xml.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    target.innerHTML = this.responseText;
                    target.style.opacity = .3;
                }
            }
            xml.open("GET", "menu-cart-con.php?cart_id-"+cart_id, true);
            xml.send();

        }
    }
            
                

</body>
</html>