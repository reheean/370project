<?php include 'config.php'; ?>

<?php
if (isset($_GET["id"])){
    $item_id = $_GET["id"];
    $sql = "SELECT * FROM cart WHERE item_id = $item_id";
    $result = $conn->query($sql);
    $total_cart = "SELECT * FROM cart";
    $total_cart_result = $conn->query($total_cart);
    $cart_num =mysqli_num_rows($total_cart_result);

    if(mysql_num_rows(result) > 0){
        $in_cart = "Already in Cart";
        echo json_encode(["num_cart"=>$cart_num, "in_cart"=>$in_cart]);
    }else{
        $insert = "INSERT INTO cart(item_id) VALUES(item_id)";
        if($conn->query($insert) === true){
            $in_cart = "Added to Cart";
            echo json_encode(["num_cart"=>$cart_num, "in_cart"=>$in_cart]);
        }else{
            echo "<script>alert(Item was not Added To Cart)</script>";
        }
    }

}

if(isset($_GET["cart_id"])){
    $product_id = $_GET["cart_id"];
    $sql = "DELETE FROM cart WHERE item_id=".$item_id;

    if($conn->query($sql) === True){
        echo "Removed from Cart";
        
    }
}