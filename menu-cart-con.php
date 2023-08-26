<?php include 'config.php'; ?>

<?php
if (isset($_GET["id"])) {
    $item_id = $_GET["id"];

    $sql = "SELECT * FROM cart WHERE item_name = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $item_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $total_cart = "SELECT * FROM cart";
    $total_cart_result = $conn->query($total_cart);
    $cart_num = mysqli_num_rows($total_cart_result);

    if (mysqli_num_rows($result) > 0) {
        $in_cart = "Already in Cart";
        echo json_encode(["num_cart" => $cart_num, "in_cart" => $in_cart]);
    } else {
        $insert = "INSERT INTO cart(item_name) VALUES(?)";
        $stmt = $conn->prepare($insert);
        $stmt->bind_param("s", $item_id);
        if ($stmt->execute()) {
            $in_cart = "Added to Cart";
            echo json_encode(["num_cart" => $cart_num, "in_cart" => $in_cart]);
        } else {
            echo "<script>alert('Item was not Added To Cart')</script>";
        }
    }
}

if (isset($_GET["cart_id"])) {
    $product_id = $_GET["cart_id"];

    $sql = "DELETE FROM cart WHERE item_name = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $product_id);
    
    if ($stmt->execute()) {
        echo "Removed from Cart";
    }
}
?>