<?php include 'config.php'; ?>

<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['user_id'])) {
    $user_id = $_POST['user_id'];
    $item_id = $_POST['item_id'];

    $insertQuery = "INSERT INTO cart (user_id, item_id) VALUES ('$user_id', '$item_id')";

    if ($conn->query($insertQuery) === TRUE) {
        echo "Item added to cart successfully!";
    } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }
}

$conn->close();
?>