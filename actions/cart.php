<?php
session_start();
include "../includes/db.php";

if (!isset($_SESSION['user_id'])) {
    die("Login required!");
}

$user_id = $_SESSION['user_id'];
$result = $conn->query("SELECT cart.*, products.name, products.price FROM cart 
                        JOIN products ON cart.product_id = products.id WHERE cart.user_id = '$user_id'");

$total = 0;
while ($row = $result->fetch_assoc()) {
    echo "<div>
        <h3>{$row['name']}</h3>
        <p>Price: \${$row['price']} x {$row['quantity']}</p>
        <a href='../actions/remove_from_cart.php?id={$row['id']}'>Remove</a>
    </div>";
    $total += $row['price'] * $row['quantity'];
}
echo "<p>Total: \$$total</p>";
?>
<a href="checkout.php">Checkout</a>