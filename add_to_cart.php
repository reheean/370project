<?php include 'config.php'; ?>
<?php

// Collect data from POST request
$productName = $_POST['productName'];

// Insert item_name into cart table
$sqlInsert = "INSERT INTO cart (item_name) VALUES ('$productName')";
if ($conn->query($sqlInsert) === TRUE) {
    echo "Item added to cart successfully!";
} else {
    echo "Error: " . $sqlInsert . "<br>" . $conn->error;
}

$conn->close();
?>
