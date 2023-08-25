<?php include 'config.php'; ?>
<?php

$error = array();

// Process form data if the form was submitted
if (isset($_POST['submit_add_item_to_menu'])) {
if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
   file_put_contents('debug.log', 'worked', FILE_APPEND);
    $item_category = $_POST['item_category'];
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];

   $item_image = $_POST['item_image'];
   file_put_contents('debug.log', $item_name, FILE_APPEND);
   $insertQuery = "INSERT INTO menus (item_category, item_image, item_name, item_price)
      VALUES ('$item_category', '$item_image', '$item_name', $item_price)";


if(mysqli_query($conn, $insertQuery)) {
   $error[] = "Data inserted successfully";
} else {
   $error[] = 'Error during registration: ' . mysqli_error($conn);
}}
}
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Spice Admin Panel</title>
      <link rel="stylesheet" href="/370project/css/admin.css">
   </head>
   <body>
      <?php
         $conn = new mysqli($servername, $username, $password, $dbname);
         
         if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
         }
         
         echo 'connected';
         ?>
      <div class="admin-panel clearfix">
         <div class="slidebar">
            <div class="logo">
               <a href=""></a>
            </div>
            <ul>
               <li><a href="#menu" id="targeted">menu</a></li>
               <li><a href="#reservation">reservation</a></li>
            </ul>
         </div>
         <div class="main">
            <div class="mainContent clearfix">
               <div id="menu">
                  <h2 class="header"></span>Menu Dashboard</h2>
                  <div class="monitor">

                  <?php

$query = "SELECT item_category, item_image, item_name, item_price FROM menus";
$result = $conn->query($query);

// Fetch data and populate into arrays
$itemCategories = array();
$itemImages = array();
$itemNames = array();
$itemPrices = array();

while ($row = $result->fetch_assoc()) {
    $itemCategories[] = $row["item_category"];
    $itemImages[] = $row["item_image"];
    $itemNames[] = $row["item_name"];
    $itemPrices[] = $row["item_price"];
}
?>
                     <div class="clearfix">
                     <ul class="menuItems">
                     <li class='menuItem'>Category</li>
        <?php foreach ($itemCategories as $category) { ?>
            <li class='menuItem'><?php echo $category; ?></li>
        <?php } ?>
                        </ul>
                        <ul class="menuItems">
                        <li class='menuItem'>Image</li>
        <?php foreach ($itemImages as $image) { ?>
            <li class='menuItem'><?php echo $image; ?></li>
        <?php } ?>
                        </ul>
                        <ul class="menuItems">
                        <li class='menuItem'>Item Name</li>
        <?php foreach ($itemNames as $name) { ?>
            <li class='menuItem'><?php echo $name; ?></li>
        <?php } ?>
                        </ul>
                        <ul class="menuItems">
                        <li class='menuItem'>Price</li>
        <?php foreach ($itemPrices as $price) { ?>
            <li class='menuItem'><?php echo $price; ?></li>
        <?php } ?>
                        </ul>
                        
                     </div>
                     <!--  -->

                     <h2>Add Item to Menu</h2>
    <form action="/370project/admin_panel.php#menu" method="post" enctype="multipart/form-data">
        <label for="item_category">Item Category:</label>
        <input type="text" name="item_category" required><br><br>
        
        <label for="item_image">Item Image:</label>
       
        <input type="text" name="item_image" required><br><br>
        
        <label for="item_name">Item Name:</label>
        <input type="text" name="item_name" required><br><br>
        
        <label for="item_price">Item Price:</label>
        <input type="number" name="item_price" step="0.01" required><br><br>
        
        <input type="submit" name="submit_add_item_to_menu" value="Add Item">

        <?php
            if(!empty($error)){
                foreach($error as $errorMsg){
                    echo '<span class="error-msg">'.$errorMsg.'</span>';
                }
            }
            ?>
    </form>

    <!--  -->
                  </div>
               </div>
               <div id="reservation">


               <?php

$query = "SELECT name, phone, time FROM reservations";
$result = $conn->query($query);

// Fetch data and populate into arrays
$names = array();
$phones = array();
$times = array();

while ($row = $result->fetch_assoc()) {
    $names[] = $row["name"];
    $phones[] = $row["phone"];
    $times[] = $row["time"];
}

$conn->close();
?>
                  <h2 class="header">Reservation</h2>

                  <div class="monitor">
                  <div class="clearfix"> 

                  <ul class="menuItems">
                        <li class='menuItem'>Name</li>
        <?php foreach ($names as $name) { ?>
            <li class='menuItem'><?php echo $name; ?></li>
        <?php } ?>
                        </ul>



                        <ul class="menuItems">
                        <li class='menuItem'>Phone</li>
        <?php foreach ($phones as $phone) { ?>
            <li class='menuItem'><?php echo $phone; ?></li>
        <?php } ?>
                        </ul>



                        <ul class="menuItems">
                        <li class='menuItem'>Time</li>
        <?php foreach ($times as $time) { ?>
            <li class='menuItem'><?php echo $time; ?></li>
        <?php } ?>
                        </ul>

                        </div>
                  </div>
               </div>
            </div>
         </div>
         
      </div>
      </div>
   </body>
</html>